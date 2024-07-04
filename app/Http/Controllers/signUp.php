<?php

namespace App\Http\Controllers;

use App\Services\UserServices;
use Illuminate\Http\Request;

class signUp extends Controller
{
    //const
    public function __construct(UserServices $userServices) {
        $this->_userService = $$userServices;
    }
    
    //show signup form 
    public function index()
    {
        return "sign up page";
    }

    //signup
    public function signup()
    {
      
    }


    //prop
    private UserServices $_userService;
    
}
