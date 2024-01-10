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
        Schema::create('news', function (Blueprint $table) {
            //$table->id()->autoIncrement();
            $table->increments('id');
            $table->enum('type', array('news', 'upcoming','events'));
            $table->string('title');
            $table->string('slug');
            $table->string('image');
            $table->string('url');
            $table->text('description');
            $table->enum('status', array('active', 'inactive'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
