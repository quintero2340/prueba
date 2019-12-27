<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class userController extends Controller
{
    /**
     * Function to show the main login of the ecommerce application.
     */
    function index(){
        return view('login')->with([
            'desicion' => false
        ]);
    }

    /**
     * Send to the registration page
     */
    function register(){
        return view('register')->with([
            'desicion' => false
        ]);
    }

    /**
     * Search if there is email with the password.
     */
    function find(){
        $user=null;
        //view input data
        $data=request()->all();
        //User List
        $userList=User::all();
         //validations
        $errors = request()->validate([
            'username' => 'required ',
            'password' => 'required'  
        ],
        [
            'username.required'=> 'The username field is mandatory',
            'paasword.required'=> 'The password field is mandatory',
        ]);
        foreach ($userList as $search) {
           if($data['username'] == $search->email && $data['password'] == $search->password){
            $user=$search;
           break;
           }
        }
         if(is_null($user)){
            return view('login')->with([
                'desicion'=>true
            ]);
        }

        return view('category')->with([
            'user' => $user
        ]);
    }

    /**
     * user creation in the registry
     */
    function store(){
        $decision=true;
        $user=null;
        $data= request()->all();
         //User List
         $userList=User::all();
        foreach ($userList as $search) {
            if($data['email'] == $search->email){
             $user=$search;
            break;
            }
         }
         if($user != null){
            return view('register')->with([
                'desicion' => true
            ]);
         }
        $errors = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required' ,
            'password' => 'required',
            'password_confirmation'=>'required'
        ],
        [
            'first_name.required'=> 'The first_name field is mandatory',
            'last_name'=> 'The last_name field is mandatory',
            'email.required'=>'The email field is mandatory',
            'password'=>'The password field is mandatory',
            'password_confirmation'=>'confirm password'
        ]);
           
        if($data['password']==$data['password_confirmation']){
            User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'email' => $data['email'],
                'password'=>$data['password']
            ]);

        }else{
            $decision=false;
            return view('register');
        }

        return view('login');
    }

}
