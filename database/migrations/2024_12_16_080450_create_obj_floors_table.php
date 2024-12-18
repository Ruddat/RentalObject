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
        Schema::create('obj_floors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->nullable()->constrained('obj_properties')->onDelete('cascade');
            $table->string('temporary_uuid')->nullable();
            $table->string('floor_name');
            $table->decimal('floor_price', 10, 2)->nullable();
            $table->string('price_postfix', 20)->nullable();
            $table->decimal('floor_size', 10, 2)->nullable();
            $table->string('size_postfix', 20)->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->text('description')->nullable();
            $table->string('floor_plan_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_floors');
    }
};
