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
        Schema::create('program_details', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary();
            $table->string('program_name');
            $table->string('slug');
            $table->text('description');
            $table->string('short_desc');
            $table->string('image');
            $table->string('banner_image')->nullable();
            $table->string('penyiar')->nullable();
            $table->string('producer')->nullable();
            $table->string('visual_creative')->nullable();
            $table->string('audio_creative')->nullable();
            $table->string('media_affairs')->nullable();
            $table->string('music_director')->nullable();
            $table->string('operator')->nullable();
            $table->timestamps();

            $table->foreign('id')->references('id')->on('programs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_details');
    }
};
