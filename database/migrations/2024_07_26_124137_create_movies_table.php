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
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('poster_img')->nullable();
            $table->integer('release_year')->nullable();
            $table->string('cast')->nullable();
            $table->string('crew')->nullable();
            $table->string('rated')->nullable();
            $table->float('imdb', 8, 2)->nullable();
            $table->integer('runtime')->nullable();
            $table->string('tagline')->nullable();
            $table->string('genre')->nullable();
            $table->string('trailer_link')->nullable();
            $table->string('download_link')->nullable();
            $table->string('watch_link')->nullable();
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
