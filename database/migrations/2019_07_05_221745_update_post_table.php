<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('post', function(Blueprint $table) {
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user-id')-references('id')->references('id')->on('users');
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('post', function(Blueprint $table) {
            $table->dropForeign('user_id')->unsigned()->index();
            $table->dropColumn('user-id')-references('id')->references('id')->on('users');
        ));
    }
}
