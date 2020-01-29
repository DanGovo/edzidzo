<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassSchTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('class_sch', function (Blueprint $table) {
            $table->bigIncrements('sch_id');
            $table->integer('course_id');
            $table->integer('class_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('class_sch');
    }
}
