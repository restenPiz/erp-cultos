<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputs', function (Blueprint $table) {
            $table->id();
            $table->float('Value');
            $table->string('Description',5000);
            $table->string('Day');
            //Inicio da coluna contendo a chave estrangeiraa
            $table->integer('Id_user')->unsigned();
            $table->foreign('Id_user')->references('id')->on('users');

            $table->integer('Id_input')->unsigned();
            $table->foreign('Id_input')->references('id')->on('inputs');

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
        Schema::dropIfExists('outputs');
    }
}
