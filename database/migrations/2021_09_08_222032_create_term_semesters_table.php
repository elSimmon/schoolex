<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTermSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_semesters', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('academic_session_id');
            $table->string('name');
            $table->date('start');
            $table->date('finish');
            $table->boolean('current');
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
        Schema::dropIfExists('term_semesters');
    }
}
