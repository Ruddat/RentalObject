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
        Schema::create('tenant_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User-ID als Fremdschlüssel
            $table->foreignId('tenant_id')->constrained()->onDelete('cascade');
            $table->foreignId('rental_object_id')->constrained()->onDelete('cascade');
            $table->year('year');
            $table->unsignedTinyInteger('month')->nullable(); // Monat als Zahl (1 = Januar, 12 = Dezember)
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_payments');
    }
};
