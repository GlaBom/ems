<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evacuee;

class EvacueeController extends Controller
{
    
    public function index()
    {
        $data = Evacuee::get();
        return view('admin.body.evacuee.index',compact('data'));
    }

    public function add()
    {
        $data = Evacuee::get();
        return view('admin.body.evacuee.add');
    }

    public function store(Request $request )
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => [ 'string', 'max:255'],
            'gender' =>['required']
            
        ]);

        $evacuee =new Evacuee();
        $evacuee-> last_name = $request ->last_name;
        $evacuee-> first_name = $request ->first_name;
        $evacuee-> middle_name = $request ->middle_name;
        $evacuee-> gender = $request ->gender;

        $evacuee -> save();

        return redirect() ->back()->with('success', 'Evacuee added successfully.') ;

    }

    public function edit($id)
    {
        $data = Evacuee::where('id', '=', $id) ->first();
        return view ('admin.body.evacuee.edit',compact('data'));
    }

    public function update(Request $request )
    {
        $request->validate([
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => [ 'string', 'max:255'],
            'gender' =>['required']
            
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


    public function destroy($id)
    {
        Evacuee::FindOrFail($id)->delete();
        return redirect() ->back()-> with('success','Evacuee deleted successfully');
    }

}
