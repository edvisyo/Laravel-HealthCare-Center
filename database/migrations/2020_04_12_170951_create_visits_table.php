<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('patient_lastname');
            $table->date('patient_birthdate');
            $table->bigInteger('TLK_10');
            $table->time('visit_duration');
            $table->string('visit_compensation');
            $table->string('is_visit_repeated');
            $table->mediumText('visit_description');
            $table->bigInteger('doctor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visits');
    }
}
