<?php

use Illuminate\Http\Request;
/* I´m using group to avoi write lots of /api/user 
 I´m not lazzy, but I have a little time today */

 Route::group(['prefix' => 'api'], function(){
    
    Route::group(['prefix'=>'user'], function(){
          
         Route::get('', ['users' => 'UserController@allUsers'] );
         Route::get('{id}',['users' => 'UserController@getUsers']);
         Route::post('', ['users' => 'UserController@postUsers']);

         Route::put('{id}', ['users' => 'UserController@putUsers']);
         Route::delete('{id}', ['users' => 'UserController@deleteUsers']);

    });
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
