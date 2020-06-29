<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\loginRequest;

class AdminCrudController extends Controller
{
    public function dashbard(){
        return view('admin.dashboard');
    }
    public function getLogin(){
        return view('admin.login');
    }
    public function AdminCheckLogin(loginRequest $request){
        $remember_me=$request->has('remember_me') ? true : false;
        if(auth()->guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password],$remember_me)){
            return redirect()->route('admin.dashboard');
        }
       // return redirect()->back()->with(['error'=>'denied access']);
     }
}
