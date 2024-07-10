<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserServices;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    //constru
    public function __construct(UserServices $userservices)
    {
        $this->_userservice = $userservices;
    }

    //show login form
    public  function index()
    {
        if (Auth::user()) {
            return redirect(route('dashboard'));
        } else {
            return view("Login.login");
        }
    }

    //login action || post 
    public function login(Request $req)
    {
        $credential = $req->only(["email", "password"]);
        var_dump($credential);
        if ($this->_userservice->Authenticate($credential)) {
            $req->session()->regenerate();
            return redirect(Route("dashboard"));
        } else {
            return redirect()->back()->with(["status" => "Incorrect Login or No such account", "type" => "error"]);
        }
    }

    //logout action 
    public function logout(Request $req)
    {
        $this->_userservice->logout($req);
        return redirect(route('login'));
    }

    private UserServices $_userservice;
}
