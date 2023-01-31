<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ECenter;

class EcenterController extends Controller
{
    //View
    public function index(){
        $data = ECenter::get();
   
        return view ('ecenter.index',compact('data'));
    }

    //Create
    public function add()
    {
        $data = Ecenter::get();
        return view ('ecenter.add');
    }

    //Store
    public function store(Request $request )
    {
        $request->validate([
            'ec_name' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'],
            'manager' => ['required', 'string', 'max:255'],
            'date_of_activation' => ['required'],
            
        ]);

        $ecenter =new Ecenter();
        $ecenter-> ec_name = $request->ec_name;
        $ecenter-> barangay = $request->barangay;
        $ecenter-> manager = $request->manager;

        $ecenter-> date_of_activation = $request->date_of_activation;
        $ecenter-> date_of_deactivation = $request->date_of_deactivation;

        $ecenter -> save();

        return redirect()->route('ecenter.index');
    }

     //Edit
     public function edit($id)
     {
         $data = Ecenter::where('id', '=', $id) ->first();
         return view ('ecenter.edit',compact('data'));
     }
 
     //Update
     public function update(Request $request)
     {
        $request->validate([
            'ec_name' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'],
            'manager' => ['required', 'string', 'max:255'],
            'date_of_activation' => ['required'],          
        ]);
 
         $id = $request ->id;
         $ec_name = $request->ec_name;
         $barangay = $request->barangay;
         $manager = $request->manager;
         $date_of_activation =$request->date_of_activation;
         $date_of_deactivation =$request->date_of_deactivation;
 
 
         Ecenter::where('id', '=', $id)->update([
             'ec_name'=>$ec_name,
             'barangay'=>$barangay,
             'manager'=>$manager,
             'date_of_activation' =>$date_of_activation,
             'date_of_deactivation' =>$date_of_deactivation,
 
         ]);
         return redirect() ->back()->with('success', 'Evacuation center updated successfully.');
     }

     //Delete
     public function delete($id)
     {
         Ecenter::where('id', '=', $id)->delete();
         return redirect() ->back()-> with('success','Evacuation Center deleted successfully');
     }

}
