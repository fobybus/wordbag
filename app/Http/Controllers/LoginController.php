<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserServices;

class LoginController extends Controller
{

     //constru
     public function __construct(UserServices $userservices) {
        $this->_userservice=$userservices;
     }

     //show login form
    public  function index()
     {
        return view("Login.login");
     }

    //login action || post 
    function LoginIn(Request $req)
    {
        $credential=$req->only(["email","password"]);
        var_dump($credential);
        if($this->_userservice->Authenticate($credential))
        {
         $req->session()->regenerate();
         return redirect(Route("dashboard"));
        } else {
            return redirect()->back()->with(["status"=>"Incorrect Login or No such account"]);
        }
        
    }
    
    private UserServices $_userservice;

}
