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
        Schema::create('data_quittung_texts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Benutzer-ID
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Fremdschlüssel
            $table->string('text'); // Beschreibungstext
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_quittung_texts');
    }
};
