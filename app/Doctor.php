<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';

    protected $fillable = [
        'user_id', 'name', 'lastname', 'specialization', 'other_specialization'
    ];
}
