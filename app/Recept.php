<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    protected $table = 'recepts';

    protected $fillable = [
        'patient_name', 'patient_lastname', 'patient_birthdate', 'substance', 'quantity', 'measurement_unit', 'description', 'validity', 'termless', 'doctor_id'
    ];
}
