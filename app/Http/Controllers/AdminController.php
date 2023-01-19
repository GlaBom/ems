<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'You have been logged out.',
            'alert-type' => 'info'
        );

        return redirect('/')->with($notification);
    }
    //end method


    public function Profile(Request $request)
    {
        $id=Auth::user()->id;
        $adminData=User::find($id);
        return view('admin.admin_profile_view',compact('adminData'));
    }
    //end method

    public function EditProfile(Request $request)
    {
        $id=Auth::user()->id;
        $editData=User::find($id);
        return view('admin.edit_profile',compact('editData'));
    }
    //end method

    public function StoreProfile (Request $request) {

        $id=Auth::user()->id;
        $data=User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['profile_image'] = $filename;
        }
            $data->save();

            $notification = array(
                'message' => 'Your account has been updated.',
                'alert-type' => 'info'
            );

            return redirect()->route('admin.profile')->with($notification);
    }
    //end method

    public function ChangePassword(){
        return view('admin.admin_change_password');
    }
    //end method

    public function UpdatePassword(Request $request){
        
        $validateData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',

        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->current_password,$hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->new_password);

            $users->save();

            session()->flash('message','Password Updated Successfully');

            return redirect() ->back();
        }

        else{
            session()->flash('message','Current Password is not match');

            return redirect() ->back();
        }

    }
    //end method

}
