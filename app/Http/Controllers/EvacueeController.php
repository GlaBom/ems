<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Ecenter;
use Illuminate\Http\Request;
use App\Models\Evacuee;

class EvacueeController extends Controller
{
    
    public function index()
    {
<<<<<<< HEAD
        $data = Evacuee::get();
        return view('evacuee.index',compact('data'));
=======
        $data = Evacuee::all();
        $barangays = Barangay::all();
        $e_centers = Ecenter::all();

        return view('admin.body.evacuee.index',['data'=>$data, 'barangays'=>$barangays, 'e_centers' => $e_centers]);
>>>>>>> b72db2a1947354a0f60b75fa39bf3143158f71d0
    }

    public function add()
    {
<<<<<<< HEAD
        $data = Evacuee::get();
        return view('evacuee.add');
=======
        $data = Evacuee::all();
        $barangays = Barangay::all();
        $e_centers = Ecenter::all();

        return view('admin.body.evacuee.add',['data'=>$data, 'barangays'=>$barangays, 'e_centers' => $e_centers]);
>>>>>>> b72db2a1947354a0f60b75fa39bf3143158f71d0
    }

    public function store(Request $request )
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => [ 'string', 'max:255'],
            'dob' => ['required'],
            // 'age' => ['required'],
            'gender' =>['required'],
            'barangay'=>['required'],
            'e_center'=>['required'],
            
        ]);

        // $evacuee = Evacuee::create([
        //     'last_name' => $request -> last_name,
        //     'first_name' => $request -> first_name,
        //     'middle_name' => $request -> middle_name,
        //     'dob' => $request -> dob,
        //     'gender' => $request -> gender,
        //     'barangay' => $request -> barangay,
        //     'e_center' => $request -> e_center
        // ]);

        $evacuee =new Evacuee();
        $evacuee-> last_name = $request ->last_name;
        $evacuee-> first_name = $request ->first_name;
        $evacuee-> middle_name = $request ->middle_name;
        $evacuee-> dob = $request ->dob;
        $evacuee-> age = $request ->age;
        $evacuee-> gender = $request ->gender;
        $evacuee-> barangay = $request ->barangay;
        $evacuee-> e_center = $request ->e_center;

        $evacuee -> save();

        return redirect() ->route('evacuee.index', ['evacuee_id' => $evacuee -> id])->with('success', 'Evacuee added successfully.');
    }

    public function edit($id)
    {
        $data = Evacuee::where('id', '=', $id) ->first();
<<<<<<< HEAD
        return view ('evacuee.edit',compact('data'));
=======
        $selectedOptionEcenter = $data ->e_center;


        return view ('admin.body.evacuee.edit',compact('data'));
>>>>>>> b72db2a1947354a0f60b75fa39bf3143158f71d0
    }

    public function update(Request $request )
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => [ 'string', 'max:255'],
            'dob' => ['required'],
            // 'age' => ['required'],
            'gender' =>['required'],
            'barangay'=>['required'],
            'e_center'=>['required'],
            
        ]);

        $id = $request ->id;
        $last_name = $request ->last_name;
        $first_name = $request ->first_name;
        $middle_name = $request ->middle_name;
        $dob = $request -> dob;
        // $age = $request -> dob;
        $gender = $request ->gender;
        $barangay = $request -> barangay;
        $e_center = $request -> e_center;

        Evacuee::where('id', '=', $id)->update([
            'last_name'=>$last_name,
            'first_name'=>$first_name,
            'middle_name'=>$middle_name,
            'dob' => $dob,
            // 'age' => $age,
            'gender'=>$gender,
            'barangay' => $barangay,
            'e_center' => $e_center

        ]);
        return redirect() ->back()->with('success', 'Evacuee updated successfully.');
    }

    public function destroy($id)
     {
         Evacuee::where('id', '=', $id)->delete();
         return redirect() ->back()-> with('success','Evacuee deleted successfully');
     }

}
