<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitalReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital_id');
            $table->integer('patient_id');
            $table->string('patient_name');
            $table->string('report_name');
            $table->string('report_type');
            $table->date('issued_on');
            $table->string('supervisor_name');
            $table->string('file_name');
            $table->string('file_path');
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
        Schema::dropIfExists('hospital_reports');
    }
}
