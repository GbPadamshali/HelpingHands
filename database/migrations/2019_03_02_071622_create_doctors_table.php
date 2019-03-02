<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->date('birthdate');
            $table->string('gender');
            $table->date('joining_date');
            $table->string('qualifiaction');
            $table->string('specialization');
            $table->string('experience');
            $table->string('department_id');
            $table->string('image_name');
            $table->string('image_path');
            $table->text('address');
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
        Schema::dropIfExists('doctors');
    }
}
