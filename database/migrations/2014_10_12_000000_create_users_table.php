<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('12345678');
            $table->string('image')->nullable();
            $table->integer('phone')->nullable();
            $table->string('bomon')->nullable();
            $table->text('introduction')->nullable();
            $table->integer('sum')->nullable();
            $table->integer('sum_f')->nullable();
            $table->float('avg')->nullable();
            $table->string('disgest')->nullable();
            $table->tinyInteger('level')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
