<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduledFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheduled_flights', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plane_id');
            $table->integer('start');
            $table->integer('dest');
            $table->date('dod');
            $table->date('doa');
            $table->time('tod');
            $table->time('toa');
            $table->enum('status', ['CANCELLED', 'ON-TIME', 'DELAYED'])->default('ON-TIME');
            $table->unsignedDecimal('price', 7, 2);
            $table->foreign('plane_id')->references('id')
                    ->on('planes');
            $table->foreign('start')->references('id')
                    ->on('airports');
            $table->foreign('dest')->references('id')
                    ->on('airports');
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
        Schema::dropIfExists('scheduled_flights');
    }
}
