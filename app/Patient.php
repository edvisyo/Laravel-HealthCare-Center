<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';

    protected $fillable = [
        'personal_code', 'birthdate', 'name', 'lastname'
    ];
}
