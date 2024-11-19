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
        Schema::create('page_access_logs', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('method');
            $table->string('ip');
            $table->string('user_agent');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('count')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_access_logs');
    }
};
