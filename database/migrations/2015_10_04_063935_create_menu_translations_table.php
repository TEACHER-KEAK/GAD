<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);    
            $table->text('content');
            $table->integer('menu_id')->unsigned();
            $table->integer('language_id')->unsigned();
            
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('language_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu_translations');
    }
}
