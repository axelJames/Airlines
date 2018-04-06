<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryPaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_paids', function (Blueprint $table) {
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('payment_id');
            $table->foreign('payment_id')->references('id')
                    ->on('payments');
            $table->foreign('employee_id')->references('id')
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
        Schema::dropIfExists('salary_paids');
    }
}
