<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoyaltyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loyalty_profiles', function (Blueprint $table) {
            $table->unsignedInteger('customer_id');
            $table->string('program', 30);
            $table->unsignedInteger('free_miles')->default(0);
            $table->foreign('customer_id')->references('id')
                    ->on('customer_profiles');
            $table->foreign('program')->references('program')
                    ->on('loyalty_types');
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
        Schema::dropIfExists('loyalty_profiles');
    }
}
