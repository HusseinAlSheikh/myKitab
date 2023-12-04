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
        Schema::create('period_levels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('period_id');
            $table->unsignedBigInteger('study_level_id');
            $table->foreign('period_id')
                ->references('id')->on('periods')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('study_level_id')
                ->references('id')->on('study_levels')
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
        Schema::dropIfExists('period_levels');
    }
};
