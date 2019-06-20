<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\my_user;

class UserController extends Controller
{
   private $user;

   public function __construct(My_user $user){
        
       $this->user = $user;
   }
   public function index(){

        
       return response()->json($this->user->paginate(5));
      
    
    //return ['status' => true];
   }
   public function show( my_user $id){
       
      $data = ['data' => $id];
       return response()->json($data);

   }

   public function store(Request $request){
  
       dd($request->all());
   }
}
