<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('flight_id');
            $table->unsignedInteger('owner_id');
            $table->unsignedInteger('weight')->default(0);
            $table->enum('type', ['Animal', 'Mail', 'Luggage']);
            $table->unsignedInteger('booking_id');
            $table->foreign('booking_id')->references('id')
                    ->on('bookings');
            $table->foreign('flight_id')->references('id')
                    ->on('flights');
            $table->foreign('owner_id')->references('id')
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
        Schema::dropIfExists('cargos');
    }
}
