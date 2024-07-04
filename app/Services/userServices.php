<?php 
namespace App\Services;
//
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserServices{

    //get user by i
    public function getUserById($id)
    {
        $user=User::where(["id"=>$id]);
        return $user;
    }

    //get-all users 
    public function getAll()
    {
      return User::all();
    }

    //change password 
    public function changePassword($password,User $user)
    {
        $pass=bcrypt($password);
        $user->password($pass);
        $user->save();
    }

    //authenticate 
    public function Authenticate($credential)
    {
        $r=Auth::attempt($credential);
        if($r)
        return true;
        else 
        return false;
    }

    //register a user 
    public function Register($formdata)
    {
      $email=$formdata->input("email");
      $name=$formdata->input("name");
      $password=$formdata->input("password");
      //deb
      print($email);
    }

}


?>