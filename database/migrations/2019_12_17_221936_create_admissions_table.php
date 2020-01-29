<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('roll_no');
            $table->string('firstname');
            $table->string('surname');
            $table->date('dob');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('nok_name');
            $table->longText('home_address');
            $table->longText('current_address');
            $table->string('nationality');
            $table->string('id_number')->unique();
            $table->string('passport_number')->unique();
            $table->tinyInteger('status');
            $table->date('date_registered');
            $table->integer('user_id');
            $table->integer('class_id');
            $table->string('image')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('admissions');
    }
}
