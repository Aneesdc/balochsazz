<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpOption\None;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('album_name');
            $table->string('album_slug');
            $table->string('code');
            $table->text('tags');
            $table->integer('artist_id');
            $table->integer('category_id');
            $table->string('multi_artists');
            $table->string('folder_key');
            $table->string('album_image');
            $table->text('description');
            $table->enum('status', array('active', 'inactive'));
            $table->string('180x180');
            $table->string('320x320');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};
