<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class UsersController extends Controller
{
    public function getregister(Request $request)
    {
        return view('users.register');
    }
    public function postRegister(Request $request)
    {

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
            'first_name'    => $request->first_name,
            'last_name'    => $request->last_name,

        ];
        $user = Sentinel::register($credentials);   
        return redirect()->route('getLogin');
    }
    public function getLogin(Request $request)
    {
        return view('users.login');
    }
    public function postlogin(Request $request){

        $credentials=[
            'email'=> $request->email,
            'password'=>$request->password,
        ];
        $ekran=Sentinel::authenticate($credentials);
        if($ekran==TRUE){
            return redirect()->route('getIndex');

        }
        else{
            return redirect()->back();
        }



    }

}

