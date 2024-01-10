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
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artist_name');
            $table->string('artist_slug');
            $table->string('artist_image');
            $table->string('180x180');
            $table->string('320x320');
            $table->text('description');
            $table->string('code');
            $table->text('tags');
            $table->enum('status', array('active', 'inactive'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
