<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommencedFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commenced_flights', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->date('dod');
            $table->date('doa');
            $table->time('tod');
            $table->time('toa');
            $table->enum('status', ['ON-TIME', 'DELAYED'])->default('ON-TIME');
            $table->foreign('id')->references('id')
                    ->on('scheduled_flights');
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
        Schema::dropIfExists('commenced_flights');
    }
}
