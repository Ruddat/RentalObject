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
        Schema::create('sys_user_time_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Referenz auf den User
            $table->string('page_url'); // URL der Seite
            $table->integer('time_spent')->default(0); // Zeit in Sekunden
            $table->timestamps();

            // Fremdschlüssel
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_user_time_logs');
    }
};
