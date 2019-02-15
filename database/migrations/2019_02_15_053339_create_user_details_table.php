<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->tinyInteger('age');
            $table->string('mobile');
            $table->string('email');
            $table->string('blood_group')->nullable();
            $table->date('dob')->nullable();
            $table->string('address');
            $table->string('landmark');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->integer('pincode');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
