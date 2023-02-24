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
        ->select('barangays.*', 'barangays.barangay_name as brgy', 'evacuees.*')
        ->get();

        $barangays = Barangay::all();

        return view('evacuee.index',
        compact('evacuees','barangays'));
    }

    public function add()
    {
        $evacuees = Evacuee::get();
        $barangays = Barangay::get();

        return view('evacuee.add', compact('evacuees', 'barangays'));
    }

    public function store(Request $request)
    {
        $evacuee = new Evacuee();
        $evacuee->last_name = $request->last_name;
        $evacuee->first_name = $request->first_name;
        $evacuee->middle_name = $request->middle_name;
        $evacuee->dob = $request->dob;
        $evacuee->gender = $request->gender;
        $evacuee->barangay_id = $request->barangay_name;

        $evacuee->save();

        return redirect()->route('evacuee.index');
    }

    public function edit($id)
    {
        $evacuee = Evacuee::find($id);

        $barangays = Barangay::all();
        return view('evacuee.edit', compact('evacuee', 'barangays'));
    }

    public function update(Request $request, $id)
    {

        Evacuee::where('id', '=', $id)->update([
            'last_name' =>  $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'barangay_id' => $request->barangay_name,

        ]);

        return redirect()->back()->with('success', 'Evacuee updated successfully.');
    }

    public function destroy($id)
    {
        Evacuee::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Evacuee deleted successfully');
    }
}
