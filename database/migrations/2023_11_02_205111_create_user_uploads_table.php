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
        Schema::create('user_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('s_image');
            $table->string('artist_name');
            $table->text('description');
            $table->string('file_title');
            $table->string('title_slug');
            $table->string('filename');
            $table->string('file_type');
            $table->integer('size');
            $table->integer('code');
            $table->enum('status', array('active', 'inactive'));
            $table->string('file_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_uploads');
    }
};
