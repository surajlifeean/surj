<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCorporateesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporatees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('designation');
            $table->string('qualification');
            $table->string('college');
            $table->integer('user_id');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('corporatees');
    }
}
