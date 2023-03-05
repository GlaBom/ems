<?php

namespace App\Http\Controllers;

use App\Models\TenureStatus;
use App\Models\HousingCondition;
use App\Models\HealthCondition;
use App\Models\Barangay;
use App\Models\Ecenter;
use Illuminate\Http\Request;
use App\Models\Evacuee;

class EvacueeController extends Controller
{
    public function index()
    {
        $evacuees = Evacuee::join('barangays', 'barangays.id', '=', 'evacuees.barangay_id')
            ->join('ecenters', 'ecenters.id', '=', 'evacuees.ecenter_id')
            ->select('barangays.*', 'barangays.barangay_name as brgy',  'ecenters.*', 'ecenters.ec_name as ec', 'evacuees.*')
            ->get();

        $barangays = Barangay::all();
        $ecenters = Ecenter::all();

        return view(
            'evacuee.index',
            compact('evacuees', 'barangays', 'ecenters')
        );
    }

    public function create()
    {
        $evacuees = Evacuee::get();
        $barangays = Barangay::get();
        $ecenters = Ecenter::get();

        return view('evacuee.create', compact('evacuees', 'barangays', 'ecenters'));
    }

    public function store(Request $request)
    {
        $evacuee = new Evacuee();
        $evacuee->last_name = $request->last_name;
        $evacuee->first_name = $request->first_name;
        $evacuee->middle_name = $request->middle_name;
        $evacuee->dob = $request->dob;
        $evacuee->age = $request->age;
        $evacuee->gender = $request->gender;
        $evacuee->tenure_status = $request->tenure_status;
        $evacuee->housing_condition = $request->housing_condition;
        $evacuee->health_condition = $request->health_condition;
        $evacuee->barangay_id = $request->barangay_name;
        $evacuee->ecenter_id = $request->ec_name;

        $evacuee->save();

        return redirect()->route('evacuee.index');
    }

    public function show($id)
    {
        $evacuee = Evacuee::find($id);
        $barangays = Barangay::all();
        $ecenters = Ecenter::all();

        return view('evacuee.view', compact('evacuee', 'barangays', 'ecenters'));
    }

    public function edit($id)
    {
        $evacuee = Evacuee::find($id);
        $barangays = Barangay::all();
        $ecenters = Ecenter::all();

        return view('evacuee.edit', compact('evacuee', 'barangays', 'ecenters'));
    }

    public function update(Request $request, $id)
    {

        Evacuee::where('id', '=', $id)->update([
            'last_name' =>  $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'dob' => $request->dob,
            'age' => $request->age,
            'gender' => $request->gender,
            'tenure_status' => $request->tenure_status,
            'housing_condition' => $request->housing_condition,
            'health_condition' => $request->health_condition,
            'barangay_id' => $request->barangay_name,
            'ecenter_id' => $request->ec_name,

        ]);

        return redirect()->back()->with('success', 'Evacuee updated successfully.');
    }

    public function destroy($id)
    {
        Evacuee::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Evacuee deleted successfully');
    }
}
