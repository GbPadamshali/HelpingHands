<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('reg_no');
            $table->string('name');
            $table->string('email');
            $table->string('contact_no', 15);
            $table->string('type');
            $table->string('image_name');
            $table->string('image_path');
            $table->string('banner_name');
            $table->string('banner_path');
            $table->string('logo_name');
            $table->string('logo_path');
            $table->string('address');
            $table->string('landmark');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('country');
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
        Schema::dropIfExists('hospitals');
    }
}
