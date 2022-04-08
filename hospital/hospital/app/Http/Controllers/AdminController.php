<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;
use App\Models\Users;

class AdminController extends Controller
{
 
    public function getAdmin(Request $request)
    {
        return view('admin.admin-login');

    }
    public function postAdmin(Request $request)
    {

        $credentials=[
            'email'=> $request->email,
            'password'=>$request->password,
        ];

        $ekran=Sentinel::authenticateAndRemember($credentials);


        if($ekran==TRUE){

            return redirect()->route('getAdminPanel');
            
        }   
        else{

            return redirect()->error();
        }
    }
    public function getAdminPanel(Request $request)
    {
       return view('admin.admin-panel');
    }
}
