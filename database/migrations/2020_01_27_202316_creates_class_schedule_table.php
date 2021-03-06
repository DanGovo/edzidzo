<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesClassScheduleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('class_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('course_id');
            $table->integer('class_id');
            $table->string('level_id');
            $table->integer('shift_id');
            $table->integer('classroom_id');
            $table->integer('batch_id');
            $table->integer('day_id');
            $table->integer('time_id');
            $table->integer('semester_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('class_schedule');
    }
}
