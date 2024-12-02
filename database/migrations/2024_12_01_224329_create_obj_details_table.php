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
        Schema::create('obj_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->decimal('area', 15, 2)->nullable();
            $table->decimal('land_area', 15, 2)->nullable();
            $table->integer('rooms')->nullable();
            $table->string('reference_number', 50)->nullable();
            $table->decimal('divisible_min', 15, 2)->nullable();
            $table->decimal('divisible_max', 15, 2)->nullable();
            $table->boolean('furniture')->nullable();
            $table->enum('position', [0, 1, 2, 3, 4])->nullable();
            $table->date('available_from')->nullable();
            $table->date('available_to')->nullable();
            $table->integer('max_persons')->nullable();
            $table->enum('wg_size', range(2, 16))->nullable();
            $table->smallInteger('build_year')->nullable();
            $table->string('move_in', 50)->nullable();
            $table->integer('seats')->nullable();
            $table->integer('floor')->nullable();
            $table->decimal('window_area', 15, 2)->nullable();
            $table->smallInteger('min_lease')->nullable();
            $table->enum('preferences_gender', ['', 'w', 'm'])->nullable();
            $table->integer('preferences_age_from')->nullable();
            $table->integer('preferences_age_to')->nullable();

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('property_id')->references('id')->on('obj_properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obj_details');
    }
};
