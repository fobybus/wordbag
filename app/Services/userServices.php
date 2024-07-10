<?php 
namespace App\Services;
//
use App\Models\User;
use Illuminate\Http\Request;
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
        //$pass=bcrypt($password);
        $user->password=$password;
        return  $user->save();
    }

    //authenticate 
    public function Authenticate($credential)
    {
      return Auth::attempt($credential);
    }

    //register a user 
    public function Register($formdata)
    {
      $email=$formdata->input("email");
      $name=$formdata->input("name");
      $password=$formdata->input("password");
      //dd($email);
      $user=new User();
      $user->name=$name;
      $user->email=$email;
      $user->password=$password;
     return $user->save();
    }

    //signout
    function logout(Request $req)
    {
      Auth::logout();
      $req->session()->invalidate();
    }

}

//lat updated 7/24 
?>


