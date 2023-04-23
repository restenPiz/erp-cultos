<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //Inicio dos dados de autenticacao de usuario
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            //Inicio da coluna de status para ver se o usuario foi bloqueado ou nao
            $table->tinyInteger('isBan')->default('0');

            //Inicio das colunas que vao complementar aos membros
            $table->string('number_bi')->nullable();
            $table->string('profission')->nullable();
            $table->string('baptism')->nullable();
            $table->string('time_of_church')->nullable();
            $table->string('affiliation')->nullable();
            $table->string('File')->nullable();
            $table->string('gender')->nullable();
            $table->string('household')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('surname')->nullable();
            $table->string('function')->nullable();
            $table->string('theological_level')->nullable();
            $table->string('contact')->nullable();
            $table->string('userType')->nullable();
            $table->timestamp('email_verified_at')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
