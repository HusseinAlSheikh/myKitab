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
        Schema::create('class_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('instructor_id');
            $table->unsignedBigInteger('period_id');
            $table->unsignedBigInteger('day_id');
            $table->unsignedBigInteger('course_id');
            $table->foreign('class_id')
                ->references('id')->on('classes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('instructor_id')
                ->references('id')->on('instructors')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('period_id')
            ->references('id')->on('periods')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('day_id')
                ->references('id')->on('days')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('course_id')
            ->references('id')->on('courses')
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
        Schema::dropIfExists('class_schedules');
    }
};
