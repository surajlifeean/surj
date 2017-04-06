<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('post_user',function(Blueprint $table){
                $table->increments('id');
                $table->string('email_id');
                $table->foreign('email_id')->references('email')->on('users');
                $table->integer('post_id')->unsigned();
                $table->foreign('post_id')->references('id')->on('posts');
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
        Schema::drop('post_user');
    }
}
