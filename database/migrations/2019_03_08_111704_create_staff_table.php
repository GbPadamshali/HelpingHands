<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hospital_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('mobile', 15);
            $table->tinyInteger('staff_role');
            $table->date('birthdate');
            $table->tinyInteger('gender'); // 1 = Male, 2 = Female, 3 = Other
            $table->tinyInteger('marital_status'); // 1 = Married, 2 = Unmarried, 3 = Divorsed
            $table->string('qualification');
            $table->string('experience');
            $table->text('address');
            $table->date('joining_date');
            $table->date('left_date');
            $table->tinyInteger('status'); // 1 = Working, 2 = Left, 3 = OnHold, 4 = OnLeave
            $table->timestamps();
            $table->Softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
