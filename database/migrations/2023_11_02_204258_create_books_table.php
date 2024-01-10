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
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('books_author_id');
            $table->string('book_title');
            $table->string('book_slug');
            $table->string('publisher_name');
            $table->string('language');
            $table->string('book_file');
            $table->string('book_cover');
            $table->integer('pages');
            $table->string('publisher_year')->date();
            $table->enum('type', array('1','0'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
