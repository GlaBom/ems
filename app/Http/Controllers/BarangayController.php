<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;

class BarangayController extends Controller
{
    public function view(){
        $data = Barangay::get();
        return view ('admin.body.barangay.barangay_directory',compact('data'));
    }

    public function addBarangay()
    {
        $data = Barangay::get();
        return view ('admin.body.barangay.barangay_directory');
    }

    public function saveBarangay(Request $request )
    {
        $request->validate([
            'barangay_name' => ['required', 'string', 'max:255'],
            'barangay_chairman' => ['required', 'string', 'max:255'],
            'contact_number' => ['required', 'string', 'max:255'],
        ]);

        $barangay_name = $request ->barangay_name;
        $barangay_chairman = $request ->barangay_chairman;
        $contact_number = $request ->contact_number;

        $barangay =new Barangay();
        $barangay-> barangay_name = $barangay_name;
        $barangay-> barangay_chairman = $barangay_chairman;
        $barangay-> contact_number = $contact_number;

        $barangay -> save();

        return redirect() ->back();
    }
}
