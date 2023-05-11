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
            $table->string('FirstName');
             $table->string('LastName');
             $table->string('level');
             $table->string('class');
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
             $table->string('Arabicteacher');
             $table->string('Englishteacher'); 
             $table->string('frenchteacher');
             $table->date('date');
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
