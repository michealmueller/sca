<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name')->unique()->required();
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique()->required();
            $table->string('password')->nullable();
            $table->boolean('activated')->default(0);
            $table->string('hash')->default(0);
            $table->integer('team_id')->unsigned()->nullable();
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
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
