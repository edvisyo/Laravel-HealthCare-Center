<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'visits';

    protected $fillable = [
        'patient_name', 'patient_lastname', 'patient_birthdate', 'TLK_10', 'visit_duration', 'visit_compensation', 'is_visit_repeated', 'visit_description', 'doctor_name', 'doctor_lastname'
    ];
}
