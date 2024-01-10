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
        Schema::create('tracks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('album_id');
            $table->string('track_title');
            $table->string('track_slug');
            $table->string('tag');
            $table->string('code');
            $table->string('track_peot');
            $table->enum('track_type', array('audio', 'video'));
            $table->string('audio_file');
            $table->string('mf_code');
            $table->string('upload_key');
            $table->enum('status', array('active', 'inactive'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
