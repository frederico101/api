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

        
       return response()->json($this->user->paginate(10));
      
    
    //return ['status' => true];
   }
   public function show( my_user $id){
       
      $data = ['data' => $id];
       return response()->json($data);

   }

   public function insert(Request $request){
  
     try{
      $userData = $request->all();
      $this->user->create($userData);
      return response()->json(['mgs' => 'User inserted with success', 201]);
     }catch(\Exception $e){
           if(config('app.debug')){

           }
     }
   }

   public function update(Request $request, $id){
  
      try{
       $userData = $request->all();
       $user = $this->user->find($id);

        $user->update($userData);
      
      return response()->json(['mgs' => 'User updated with success', 201]);
      }catch(\Exception $e){
         echo "Error: " . $e;
      
      }
    }
  
     public function delete(my_user $id){

      try{
         
          $id->delete();
        return response()->json(['data' => ['msg' => 'User: '.$id->first_name.' '.$id->last_name.' was deleted with sucess']]);
       
        }catch(\Exception $e){
             echo "Error: " . $e;
        }
     }


}
