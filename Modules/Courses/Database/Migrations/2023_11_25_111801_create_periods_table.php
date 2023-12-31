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
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar' ,200);
            $table->string('name_en' ,200);
            $table->string('from_time' ,200);
            $table->string('to_time' ,200);
            $table->smallInteger('order');
            $table->boolean('is_attend')->default(true);
            $table->unsignedBigInteger('period_category_id')->nullable();
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
        Schema::dropIfExists('periods');
    }
};
