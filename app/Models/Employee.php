<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = ['id','name', 'email', 'phone_number', 'position', 'created_at'];
}
