<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manages', function (Blueprint $table) {
            $table->unsignedInteger('manager');
            $table->unsignedInteger('manages');
            $table->foreign('manager')->references('id')
                    ->on('employees');
            $table->foreign('manages')->references('id')
                    ->on('employees');
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
        Schema::dropIfExists('manages');
    }
}
