<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_role', function (Blueprint $table) {
            $table->increments('user_role_id');
            $table->char('user_role_name'); 
        });
        DB::table('user_role')->insert(
            array('user_role_name' => 'admin')
         );
        DB::table('user_role')->insert(
            array('user_role_name' => 'user')
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        if (Schema::hasTable('user_role')) {
            Schema::drop('user_role');
        }
    }
}
