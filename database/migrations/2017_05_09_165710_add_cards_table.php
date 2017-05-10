<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('book_id')->unsigned();
            $table->integer('card_id')->unsigned();
            $table->integer('type');
            $table->timestamps();

            $table->foreign('book_id')
                  ->references('id')
                  ->on('books')
                  ->onDelete('cascade');

            $table->foreign('card_id')
                  ->references('id')
                  ->on('cards')
                  ->onDelete('cascade');
        });

        Schema::create('card_card', function (Blueprint $table){
            $table->integer('card_id')->unsigned()->index();
            $table->foreign('card_id')
                  ->references('id')
                  ->on('cards')
                  ->onDelete('cascade');

            $table->integer('related_id')->unsigned()->index();
            $table->foreign('related_id')
                  ->references('id')
                  ->on('cards')
                  ->onDelete('cascade');

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
        Schema::drop('cards');
        Schema::drop('card_card');
    }
}
