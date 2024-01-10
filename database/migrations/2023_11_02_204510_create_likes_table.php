<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('news_id');
            $table->integer('artist_id');
            $table->integer('album_id');
            $table->integer('truck_id');
            $table->enum('type', array('artist', 'album', 'track', 'user_track', 'news'));
            $table->integer('user_track_id');
            $table->string('like_dislike');
            $table->string('ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
