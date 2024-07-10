<?php

namespace App\Http\Controllers;

use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class user extends Controller
{

    function __construct(UserServices $userService)
    {
        $this->_userService=$userService;
    }
     //profile
     function index()
     {
         return view('User.profile',['user'=>Auth::user()]);
     }
 
     //settings 
     function setting()
     {
        return view('User.setting');
     }
 
     //change passwor 
     function changePassword(Request $req)
     {
        //val
         $req->validate([
            "current_password"=>"string|required|min:1",
            "password"=>"string|min:6|confirmed|required"
         ]);

         $user=Auth::user();

         if(!Hash::check($req->input("current_password"),$user->password))
         {
            return redirect()->back()->with(["status"=>"Incorrect current password!","type"=>"error"]);
         }

         if($this->_userService->changePassword($req->input('password'),Auth::user()))
         {
            return redirect()->back()->with(["status"=>"successfully changed your password","type"=>"success"]);
         } else {
            return redirect()->back()->with(["status"=>"Unable to change your password","type"=>"error"]);
         }
     }

     //userv
     private UserServices $_userService;
 
}
