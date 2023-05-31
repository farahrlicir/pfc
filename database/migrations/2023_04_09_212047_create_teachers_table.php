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
       
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->String('Tphoto')->nullable();
            $table->String('TFirstName')->required();
            $table->String('TLastName')->required();
            $table->String('TGender')->required();
            $table->date('TDateofbirth')->required();
            $table->String('Tplaceofbirth')->required();
            $table->String('Tadresse')->required();
            $table->String('Tnationality')->required();
            $table->String('Tbloodgroup')->required();
            $table->String('Tphonenumber')->required();
            $table->String('Tdisease')->required();
            $table->String('Tlevel')->required();
            $table->String('Tclass')->required();
            $table->date('Tdatework')->required();
            $table->String('Sname')->required();
            $table->timestamps();
        });
 
        Schema::table('teachers',function(Blueprint $table){
        $table->foreignId('subjects_id')->constrained;
       });
   }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
};
