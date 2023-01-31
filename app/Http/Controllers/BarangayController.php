<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;

class BarangayController extends Controller
{
    //View
    public function index(){
        $data = Barangay::get();
   
        return view ('admin.body.barangay.barangay_index',compact('data'));
    }

    //Create
    public function add()
    {
        $data = Barangay::get();
        return view ('admin.body.barangay.action');
    }

    //Store
    public function store(Request $request )
    {
        $request->validate([
            'barangay_name' => ['required', 'string', 'max:255'],
            'barangay_chairman' => ['required', 'string', 'max:255'],
            'contact_number' => ['string', 'max:255'],
            'status' => ['required']
        ]);

        $barangay =new Barangay();
        $barangay-> barangay_name = $request->barangay_name;
        $barangay-> barangay_chairman = $request->barangay_chairman;
        $barangay-> contact_number = $request->contact_number;
        $barangay-> status = $request->status;

        $barangay -> save();

        return redirect()->route('barangay.index');
    }

    //Edit
    public function edit($id)
    {
        $data = Barangay::where('id', '=', $id) ->first();
        return view ('admin.body.barangay.edit',compact('data'));
    }

    //Update
    public function update(Request $request)
    {
        $request->validate([
            'barangay_name' => ['required', 'string', 'max:255'],
            'barangay_chairman' => ['required', 'string', 'max:255'],
            'contact_number' => ['string', 'max:255'],
            'status' => ['required']
        ]);

        $id = $request ->id;
        $barangay_name = $request->barangay_name;
        $barangay_chairman = $request->barangay_chairman;
        $contact_number = $request->contact_number;
        $status =$request->status;


        Barangay::where('id', '=', $id)->update([
            'barangay_name'=>$barangay_name,
            'barangay_chairman'=>$barangay_chairman,
            'contact_number'=>$contact_number,
            'status' =>$status

        ]);
        return redirect() ->back()->with('success', 'Barangay updated successfully.');
    }

    //Delete
    public function delete($id)
    {
        Barangay::where('id', '=', $id)->delete();
        return redirect() ->back()-> with('success','Barangay deleted successfully');
    }
 }