<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoyaltyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loyalty_types', function (Blueprint $table) {
            $table->string('program', 30);
            $table->unsignedInteger('minimum_miles')->default(0);
            $table->unsignedInteger('free_miles')->default(0);
            $table->unsignedInteger('food_discount')->default(0);
            $table->enum('status', ['active','passive']);
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
        Schema::dropIfExists('loyalty_types');
    }
}
