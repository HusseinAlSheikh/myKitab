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
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar' , 200);
            $table->string('name_en' , 200);
            $table->string('code' , 200);
            $table->unsignedBigInteger('parent_part_id');
            $table->unsignedBigInteger('part_type_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('semester_name_ar' ,500 );
            $table->string('semester_name_en' , 500);
            $table->smallInteger('semester_order' );
            $table->string('year_name_ar' ,500 );
            $table->string('year_name_en' , 500);
            $table->foreign('parent_part_id')
            ->references('id')->on('parts')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('part_type_id')
            ->references('id')->on('part_types')
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
        Schema::dropIfExists('parts');
    }
};
