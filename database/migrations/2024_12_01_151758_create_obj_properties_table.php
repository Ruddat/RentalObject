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
        Schema::create('obj_properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign Key für Benutzer
            $table->string('user_type'); // privat oder gewerblich
            $table->string('title');
            $table->unsignedBigInteger('property_type');
            $table->unsignedBigInteger('category');
            $table->string('transaction_type')->nullable(); // verkaufen oder vermieten
            $table->boolean('looking_for_tenant')->default(false);
            $table->string('country');
            $table->string('street');
            $table->string('zip');
            $table->string('city');
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('contact_details')->default('none'); // none, name_phone, full_address
            $table->string('ad_number')->unique(); // Anzeigenummer
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Status
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('property_type')->references('id')->on('property_types')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('property_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_properties');
    }
};
