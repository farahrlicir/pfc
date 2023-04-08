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
            $table->id();
            $table->binary('photo')->nullable();
            $table->String('FirstName')->required();
            $table->String('LastName')->required();
            $table->String('Gender')->required();
            $table->date('Dateofbirth')->required();
            $table->String('placeofbirth')->required();
            $table->String('adresse')->required();
            $table->String('nationality')->required();
            $table->String('bloodgroup')->required();
            $table->String('disease')->required();
            $table->String('level')->required();
            $table->String('class')->required();
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
