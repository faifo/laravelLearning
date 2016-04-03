<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('users', function (Blueprint $table) {
           $table->increments('user_id');
           $table->char('user_name', 255);
           $table->char('user_password', 255);
           $table->char('user_email', 255);
           $table->integer('user_role_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        if (Schema::hasTable('users')) {
            Schema::drop('users');
        }
    }
}
