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
        Schema::create('movies', function (Blueprint $table) {
            // $table->id()->autoIncrement();
            $table->increments('id'); 
           $table->integer('move_category_id');
            $table->string('title');
            $table->string('title_slug');
            $table->text('description');
            $table->string('quick_code');
            $table->string('image');
            $table->integer('view');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
