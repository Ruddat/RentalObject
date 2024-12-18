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
        Schema::create('obj_media_links', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained('obj_properties')->onDelete('cascade');
            $table->string('type'); // 'video' oder 'tour'
            $table->string('link');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_media_links');
    }
};
