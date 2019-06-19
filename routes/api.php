<?php

use Illuminate\Http\Request;
/* I´m using group to avoi write lots of /api/user 
 I´m not lazzy, but I have a little time today */

 Route::group(['prefix' => 'api'], function(){

    Route::group(['prefix'=>'user'], function(){
          
         Route::get('', function()
         {
             return ' Show list of users';
         });
         Route::get('{id}', function($id)
         {
             return 'Show users by id '.$id;
         });
         Route::post('', function()
         {
             return 'Create a new user';
         });
         Route::put('{id}', function($id)
         {
             return 'Update the user '. $id;
         });
         Route::delete('{id}', function($id)
         {
             return 'Delete the user '.$id;
         });

    });
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
