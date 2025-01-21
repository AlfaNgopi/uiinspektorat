<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover')->nullable(); // Added cover field
            $table->text('context')->nullable();
            $table->boolean('is_active')->default(true);
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('playlists'); // Corrected table name from 'galleries' to 'playlists'
    }
};
