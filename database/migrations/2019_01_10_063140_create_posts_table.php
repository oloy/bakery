<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cake');
            $table->string('email');
            $table->string('phone',100);
            $table->string('pickupType');
            $table->string('location');
            $table->mediumText('request');
            $table->timestamps();

        });
        Schema::create('postsUser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cake');
            $table->string('email');
            $table->string('phone',100);
            $table->string('pickupType');
            $table->string('location');
            $table->mediumText('request');
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
        Schema::dropIfExists('posts');
        Schema::dropIfExists('postsUser');

    }
    
}
