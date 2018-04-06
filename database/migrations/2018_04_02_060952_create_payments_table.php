<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->float('amount')->default(0.0);
            $table->enum('cash', ['Y','N'])->default('N');
            $table->string('bank', 30);
            $table->integer('transaction_id');
            $table->enum('description', ['Plane Purchase','Ticket Booking','Cargo Booking','Fuel Purchase','Salary','Insurance','Other']);
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
        Schema::dropIfExists('payments');
    }
}
