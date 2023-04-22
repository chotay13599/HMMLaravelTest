<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registers', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')
                ->references('id')
                ->on('programs')
                ->onDelete('cascade');
                
            $table->unsignedBigInteger('academic_id');
            $table->foreign('academic_id')
                ->references('id')
                ->on('academics')
                ->onDelete('cascade');

            $table->string('name');
            $table->string('nrc');
            $table->date('dob');
            $table->string('email');
            $table->string('phone');
            $table->string('link');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('race');
            $table->string('martial_status');
            $table->string('gender');

            $table->string('education');
            $table->string('school_name');
            $table->string('year_of_matriculation');

            $table->string('degree');
            $table->string('uni_name');
            $table->date('uni_start_date');
            $table->date('uni_end_date');

            $table->string('experience');
            $table->string('experience_yr');

            $table->string('cur_position');
            $table->string('cur_company');
            $table->date('cur_start_date');

            $table->string('pre_position');
            $table->string('pre_company');
            $table->date('pre_start_date');
            $table->date('pre_end_date');

            $table->string('nrc_img');
            $table->string('graduate_img');
            $table->string('other_img');
            $table->string('description');
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
        Schema::dropIfExists('student_registers');
    }
};
