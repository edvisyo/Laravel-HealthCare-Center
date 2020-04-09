<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'role_id', 'email', 'password'
    ];

    protected $table = 'users';
}
