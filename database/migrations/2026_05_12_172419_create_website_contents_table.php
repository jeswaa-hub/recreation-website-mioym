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
        Schema::create('website_contents', function (Blueprint $table) {
            $table->id();
            $table->string('page_name'); // e.g., "Landing Page", "About Us"
            $table->string('section_name'); // e.g., "Hero", "Services", "Contact"
            $table->longText('content'); // The actual text content
            $table->text('keywords')->nullable(); // For search indexing
            $table->string('file_path'); // e.g., "resources/views/landingPage.blade.php"
            $table->string('content_type')->default('text'); // text, heading, link, button
            $table->integer('priority')->default(0); // Higher = more important
            $table->timestamp('last_extracted')->useCurrent();
            $table->timestamps();
            
            $table->index(['page_name', 'section_name']);
            $table->fullText(['content', 'keywords']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_contents');
    }
};
