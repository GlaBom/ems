<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emergency;

class EmergencyController extends Controller
{
     //View
     public function index(){
        $data = Emergency::get();
   
        return view ('emergency.index',compact('data'));
    }

    //Create
    public function add()
    {
        $data = Emergency::get();
        return view ('emergency.add');
    }

    //Store
    public function store(Request $request )
    {
        $request->validate([
            'emergency_type' => ['required', 'string', 'max:255'],
            'date_occured' => ['required'],
            'description' => ['required', 'string', 'max:255'],
           
        ]);

        $emergency =new Emergency();
        $emergency-> emergency_type = $request->emergency_type;
        $emergency-> date_occured = $request->date_occured;
        $emergency-> description = $request->description;
      
        $emergency -> save();

        return redirect()->route('emergency.index');
    }

     //Edit
     public function edit($id)
     {
         $data = Emergency::where('id', '=', $id) ->first();
         return view ('emergency.edit',compact('data'));
     }
 
     //Update
     public function update(Request $request)
     {
        $request->validate([
            'emergency_type' => ['required', 'string', 'max:255'],
            'date_occured' => ['required'],
            'description' => ['required', 'string', 'max:255'],
        ]);

         $id = $request ->id;
         $emergency_type = $request->emergency_type;
         $date_occured = $request->date_occured;
         $description = $request->description; 
 
         Emergency::where('id', '=', $id)->update([
             'emergency_type'=>$emergency_type,
             'date_occured'=>$date_occured,
             'description'=>$description,
 
         ]);
         return redirect() ->back()->with('success', 'Emergency updated successfully.');
     }

     //Delete
     public function delete($id)
     {
        Emergency::where('id', '=', $id)->delete();
         return redirect() ->back()-> with('success','Emergency deleted successfully');
     }
}
