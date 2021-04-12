<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/*
@Author:Yuanyuan 
*/
class users extends Model
{
    protected $table = 'users';
    protected $fillable = ['Firstname', 'Surname', 'DateOfBirth', 'PhoneNumber', 'Email'];
}
