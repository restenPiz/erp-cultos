<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cults', function (Blueprint $table) {
            $table->id();
            $table->string('Day_of_cult');
            $table->string('Hour');
            $table->string('Duration');
            $table->string('Leader');
            $table->string('Preacher');
            $table->string('Title');
            $table->string('Book');
            $table->string('Chapter');
            $table->string('Verse');
            $table->string('Duration');
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
        Schema::dropIfExists('cults');
    }
}