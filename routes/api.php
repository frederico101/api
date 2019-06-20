<?php

use Illuminate\Http\Request;
/* I´m using group to avoi write lots of /api/user 
 I´m not lazzy, but I have a little time today */

 Route::namespace('API')->name('api.')->group(function(){

      Route::prefix('users')->group(function(){   
      Route::get('/', 'UserController@index')->name('index_users');
      Route::get('/{id}', 'UserController@show')->name('single_users');
 
      Route::post('/', 'UserController@insert')->name('Insert_users');
      Route::put('/{id}', 'UserController@update')->name('update_users');
      Route::delete('/{id}', 'UserController@delete')->name('delete_users');

     });
});