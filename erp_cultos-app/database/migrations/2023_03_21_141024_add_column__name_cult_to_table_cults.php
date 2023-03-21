<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnNameCultToTableCults extends Migration
{
    public function up()
    {
        Schema::table('cults', function (Blueprint $table) {
            //
        });
    }
    public function down()
    {
        Schema::table('cults', function (Blueprint $table) {
            $table->string('Name_cult');
        });
    }
}
