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
        Schema::create('study_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name_ar',200);
            $table->string('name_en',200);
            $table->string('code',100);
            $table->smallInteger('order');
            $table->boolean('is_active');
            $table->boolean('with_summer_semester');
            $table->boolean('has_apply_plan');
            $table->foreign('category_id')
                ->references('id')->on('study_level_categories')
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
        Schema::dropIfExists('study_levels');
    }
};
