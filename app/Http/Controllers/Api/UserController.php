<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
   public function index(){

      return \App\my_user::all();
    
    //return ['status' => true];
   }
   public function show( \App\my_user $id){

      return $id;
   }
}
