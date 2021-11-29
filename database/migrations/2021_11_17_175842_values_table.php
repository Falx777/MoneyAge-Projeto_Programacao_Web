<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('values', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->id();
            $table->float('item1');
            $table->float('item2');
            $table->float('item3');
            $table->float('item4');
            $table->float('item5');
            $table->float('item6');
            $table->float('item7');
            $table->float('item8');
            $table->float('item9');
            $table->float('item10');
            $table->float('item11')->nullable();
            $table->float('item12')->nullable();
            $table->float('item13')->nullable();
            //$table->foreign('user_id')->constrained();
            //$table->foreignIdFor(User::class)->constrained();
            //$table->foreignIdFor(User::class);
            //$table-->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        //
    }
}
