<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\Admin;
class AdminController extends Controller
{
    //Admin Login
    public function Login(){
        return view('admin.admin_login');
    }
    public function StoreLogin(Request $request){
        $check = $request->all();

        if(Auth::guard('admin')->attempt(['email'=>$check['email'],
        'password'=>$check['password']])){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->route('admin.login')->with('error', 'Invalid Email or Password');
        }
    }
    public function Register(){
        return view('admin.admin_register');
    }
    public function Dashboard(){
        $adminData = Admin::find(1);

        return view('admin.admin_dashboard', compact('adminData'));
    }
    public function Logout(){
        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }
}
