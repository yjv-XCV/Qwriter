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
            $table->integer('card_id')->unsigned()->nullable();
            $table->integer('type');
            $table->timestamps();
            /*type
            **
            **  0 -> Synopsis
            **  1 -> Settings
            **  2 -> Characters
            **  3 -> Locations
            **  4 -> Scenes
            **  5 -> Histories
            **  6 -> Items
            **  7 -> Brainstorms
            **  8 -> SubLocations
            **  9 -> 
            ** 10 -> Summary
            ** 11 -> Ideas
            ** 12 -> Quotes       (Sub Idea)
            ** 13 -> Facts        (Sub Idea)
            ** 14 -> Explanations (Sub Idea)
            ** 15 -> Brainstorms
            ** 16 -> References
            */

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
