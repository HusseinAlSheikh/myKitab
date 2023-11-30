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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar',300);
            $table->string('name_en',300);
            $table->string('code',100);
            $table->smallInteger('part_count');
            $table->text('descripition_ar');
            $table->text('descripition_en');
            $table->text('cover_path');
            $table->unsignedBigInteger('study_level_id');
            $table->enum('type',['THR' , 'PRA' , 'THR_PRA']);
            $table->smallInteger('full_mark');
            $table->unsignedBigInteger('course_category_id');
            $table->string('official_name_ar',500);
            $table->string('official_name_en',500);
            $table->foreign('study_level_id')
                ->references('id')->on('study_levels')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('course_category_id')
                ->references('id')->on('course_categories')
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
        Schema::dropIfExists('courses');
    }
};
