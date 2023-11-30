<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('day_id');
            $table->string('from_time' , 100);
            $table->string('to_time' , 100);
            $table->foreign('instructor_id')
            ->references('id')->on('instructors')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('day_id')
            ->references('id')->on('days')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('instructor_schedules');
    }
};
