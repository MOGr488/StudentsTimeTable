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
        Schema::create('pdf_sentences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pdf_file_id')->references('id')->on('pdf_files')->onDelete('cascade');
            $table->text('sentence');
            $table->integer('page_number');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdf_sentences');
    }
};
