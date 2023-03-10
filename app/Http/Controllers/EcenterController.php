<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Models\Ecenter;

class EcenterController extends Controller
{
    //View
    public function index()
    {
        $data = ECenter::join('barangays', 'barangays.id', '=', 'ecenters.barangay_id')
            ->select('barangays.*', 'barangays.barangay_name as brgy', 'ecenters.*')
            ->get();

        $brgy = Barangay::all();

        return view('ecenter.index', compact('data', 'brgy'));
    }

    //Create
    public function create()
    {
        $data = Ecenter::get();
        $barangays = Barangay::get();
        return view('ecenter.create', compact('data', 'barangays'));
    }

    //Store
    public function store(Request $request)
    {

        $ecenter = new Ecenter();
        $ecenter->ec_name = $request->ec_name;
        $ecenter->manager = $request->manager;
        $ecenter->capacity = $request->capacity;
        $ecenter->occupancy = $request->occupancy;
        $ecenter->barangay_id = $request->barangay_name;

        $ecenter->save();

        return redirect()->route('ecenter.index');
    }

    //Edit
    public function edit($id)
    {

        $ecenter = Ecenter::find($id);
        $barangays =  Barangay::all();
        return view('ecenter.edit', compact('ecenter', 'barangays'));

    }

    public function update(Request $request, $id)
{
    Ecenter::where('id', '=', $id)->update([
        'ec_name'=>$request->ec_name,
        'manager'=>$request->manager,
        'capacity'=>$request->capacity,
        'occupancy'=>$request->occupancy,
        'barangay_id' =>$request->barangay_name,
    ]);

    return redirect() ->back()->with('success', 'Evacuation center updated successfully.');
}

    //Delete
    public function destroy($id)
    {
        Ecenter::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Evacuation Center deleted successfully');
    }
}
