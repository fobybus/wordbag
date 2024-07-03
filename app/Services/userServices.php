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

    //logout 

}


?>