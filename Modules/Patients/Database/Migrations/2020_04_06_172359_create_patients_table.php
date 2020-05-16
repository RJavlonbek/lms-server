<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('patient_id', 6);
            $table->foreignId('user_id')->constrained();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->string('birth_place');
            $table->string('passport_series', 2);
            $table->string('passport_number', 7);
            $table->date('passport_given_date');
            $table->string('passport_given_place');
            $table->string('address', 100);
            $table->string('phone', 15);
            $table->string('photo');
            $table->char('blood_group', 5);
            $table->string('current_condition');
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
        Schema::dropIfExists('patients');
    }
}
