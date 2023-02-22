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
   public function logout(Request $request){
    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('message', 'you have been logged out');
   }
   public function login(){
    
      return view('users.login');
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

     return redirect('/logout')->with('message', 'user created and logged in');
     
   }
   public function authentificate(Request $request){
          $formFields = $request -> validate([
         'email' =>['required', 'email'],
         'password' => 'required|confirmed|min:6'
      ]);
      if(auth()->attempt($formFields)){
         $request -> session()->regenerate();
         return redirect('/')->with('message','you are logged in');
      }
      return back()->withErrors('invalid credentials');
   }
}
