<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
    */

    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedInteger('id')->unique();
            $table->string('name',30);
            $table->date('dob');
            $table->enum('gender',['M','F','Other']);
            $table->string('address',30);
            $table->string('phone_no',15);
            $table->string('bank',30);
            $table->unsignedDecimal('salary',10,2)->default(0.0);
            $table->date('doj');
            $table->foreign('id')->references('id')
                    ->on('users');
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
        Schema::dropIfExists('employees');
    }
}
