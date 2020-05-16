<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('speciality_id')->constrained();
            $table->string('name');
            $table->string('lastname');
            $table->string('middlename');
            $table->enum('gender', ['male', 'female']);
            $table->date('dob');
            $table->string('birth_place');
            $table->string('passport_series', 2)->nullable();
            $table->string('passport_number', 7)->nullable();
            $table->date('passport_given_date')->nullable();
            $table->string('passport_given_place')->nullable();
            $table->string('address', 100);
            $table->string('phone', 15);
            $table->string('photo')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->enum('status', ['active', 'inactive']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
