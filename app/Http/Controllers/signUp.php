<?php

namespace App\Http\Controllers;

use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class signUp extends Controller
{
  //const
  public function __construct(UserServices $userServices)
  {
    $this->_userService = $userServices;
  }

  //show signup form 
  public function index()
  {
    if(Auth::user())
    {
      return redirect(route('dashboard'));
    } else {
      return view('Signup.signup');
    }
  }

  //signup
  public function signup(Request $req)
  {
    //dd($req);
    $req->validate([
      'name' => 'required|min:3|max:200|string',
      'email' => 'email|required|unique:users',
      'password' => 'string|min:3|max:100|confirmed'
    ]);

    if (!$this->_userService->Register($req)) {
      return  redirect()->back(302)->with(["status"=>"Failed to create an account!","type"=>"error"]);
    } else {
      return redirect(route('login'))->with(["status"=> "Account successfully created!","type"=>"success"]);
    }
  }
  //prop
  private UserServices $_userService;
}
