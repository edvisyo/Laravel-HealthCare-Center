<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    protected $table = 'pharmacists';

    protected $fillable = [
        'name', 'lastname', 'work'
    ];
}
