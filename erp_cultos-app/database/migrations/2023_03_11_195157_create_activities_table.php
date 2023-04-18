<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Hour');
            $table->string('Day');

            //Inicio da coluna contendo a chave estrangeiraa
            $table->integer('Id_user')->unsigned();
            $table->foreign('Id_user')->references('id')->on('users');

            //Inicio da coluna contendo a chave estrangeira do departamento
            $table->integer('Group')->unsigned();
            $table->foreign('Group')->references('id')->on('departments');
            
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
