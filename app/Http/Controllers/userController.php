<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    function register(Request $req)
    {
      $user=new User;
      $user->name=$req->name;
      $user->email=$req->email;
      $user->password=HASH::make($req->password);
      $user->save();
      return redirect('/login');
    }
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
    
        if(!$user || !HASH::check($req->password,$user->password))
        {
        
            echo "<script>";
            echo "alert('User name or Password not matching');";
            echo 'window.location.href = "login";';

            echo "</script>";
           
        }
        else{
           $req->session()->put('user',$user);
           return redirect('/');
        }
    }
}
