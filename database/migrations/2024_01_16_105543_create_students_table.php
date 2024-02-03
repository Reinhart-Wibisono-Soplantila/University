<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('idStudents');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Gender');
            $table->string('Religion');
            $table->date('Birth');
            $table->string('PhoneNumber')->unique();
            $table->string('Gmail')->unique();
            $table->string('Address');
            $table->string('City');
            $table->string('Country');
            $table->string('MotherName');
            $table->string('FatherName');
            $table->string('ImageProfile');
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
        Schema::dropIfExists('students');
    }
};
