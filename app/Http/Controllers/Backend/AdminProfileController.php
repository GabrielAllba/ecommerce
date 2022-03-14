<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    //
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function Store(Request $request){
        $data = Admin::find(1);
        $data->name = $request->name;
        $old_profile_photo_path = $request->old_profile_photo_path;
        $old_image_dir = 'upload/admin_images/'.$old_profile_photo_path;
        // dd($request->all());
        if($request->file('profile_photo_path')){

            if($old_profile_photo_path !== null){
                unlink($old_image_dir);
            }
            $file = $request->file('profile_photo_path');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move('upload/admin_images/', $filename);
            $data['profile_photo_path'] = $filename;

        }

        // echo(base_path());
        // echo(public_path());
        $data->save();

        $notification = [
            'message'=>'Admin Profile Updated Successfully',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.profile')->with($notification);
    }

    public function AdminChangePassword(){
        $adminData = Admin::find(1);
        return view('admin.admin_change_password', compact('adminData'));
    }
    public function UpdateChangePassword(Request $request){
        $validateData = $request->validate([
            'old_password'=>'required',
            'password'=>'required|confirmed'
        ]);

        $notification = [
            'message'=>'Old password is wrong!',
            'alert-type'=>'error'
        ];
        $successnotif = [
            'message'=>'Password changed successfully!',
            'alert-type'=>'success'

        ];
        $hashedPassword = Admin::find(1)->password;
        if(Hash::check($request->old_password, $hashedPassword)){
            $admin = Admin::find(1);
            $admin->password = Hash::make($request->password);
            $admin->save();
            Auth::logout();
            return redirect()->route('admin.logout')->with($successnotif);
        }else{
            return redirect()->back()->with($notification);
        }
    }
}
