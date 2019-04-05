<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpComingEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('up_coming_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital_id');
            $table->string('event_name');
            $table->string('event_type');
            $table->date('event_date');
            $table->string('banner_name')->nullable();
            $table->string('banner_path')->nullable();
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
        Schema::dropIfExists('up_coming_events');
    }
}
