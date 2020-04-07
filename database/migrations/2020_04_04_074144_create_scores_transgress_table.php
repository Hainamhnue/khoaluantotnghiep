<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTransgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores_transgress', function (Blueprint $table) {
            $table->id();
            $table->integer('trans1');
            $table->integer('trans2');
            $table->integer('trans3');
            $table->integer('trans4');
            $table->integer('trans5');
            $table->integer('trans6');
            $table->integer('trans7');
            $table->integer('trans8');
            $table->integer('trans9');
            $table->integer('trans10');
            $table->integer('trans11');
            $table->integer('trans12');
            $table->integer('trans13');
            $table->integer('trans14');
            $table->integer('trans15');
            $table->integer('trans16');
            $table->integer('trans17');
            $table->integer('trans18');
            $table->integer('trans19');
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
        Schema::dropIfExists('scores_transgress');
    }
}
