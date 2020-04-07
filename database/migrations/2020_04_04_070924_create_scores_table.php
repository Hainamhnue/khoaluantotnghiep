<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->integer('i1');
            $table->integer('ii1');
            $table->integer('ii2');
            $table->integer('iii1');
            $table->integer('iii2');
            $table->integer('iii3');
            $table->integer('iii4');
            $table->integer('iv1');
            $table->integer('iv2');
            $table->integer('iv3');
            $table->integer('v1');
            $table->integer('v2');
            $table->integer('v3');
            $table->integer('v4');
            $table->integer('v5');
            $table->integer('vi1');
            $table->integer('vi2');
            $table->integer('vi3');
            $table->integer('vii1');
            $table->integer('vii2');
            $table->foreignId('infor_id')->default(1);
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
        Schema::dropIfExists('scores');
    }
}
