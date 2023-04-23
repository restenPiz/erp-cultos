<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcement_members', function (Blueprint $table) {
            $table->id();
            $table->string('Type');
            $table->string('Description',10000);
            $table->string('Hour');
            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('announcement_members');
    }
}
