<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTransgressPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores_transgress_personal', function (Blueprint $table) {
            $table->id();
            $table->integer('tras1');
            $table->integer('tras2');
            $table->integer('tras3');
            $table->integer('tras4');
            $table->integer('tras5');
            $table->integer('tras6');
            $table->integer('tras7');
            $table->integer('tras8');
            $table->integer('tras9');
            $table->integer('tras10');
            $table->integer('tras11');
            $table->integer('tras12');
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
        Schema::dropIfExists('scores_transgress_personal');
    }
}
