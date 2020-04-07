<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresPersonalFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores_personal_faculty', function (Blueprint $table) {
            $table->id();
            $table->integer('i1');
            $table->integer('i2');
            $table->integer('ii1');
            $table->integer('ii2');
            $table->integer('ii3');
            $table->integer('ii4');
            $table->integer('ii5');
            $table->integer('iii1');
            $table->integer('iii2');
            $table->integer('iii3');
            $table->integer('iii4');
            $table->integer('iva1');
            $table->integer('iva2');
            $table->integer('iva3');
            $table->integer('ivb1');
            $table->integer('ivb2');
            $table->integer('ivb3');
            $table->integer('ivc1');
            $table->integer('ivc2');
            $table->integer('ivd1');
            $table->integer('ivd2');
            $table->integer('ivd3');
            $table->integer('ive1');
            $table->integer('ive2');
            $table->integer('ive3');
            $table->integer('v1');
            $table->integer('v2');
            $table->integer('v3');
            $table->integer('v4');
            $table->integer('v5');
            $table->foreignId('user_id');
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
        Schema::dropIfExists('scores_personal_faculty');
    }
}
