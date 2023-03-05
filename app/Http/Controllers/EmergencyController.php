<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emergency;

class EmergencyController extends Controller
{
    // View
    public function index()
    {
        $emergencies = Emergency::all();
        return view('emergency.index', compact('emergencies'));
    }

    // Create
    public function create()
    {
        $emergency_groups = ['Natural', 'Technological', 'Human-Caused'];
        $main_types = [
            'Natural' => ['Earthquake', 'Flood', 'Wildfire'],
            'Technological' => ['Explosion', 'Fire', 'Gas Leak'],
            'Human-Caused' => ['Terrorism', 'Armed Conflict', 'Cyber Attack']
        ];
        $emergencies = Emergency::get();
        return view('emergency.create', compact('emergencies', 'emergency_groups', 'main_types'));
    }

    // Store
    public function store(Request $request)
    {
        $emergency = new Emergency();
        $emergency->emergency_group = $request->emergency_group;
        $emergency->main_type = $request->main_type;
        $emergency->sub_type = $request->sub_type;
        $emergency->name= $request->name;
        $emergency->date_occured = $request->date_occured;
        $emergency->save();

        return redirect()->route('emergency.index');
    }

    //Show
    public function show()
    {

    }

    // Edit
    public function edit($id)
    {
        $emergency = Emergency::findOrFail($id);

        return view('emergency.edit', compact('emergency'));

    }

    // Update
    public function update(Request $request, $id)
    {
        $emergency = Emergency::findOrFail($id);
        // Update the emergency data
        $emergency->emergency_group = $request->emergency_group;
        $emergency->main_type = $request->main_type;
        $emergency->sub_type = $request->sub_type;
        $emergency->name= $request->name;
        $emergency->date_occured = $request->date_occured;
        $emergency->save();
        return redirect()->route('emergency.index')->with('success', 'Emergency updated successfully.');
    }

    // Destroy
    public function destroy($id)
    {
        Emergency::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Emergency deleted successfully');
    }
}
