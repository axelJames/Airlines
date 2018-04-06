<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->unsignedInteger('booking_id');
            $table->unsignedInteger('flight_id');
            $table->unsignedInteger('seat_id');
            $table->unsignedInteger('customer_id');
            $table->foreign('booking_id')->references('id')
                    ->on('bookings');
            $table->foreign('flight_id')->references('id')
                    ->on('scheduled_flights');
            $table->foreign('seat_id')->references('id')
                    ->on('seats');
            $table->foreign('customer_id')->references('id')
                    ->on('customer_profiles');
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
        Schema::dropIfExists('tickets');
    }
}
