<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrancheTable extends Migration
{
    public function up()
    {
        Schema::create('Branche', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Creation_year');
            $table->string('Address');
            $table->string('Number_of_members');
            //Inicio do
            $table->integer('Id_user')->unsigned();
            $table->foreign('Id_user')->references('id')->on('Branche');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('filials');
    }
}
