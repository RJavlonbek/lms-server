<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientCareerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_career_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('patient_id')->constrained();
            $table->string('position', 100);
            $table->string('organization', 100);
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('address');
            $table->string('note')->default('');
            $table->enum('status', ['active', 'inactive']);
            $table->boolean('currently_working');
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
        Schema::dropIfExists('patient_career_info');
    }
}
