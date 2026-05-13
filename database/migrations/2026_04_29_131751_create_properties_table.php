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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('slug')->unique();
            $table->decimal('list_price', 15, 2);
            $table->decimal('est_payment', 10, 2)->nullable();
            $table->decimal('arv', 15, 2)->nullable();
            $table->decimal('roi', 5, 2)->nullable();
            $table->decimal('ltc', 5, 2)->nullable();
            $table->integer('beds')->nullable();
            $table->decimal('bath', 3, 1)->nullable();
            $table->integer('sqft')->nullable();
            $table->integer('yr_built')->nullable();
            $table->string('exterior')->nullable();
            $table->string('main_img')->nullable();
            $table->json('gallery')->nullable();
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->json('nearby_amenities')->nullable();
            $table->enum('status', ['Available', 'Under Construction', 'Sold'])->default('Available');
            $table->string('prop_type');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
