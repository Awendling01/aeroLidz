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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('category'); // covers, light-bars, graphic, custom, subscription, accessories
            $table->boolean('in_stock')->default(true);
            $table->boolean('featured')->default(false);
            $table->string('badge')->nullable(); // "Best Seller", "New", "Limited", etc.
            $table->boolean('from_price')->default(false); // For subscription items "from $X"
            $table->decimal('rating', 3, 2)->default(0);
            $table->integer('review_count')->default(0);
            $table->json('features')->nullable(); // Array of feature bullet points
            $table->json('images')->nullable(); // Array of image URLs
            $table->json('specifications')->nullable(); // Array of specs
            $table->integer('sort_order')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
