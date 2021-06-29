<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectItem;
use App\Models\Customer;
use App\Models\Provider;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public $project_item = [];

    public function index()
    {
        $projects = Project::with('items', 'customer')->orderBy('created_at', 'DESC')->paginate(20);
        $customers = Customer::where('status', 'CO')->get();
        $providers = Provider::where('status', 'CO')->get();

        return view('project.index', ['projects' => $projects, 'customers' => $customers, 'providers' => $providers]);
    }

    public function create(Request $request)
    {
        $project = Project::create([
            'name' => $request->name,
            'customer_id' => $request->customer,
            'docdate' => $this->convertDateFormat($request->docdate),
            'startdate' => $this->convertDateFormat($request->startdate),
            'enddate' => $this->convertDateFormat($request->enddate),
            'totalamt' => 0,
            'status' => 'INACTIVE',
            'description' => $request->description
        ]);

        if(isset($request->project_item)) {
            $amount = $this->createProjectItem($request->project_item, $project->id);

            $project_amt = $this->findById($project->id);
            $project_amt->update([
                'totalamt' => $amount
            ]);
        }
        
        if($project) return redirect()->back()->with('success', 'Add project successed.');

        return redirect()->back()->with('error', 'Add project failed.');
    }

    public function edit(Request $request)
    {
        $project = $this->findById($request->project_id);
        $project->update([
            'name' => $request->name,
            'customer_id' => $request->customer,
            'docdate' => $this->convertDateFormat($request->docdate),
            'startdate' => $this->convertDateFormat($request->startdate),
            'enddate' => $this->convertDateFormat($request->enddate),
            'description' => $request->description
        ]);

        if($project) return redirect()->back()->with('success', 'Edit project successed.');

        return redirect()->back()->with('error', 'Edit project failed.');
    }

    public function projectStatus(Request $request)
    {
        $project = $this->findById($request->id);
        $project->update([
            'status' => strtoupper($request->status)
        ]);

        if($project) return redirect()->back()->with('success', 'Project '. $project->name .' is status '.$request->status);

        return redirect()->back()->with('error', 'Project failed is status '.$request->status);
    }

    public function deleteItem(Request $request)
    {
        $item = $this->findByItemId($request->item_id);
        $project = $this->findById($item->project_id);

        $update_amount = $project->totalamt - $item->amount;
        $item->update([
            'status' => 'VO'
        ]);
        $project->update([
            'totalamt' => $update_amount
        ]);

        if($item && $project) return redirect()->back()->with('success', 'Item deleted.');

        return redirect()->back()->with('error', 'Item delete failed.');
    }

    public function addNewItem(Request $request)
    {
        $project = $this->findById($request->project_id);
        $item = ProjectItem::create([
            'project_id' => $request->project_id,
            'name' => $request->item_name,
            'type' => $request->item_type,
            'provider_id' => $request->item_provider,
            'amount' => $request->item_amount,
            'description' => $request->item_description,
            'status' => 'CO'
        ]);

        $update_amount = $project->totalamt + $request->item_amount;
        $project->update([
            'totalamt' => $update_amount
        ]);

        if($item && $project) return redirect()->back()->with('success', 'Add new item successed.');

        return redirect()->back()->with('error', 'Add new item failed.');
    }

    public function editItem(Request $request)
    {
        $item = $this->findByItemId($request->item_id);
        $project = $this->findById($item->project_id);
        
        $new_amount = $item->amount != $request->item_amount ? $request->item_amount : $item->amount;
        $new_totalamt = ($project->totalamt - $item->amount) + $new_amount;

        $item->update([
            'name' => $request->item_name,
            'type' => $request->item_type,
            'provider' => $request->item_provider,
            'amount' => $new_amount,
            'description' => $request->item_description
        ]);

        $project->update([
            'totalamt' => $new_totalamt
        ]);
        
        if($item && $project) return redirect()->back()->with('success', 'Update item project '. $project->name.' successed.');

        return redirect()->back()->with('error', 'Update item project '. $project->name.' failed.');
    }



    private function createProjectItem($project_item, $project_id)
    {
        $items = json_decode($project_item, true);
        $totalamt = 0;
        foreach($items as $item) {
            ProjectItem::create([
                'project_id' => $project_id,
                'provider_id' => $item['provider'],
                'name' => $item['name'],
                'type' => $item['type'],
                'amount' => $item['amount'],
                'description' => $item['description']
            ]);

            $totalamt += $item['amount'];
        }

        return $totalamt;
    }

    private function findAll()
    {
        return Project::all();
    }

    private function findById($id)
    {
        return Project::find($id);
    }

    private function findAllItem($project_id)
    {
        return ProjectItem::where('project_id', $project_id)->get();
    }

    private function findByItemId($id)
    {
        return ProjectItem::find($id);
    }

    private function convertDateFormat($date)
    {
        $correntDate = explode('/', $date);
        return $correntDate[2].'-'.$correntDate[1].'-'.$correntDate[0];
    }
}
