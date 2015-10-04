<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->text('content');
            $table->json('images');
            $table->integer('language_id')->unsigned();
            $table->integer('content_id')->unsigned();
            
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('content_id')->references('id')->on('contents');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('content_translations');
    }
}
