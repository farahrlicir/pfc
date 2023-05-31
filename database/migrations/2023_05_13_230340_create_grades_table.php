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
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->integer('Arabicnote'); 
            $table->string('RemarqueA');
            $table->integer('Mathnote');
            $table->string('RemarqueM');
            $table->integer('Frenchnote'); 
            $table->string('RemarqueF');
            $table->integer('Islamicnote');
            $table->string('RemarqueI');
            $table->integer('Technonote');
            $table->string('RemarqueT');
            $table->integer('Civicnote');
            $table->string('RemarqueC');
            $table->integer('HistoryGeonote');
            $table->string('RemarqueH');
            $table->integer('Englishnote');
            $table->string('RemarqueE');
            $table->integer('Fullnote');
            $table->string('RemarqueFull'); 
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('grades');
    }
};
