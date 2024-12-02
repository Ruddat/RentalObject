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
        Schema::create('obj_photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->string('size_name'); // z. B. 'small', 'medium', 'large'
            $table->string('file_path'); // Pfad zur Datei
            $table->integer('sort_order')->default(0);
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('obj_properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_photos');
    }
};
