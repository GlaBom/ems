<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evacuee;

class EvacueeController extends Controller
{
    
    public function view()
    {
        $data = Evacuee::get();
        return view('admin.body.evacuee.manage_evacuee',compact('data'));
    }

    public function addEvacuee()
    {
        $data = Evacuee::get();
        return view('admin.body.evacuee.register_evacuee');
    }

    public function saveEvacuee(Request $request )
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => [ 'string', 'max:255'],
            
        ]);

        $last_name = $request ->last_name;
        $first_name = $request ->first_name;
        $middle_name = $request ->middle_name;
        $gender = $request ->gender;

        $evacuee =new Evacuee();
        $evacuee-> last_name = $last_name;
        $evacuee-> first_name = $first_name;
        $evacuee-> middle_name = $middle_name;
        $evacuee-> gender = $gender;

        $evacuee -> save();

        return redirect() ->back()->with('success', 'Evacuee added successfully.') ;

    }

    public function editEvacuee($id)
    {
        $data = Evacuee::where('id', '=', $id) ->first();
        return view ('admin.body.evacuee.edit_evacuee',compact('data'));
    }

    public function updateEvacuee(Request $request )
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => [ 'string', 'max:255'],
            
        ]);

        $id = $request ->id;
        $last_name = $request ->last_name;
        $first_name = $request ->first_name;
        $middle_name = $request ->middle_name;
        $gender = $request ->gender;

        Evacuee::where('id', '=', $id)->update([
            'last_name'=>$last_name,
            'first_name'=>$first_name,
            'middle_name'=>$middle_name,
            'gender'=>$gender,

        ]);
        return redirect() ->back()->with('success', 'Evacuee updated successfully.');
    }


    public function deleteEvacuee($id)
    {
        Evacuee::where('id', '=', $id)->delete();
        return redirect() ->back()-> with('success','Evacuee deleted successfully');
    }

}
