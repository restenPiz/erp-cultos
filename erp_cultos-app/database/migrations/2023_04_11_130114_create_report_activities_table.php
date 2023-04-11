<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_activities', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Hour');
            $table->string('Day');

            //Inicio da coluna contendo a chave estrangeiraa
            $table->integer('Id_user')->unsigned();
            $table->foreign('Id_user')->references('id')->on('users');
            
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
        Schema::dropIfExists('report_activities');
    }
}
