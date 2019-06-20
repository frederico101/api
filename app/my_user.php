<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class my_user extends Model
{
   protected $fillable = ['first_name', 'last_name', 'email', 'avatar'];
}
