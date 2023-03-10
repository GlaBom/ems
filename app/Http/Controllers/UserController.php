<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use App\Models\Ecenter;
use App\Models\User;
use App\Models\UserType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function __construct()
    {
        //Array portion is for you to except pages.
        //$this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('auth');
    }

    // ADMIN

   public function index()
{
    if (Auth::user()->usertype == 'admin') {
        $data = User::join('barangays', 'barangays.id', '=', 'users.barangay_id')
            ->join('ecenters', 'ecenters.id', '=', 'users.ecenter_id')
            ->select('barangays.*', 'barangays.barangay_name as brgy', 'ecenters.*', 'ecenters.ec_name as ec', 'users.*')
            ->get();

        $barangays = Barangay::all();
        $ecenters = Ecenter::all();
        return view('user.index', compact('data',  'barangays', 'ecenters'));
    } else {
        return view('errors.401');
    }
}



    public function store(Request $request)
    {
        if (Auth::user()->usertype == 'admin') {
            $data = new User();
            $data->last_name = $request->last_name;
            $data->first_name = $request->first_name;
            $data->middle_name = $request->middle_name;
            $data->usertype = $request->usertype;
            $data->barangay_id = $request->barangay_name;
            $data->ecenter_id = $request->ec_name;
            $data->email = $request->email;
            $data->username = $request->username;
            $data->password = Hash::make($request->password);

            $data->save();


            return redirect()->back();
        } {
            return view('errors.401');
        }
    }

    //Delete
    public function delete($id)
    {
        User::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }


    // ALL USERS

    // delete profile
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

    // view profile
    public function viewProfile(Request $request)
    {
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('profile.index', compact('userData'));
    }
    //end method

    // edit profile
    public function editProfile(Request $request)
    {
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('profile.edit', compact('editData'));
    }
    //end method

    // store profile
    public function storeProfile(Request $request)
    {

        $id = Auth::user()->id;
        $data = User::find($id);

        $data->last_name = $request->last_name;
        $data->first_name = $request->first_name;
        $data->middle_name = $request->middle_name;
        $data->usertype = $request->usertype;
        $data->email = $request->email;
        $data->username = $request->username;
        $data->profile_image = $request->profile_image;

        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Your account has been updated.',
            'alert-type' => 'info'
        );

        return redirect()->route('user.profile')->with($notification);
    }
    //end method

    // change password
    public function changePassword()
    {
        return view('admin.change_password');
    }
    //end method

    // update password
    public function updatePassword(Request $request)
    {

        $validateData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',

        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->current_password, $hashedPassword)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->new_password);

            $users->save();

            session()->flash('message', 'Password Updated Successfully');

            return redirect()->back();
        } else {
            session()->flash('message', 'Current Password is not match');

            return redirect()->back();
        }
    }
    //end method

}
