<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('surname');
            $table->date('dob');
            $table->string('student_number');
            $table->date('date_admitted');
            $table->boolean('status');
            $table->bigInteger('class_level_id');
            $table->bigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('gender');
            $table->boolean('disabled');
            $table->string('photo');
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
        Schema::dropIfExists('students');
    }
}
