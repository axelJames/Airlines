<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plane_models', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->unsignedInteger('economy');
            $table->unsignedInteger('business');
            $table->unsignedInteger('firstclass');
            $table->unsignedDecimal('cargo_limit',8,2);
            $table->string('manufacturer',30);
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
        Schema::dropIfExists('plane_models');
    }
}
