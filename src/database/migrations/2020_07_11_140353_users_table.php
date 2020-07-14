<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_user', function ($table) {
            $table->integer('user_id')->references('id')->on('user');
            $table->integer('event_id')->references('id')->on('event');
            $table->primary(array('user_id', 'event_id'));
        });


        Schema::create('user', function ($table) {
            // $table->integer('id')->primary();
            $table->id(); //может не работать 
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('last_name');
            
        });


        Schema::create('event', function ($table) {
            // $table->integer('id')->primary();
            $table->id(); //может не работать
            $table->string('name');
            $table->integer('date');
            $table->string('city');

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
    }
}
