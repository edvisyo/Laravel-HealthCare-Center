<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name');
            $table->string('patient_lastname');
            $table->date('patient_birthdate');
            $table->string('substance');
            $table->integer('quantity');
            $table->string('measurement_unit');
            $table->mediumText('description');
            $table->date('validity')->nullable();
            $table->string('termless')->nullable();
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
        Schema::dropIfExists('recepts');
    }
}
