<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Givebutter\LaravelKeyable\Keyable;

/*
@Author:Yuanyuan 
*/

class users extends Model
{
    use Keyable;
    protected $table = 'users';
    protected $fillable = ['Firstname', 'Surname', 'DateOfBirth', 'PhoneNumber', 'Email'];
}
