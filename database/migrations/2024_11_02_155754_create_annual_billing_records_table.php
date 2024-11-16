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
        Schema::create('annual_billing_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // User-ID hinzufügen
            $table->unsignedBigInteger('rental_object_id');
            $table->unsignedBigInteger('tenant_id');
            $table->unsignedBigInteger('utility_cost_id');
            $table->year('year');
            $table->decimal('amount', 10, 2);
            $table->enum('distribution_key', ['area', 'people', 'units'])->default('units');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('rental_object_id')->references('id')->on('rental_objects')->onDelete('cascade');
            $table->foreign('tenant_id')->references('id')->on('tenants')->onDelete('cascade');
            $table->foreign('utility_cost_id')->references('id')->on('utility_costs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annual_billing_records');
    }
};
