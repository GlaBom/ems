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

        $data = Evacuee::join('barangays', 'barangays.id', '=', 'evacuees.barangay_id')
        ->select('barangays.*', 'barangays.barangay_name as brgy', 'evacuees.*')
        ->get();

        $barangays = Barangay::all();

        return view('evacuee.index',
        compact('data','barangays'));
    }

    public function add()
    {


        $data = Evacuee::get();
        $barangays = Barangay::get();

        return view('evacuee.add', compact('data', 'barangays'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['string', 'max:255'],
            'dob' => ['required'],
            'gender' => ['required'],
            'barangay_name' => ['required'],
            'e_center' => ['required'],

        ]);

        $evacuee = new Evacuee();
        $evacuee->last_name = $request->last_name;
        $evacuee->first_name = $request->first_name;
        $evacuee->middle_name = $request->middle_name;
        $evacuee->dob = $request->dob;
        $evacuee->gender = $request->gender;
        $evacuee->barangay_id = $request->barangay_name;

        $evacuee->save();

        return redirect()->route('evacuee.index', ['evacuee_id' => $evacuee->id])->with('success', 'Evacuee added successfully.');
    }

    public function edit($id)
    {
        $ecenter = Ecenter::find($id);
        
        $barangays = Barangay::all();
        return view('ecenter.edit', compact('ecenter', 'barangays'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['string', 'max:255'],
            'dob' => ['required'],
            // 'age' => ['required'],
            'gender' => ['required'],
            'barangay' => ['required'],
            'e_center' => ['required'],

        ]);

        $id = $request->id;
        $last_name = $request->last_name;
        $first_name = $request->first_name;
        $middle_name = $request->middle_name;
        $dob = $request->dob;
        // $age = $request -> dob;
        $gender = $request->gender;
        $barangay = $request->barangay;
        $e_center = $request->e_center;

        Evacuee::where('id', '=', $id)->update([
            'last_name' => $last_name,
            'first_name' => $first_name,
            'middle_name' => $middle_name,
            'dob' => $dob,
            // 'age' => $age,
            'gender' => $gender,
            'barangay' => $barangay,
            'e_center' => $e_center

        ]);
        return redirect()->back()->with('success', 'Evacuee updated successfully.');
    }

    public function destroy($id)
    {
        Evacuee::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Evacuee deleted successfully');
    }
}
