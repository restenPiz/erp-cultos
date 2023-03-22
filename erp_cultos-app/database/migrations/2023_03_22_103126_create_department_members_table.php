<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department_members', function (Blueprint $table) {
            $table->id();
            
            //Inicio da coluna contendo a chave estrangeiraa
            $table->integer('id_member')->unsigned();
            $table->foreign('id_member')->references('id')->on('members');

            $table->integer('id_departments')->unsigned();
            $table->foreign('id_departments')->references('id')->on('departments');

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
        Schema::dropIfExists('department_members');
    }
}
