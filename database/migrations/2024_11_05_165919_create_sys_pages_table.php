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
        Schema::create('sys_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // E.g., 'about-us', 'faq', etc.
            $table->string('title');
            $table->text('content')->nullable();
            $table->boolean('is_active')->default(true); // Enable/disable page
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_pages');
    }
};
