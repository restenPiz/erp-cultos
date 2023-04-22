<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_departments', function (Blueprint $table) {
            $table->id();

            //Inicio das colunas das chaves estrangeiras
            
            $table->integer('Id_user')->unsigned();
            $table->foreign('Id_user')->references('id')->on('users');

            
            $table->integer('Id_departments')->unsigned();
            $table->foreign('Id_departments')->references('id')->on('departments');

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
        Schema::dropIfExists('member_departments');
    }
}
