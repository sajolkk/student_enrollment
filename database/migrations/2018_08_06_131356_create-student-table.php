<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_roll');
            $table->string('student_department');
            $table->string('admission_year');
            $table->string('student_fathername');
            $table->string('student_mothername');
            $table->string('student_email');
            $table->string('student_mobile');
            $table->string('student_address');
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
        Schema::dropIfExists('student');
    }
}
