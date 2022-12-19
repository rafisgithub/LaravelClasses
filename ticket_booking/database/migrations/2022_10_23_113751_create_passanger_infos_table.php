<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passanger_infos', function (Blueprint $table) {
            $table->id();
            $table->string('city_name_1');
            $table->string('city_name_2');
            $table->string('bus_name');
            $table->string('counter_number');
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
        Schema::dropIfExists('passanger_infos');
    }
};
