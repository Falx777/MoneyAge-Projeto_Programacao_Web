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
            $table->decimal('item1');
            $table->decimal('item2');
            $table->decimal('item3');
            $table->decimal('item4');
            $table->decimal('item5');
            $table->decimal('item6');
            $table->decimal('item7');
            $table->decimal('item8');
            $table->decimal('item9');
            $table->decimal('item10');
            $table->decimal('item11')->nullable();
            $table->decimal('item12')->nullable();
            $table->decimal('item13')->nullable();
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
