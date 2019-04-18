<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auther_id')->unsigned();
            $table->foreign('auther_id')->references('id')->on('users')->onDelete('restrict');

            $table->string('title');
            $table->string('slug'); //for our blog seo friendly
            $table->text('excerpt');
            $table->text('body');
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
