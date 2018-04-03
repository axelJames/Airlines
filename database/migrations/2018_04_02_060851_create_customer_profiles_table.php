<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',30);
            $table->enum('gender',['M', 'F', 'Other']);
            $table->date('dob');
            $table->string('address',30);
            $table->string('phone_no',15);
            $table->decimal('passport_no',15,0);
            $table->string('bank',30);
            $table->integer('miles_travelled');
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
        Schema::dropIfExists('customer_profiles');
    }
}
