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
        Schema::create('obj_docs', function (Blueprint $table) {
            $table->id();
            $table->uuid('temporary_uuid')->nullable();
            $table->unsignedBigInteger('property_id')->nullable();
            $table->string('name');
            $table->string('path'); // Hier wird der Pfad gespeichert
            $table->decimal('size', 8, 2); // Größe in KB
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('obj_properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_docs');
    }
};
