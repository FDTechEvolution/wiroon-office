<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = $this->findAll()->paginate(20);
        return view('customer.index', ['customers' => $customers]);
    }

    public function create(Request $request)
    {
        $customer = Customer::create([
            'name' => $request->name,
            'company_info' => $request->company_info,
            'mobile' => $request->mobile,
            'description' => $request->description
        ]);

        if($customer) return redirect()->back()->with('success', 'Add customer successed.');

        return redirect()->back()->with('error', 'Add customer failed.');
    }

    public function edit(Request $request)
    {
        $customer = $this->findById($request->customer_id);
        $customer->update([
            'name' => $request->name,
            'company_info' => $request->company_info,
            'mobile' => $request->mobile,
            'description' => $request->description
        ]);

        if($customer) return redirect()->back()->with('success', 'Edit customer successed.');

        return redirect()->back()->with('error', 'Edit customer failed.');
    }

    public function delete($id)
    {
        $customer = $this->findById($id);
        $customer->update([
            'status' => 'VO'
        ]);
    }


    private function findAll()
    {
        return Customer::where('status', 'CO')->orderBy('created_at', 'desc');
    }

    private function findById($id)
    {
        return Customer::find($id);
    }
}
