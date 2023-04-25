<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrayerRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prayer_requests', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Description',1000);
            $table->date('Date');
            $table->time('Hour');

            //Inicio da coluna de status
            $table->tinyInteger('status')->default(1);

            //Inicio da coluna contendo a chave estrangeira
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
        Schema::dropIfExists('prayer_requests');
    }
}
