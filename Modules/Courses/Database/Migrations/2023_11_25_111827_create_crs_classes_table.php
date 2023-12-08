<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrsClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crs_classes', function (Blueprint $table) {
            $table->id();

            $table->string('code','100');
            $table->string('name','200');
            $table->unsignedBigInteger('part_id');
            $table->unsignedBigInteger('study_level_id');
            $table->boolean('schedule_in_weekend')->default(false);
            $table->smallInteger('class_capacity');
            $table->unsignedBigInteger('period_category_id')->nullable();
            $table->foreign('part_id')
                ->references('id')->on('parts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('study_level_id')
                ->references('id')->on('study_levels')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('period_category_id')
                ->references('id')->on('period_categories')
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
        Schema::dropIfExists('crs_classes');
    }
}
