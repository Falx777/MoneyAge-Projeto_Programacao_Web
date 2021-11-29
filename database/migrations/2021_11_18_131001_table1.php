<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Table1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->id();
            $table->string('name');
            $table->string('item1');
            $table->string('item2');
            $table->string('item3');
            $table->string('item4');
            $table->string('item5');
            $table->string('item6');
            $table->string('item7'); 
            $table->string('item8');
            $table->string('item9');
            $table->string('item10');
            $table->string('item11')->nullable();
            $table->string('item12')->nullable();
            $table->string('item13')->nullable();
            //$table->foreign('user_id')->constrained();
            //$table->foreignIdFor(User::class);
            //$table->foreign('user_id')->references('users')->on('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();


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
