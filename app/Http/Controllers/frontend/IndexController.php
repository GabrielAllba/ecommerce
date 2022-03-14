<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class IndexController extends Controller
{
    //
    public function Index(){
        return view('frontend.index');
    }
    public function UserLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
    public function UserProfile(){
        $id = Auth::user()->id;

        $user = User::find($id);
        return view('frontend.profile.user_profile', compact('user'));
    }
    public function UserProfileStore(Request $request){
        //Find Authenticated User id
        $id = Auth::user()->id;
        $data = User::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        $old_profile_photo_path = $request->old_profile_photo_path;
        $old_image_dir = 'upload/user_images/'.$old_profile_photo_path;
        // dd($request->all());
        if($request->file('profile_photo_path')){

            if($old_profile_photo_path !== null){
                unlink($old_image_dir);
            }
            $file = $request->file('profile_photo_path');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move('upload/user_images/', $filename);
            $data['profile_photo_path'] = $filename;

        }

        // echo(base_path());
        // echo(public_path());
        $data->save();

        $notification = [
            'message'=>'User Profile Updated Successfully',
            'alert-type'=>'success'
        ];
        return redirect()->back()->with($notification);
    }

    public function UserChangePassword(){
        $id = Auth::user()->id;

        $user = User::find($id);
        return view('frontend.profile.change_password', compact('user'));
    }

    public function UserPasswordUpdate(Request $request){

        $id = Auth::user()->id;
        $user = User::find($id);
        $validateData = $request->validate([
            'current_password'=>'required',
            'password'=>'required|confirmed'
        ]);

        $hashedPassword = User::find($id)->password;
        if(Hash::check($request->current_password, $hashedPassword)){
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');

        }else{
            return redirect()->back();
        }
    }
}
