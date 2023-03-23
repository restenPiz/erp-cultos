<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Password');
            $table->string('Password_confirmation');
            $table->string('Email')->unique();
            $table->string('Profission');
            $table->string('Number_of_bi');
            $table->string('Gender');
            $table->string('Contact');
            $table->string('Surname');
            $table->string('Date_of_birth');
            $table->string('Marital_status');
            $table->string('Baptism');
            $table->string('Time_in_church');
            $table->string('Affiliation');
            $table->string('Theological_level');
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
        Schema::dropIfExists('members');
    }
}
