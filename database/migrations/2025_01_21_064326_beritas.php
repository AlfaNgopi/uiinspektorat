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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('context')->nullable();
            $table->string('img_caption')->nullable();
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->date('date');
            $table->string('category');
            $table->boolean('is_redaksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
