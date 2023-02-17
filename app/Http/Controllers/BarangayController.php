<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;

class BarangayController extends Controller
{
    //View
    public function index(){
        $data = Barangay::get();
   
        return view ('barangay.index',compact('data'));
    }

    //Edit
    public function edit($id)
    {
        $data = Barangay::find($id);
        return view ('barangay.edit',compact('data'));
    }

    //Update
    public function update(Request $request)
    {
        $request->validate([
            'barangay_chairman' => ['required', 'string', 'max:255'],
            'contact_number' => ['string', 'max:255'],
        ]);

        $id = $request ->id;
        $barangay_chairman = $request->barangay_chairman;
        $contact_number = $request->contact_number;

        Barangay::where('id', '=', $id)->update([
            'barangay_chairman'=>$barangay_chairman,
            'contact_number'=>$contact_number,
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