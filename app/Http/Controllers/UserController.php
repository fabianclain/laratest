<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
   public function create(){
    return view('users.register');
   }
   public function store(Request $request){
     $formFields = $request -> validate([
        'name' => ['required', 'min:3'],
        'email' =>['required', Rule::unique('users', 'email')],
        'password' => 'required|confirmed|min:6'
     ]);
     //hash password
     $formFields['password'] = bcrypt($formFields['password']);
    
     //create user
     $user = User::create($formFields);

     auth()->login($user);

     return redirect('/')->with('message', 'user created and logged in');
     
   }
}
