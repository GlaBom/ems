<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calamity;

class CalamityController extends Controller
{
     //View
     public function index(){
        $data = Calamity::get();
   
        return view ('calamity.index',compact('data'));
    }

    //Create
    public function add()
    {
        $data = Calamity::get();
        return view ('calamity.add');
    }

    //Store
    public function store(Request $request )
    {
        $request->validate([
            'calamity_type' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'start_date' => ['required'],
            'end_date' => ['required']
        ]);

        $calamity =new Calamity();
        $calamity-> calamity_type = $request->calamity_type;
        $calamity-> description = $request->description;
        $calamity-> start_date = $request->start_date;
        $calamity-> end_date = $request->end_date;

        $calamity -> save();

        return redirect()->route('calamity.index');
    }

     //Edit
     public function edit($id)
     {
         $data = Calamity::where('id', '=', $id) ->first();
         return view ('calamity.edit',compact('data'));
     }
 
     //Update
     public function update(Request $request)
     {
        $request->validate([
            'calamity_type' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'start_date' => ['required'],
            'end_date' => ['required']
        ]);
 
         $id = $request ->id;
         $calamity_type = $request->calamity_type;
         $description = $request->description;
         $start_date = $request->start_date;
         $end_date =$request->end_date;
 
 
         Calamity::where('id', '=', $id)->update([
             'calamity_type'=>$calamity_type,
             'description'=>$description,
             'start_date'=>$start_date,
             'end_date' =>$end_date
 
         ]);
         return redirect() ->back()->with('success', 'Calamity updated successfully.');
     }

     //Delete
     public function delete($id)
     {
         Calamity::where('id', '=', $id)->delete();
         return redirect() ->back()-> with('success','Calamity deleted successfully');
     }
}
