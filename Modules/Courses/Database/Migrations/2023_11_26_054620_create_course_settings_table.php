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
        Schema::create('course_settings', function (Blueprint $table) {
            $table->id();
            $table->string('input_title_ar' , 200);
            $table->string('input_title_en',200);
            $table->string('input_title_code',200);
            $table->string('input_title_type',200);
            $table->string('input_title_value',200);
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
        Schema::dropIfExists('course_settings');
    }
};
