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
            $table->String('FirstName');
            $table->String('LastName');
            $table->String('Gender');
            $table->String('Date-of-birth');
            $table->String('place-of-birth');
            $table->String('adresse');
            $table->String('nationality');
            $table->String('blood-group');
            $table->String('disease');
            $table->String('level');
            $table->String('class');
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
