<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registerlogin;

class registercontroller extends Controller
{
    
    function adddata(Request $req){
        $req->validate([
            'username'=>'required|regex:/^[a-zA-z\s]*$/',
            'password'=>'required|min:8|max:8',
        ]);
        $member=new registerlogin;
        $member->username=$req->username;
        $member->email=$req->email;
        $member->password=$req->password;
        $member->conpassword=$req->conpassword;


        $check=registerlogin::where([
            ['email','=',$req->email],
        ])->first();
         if($check){
            return redirect('add')->with('emailerrormessage','Register Failed. Email already Taken!');
         }
         {
            $member->save();
            return redirect('add')->with('message','Register Completed!');
         }
        
    }



    function login(Request $req){
        $req->validate([
            'logusername'=>'required|regex:/^[a-zA-z\s]*$/',
        ]);

        $check=registerlogin::where([
            ['username','=',$req->logusername],
            ['password','=',$req->logpassword]
        ])->first();
         if($check){
             return redirect('/addlogin');
         }
         return redirect('/add')->with('logmessage','Incorrect Username Or Password');
        // echo $req->logusername;
    }
}
