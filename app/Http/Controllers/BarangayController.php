<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Ecenter;
use App\Models\Emergency;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    //View
    public function index()
    {
        $data = Barangay::get();
        return view('barangay.index', compact('data'));
    }

    //Edit
    public function edit($id)
    {
        $data = Barangay::find($id);
        $ecenters = Ecenter::all();
        return view('barangay.edit', compact('data', 'ecenters'));
    }

    //Update
    public function update(Request $request)
    {
        $request->validate([
            'barangay_chairman' => ['required', 'string', 'max:255'],
            'contact_number' => ['string', 'max:255'],
        ]);

        $id = $request->id;
        $barangay_chairman = $request->barangay_chairman;
        $contact_number = $request->contact_number;

        Barangay::where('id', '=', $id)->update([
            'barangay_chairman' => $barangay_chairman,
            'contact_number' => $contact_number,
        ]);
        return redirect()->back()->with('success', 'Barangay updated successfully.');
    }

    //Delete
    public function delete($id)
    {
        Barangay::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Barangay deleted successfully');
    }
}
