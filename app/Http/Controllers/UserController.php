<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email'=>$req->email])->first();
        
        if(!$user || Hash::check($req->password,$user->password))
        {
            return "Username or Password is not matched!";
        }
        else{
            
            return redirect('/');
        }
    }
    function register(Request $req)
    {
//return $req->input();
$user =new User;
$user->name=$req->name;
$user->email=$req->email;
$user->password=Hash::make($req->password);
$user->save();
return redirect('/login');
    }
}
