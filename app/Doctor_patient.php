<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor_patient extends Model
{
    protected $table = 'doctor_patients';

    protected $fillable = [
        'patient_name', 'patient_lastname', 'patient_birthdate', 'doctor_id'
    ];
}
