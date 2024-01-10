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
        Schema::create('movies_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cat_name');
            $table->string('cat_slug');
            $table->string('image_url');
            $table->integer('parent_ids');
            $table->string('folder_key');
            $table->enum('status', array('active', 'inactive'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_category');
    }
};
