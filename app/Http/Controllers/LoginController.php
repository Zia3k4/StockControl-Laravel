<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index(){
    return view('login');
   }
   public function store(Request $request){
    $request->validate([
       'email'=>'required|email',
       'password'=> 'required'
    ]);
   }
public function destroy(){
    var_dump('logout');
   }
}