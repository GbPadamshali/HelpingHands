<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital_id');
            $table->string('appointment_id');
            $table->string('patient_id');
            $table->string('patient_name');
            $table->string('visiting_doctor');
            $table->date('visiting_date');
            $table->time('visiting_from');
            $table->time('visiting_to');
            $table->string('diseases');
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
