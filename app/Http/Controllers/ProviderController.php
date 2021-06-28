<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $providers = $this->findAll()->paginate(20);

        return view('provider.index', ['providers' => $providers]);
    }

    public function create(Request $request)
    {
        $provider = Provider::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description
        ]);

        if($provider) return redirect()->back()->with('success', 'Add provider successed');

        return redirect()->back()->with('error', 'Add provider failed');
    }

    public function edit(Request $request)
    {
        $provider = $this->findById($request->provider_id);
        $provider->update([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description
        ]);

        if($provider) return redirect()->back()->with('success', 'Edit provider successed');

        return redirect()->back()->with('error', 'Edit provider failed');
    }

    public function delete($id)
    {
        $provider = $this->findById($id);
        $provider->update([
            'status' => 'VO'
        ]);
    }



    private function findAll()
    {
        return Provider::where('status', 'CO')->orderBy('created_at', 'desc');
    }

    private function findById($id)
    {
        return Provider::find($id);
    }
}
