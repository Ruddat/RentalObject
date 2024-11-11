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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('short_title')->nullable(); // Kurz-Titel
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('image_small')->nullable();
            $table->string('image_large')->nullable();
            $table->string('image_thumbnail')->nullable();
            $table->string('image_grid')->nullable();
            $table->string('author')->default('Admin');

            // Hinzufügen des Approval-Status
            $table->enum('approval_status', ['approved', 'limited', 'rejected'])->default('approved');

            // Start- und Enddatum für den Post
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->timestamp('published_at')->nullable();
            $table->timestamps(); // Erstellt automatisch `created_at` und `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
