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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable()->after('email');
            $table->string('address')->nullable()->after('phone');
            $table->integer('order')->default(1000)->after('address');
            $table->enum('status', ['pending', 'cancelled', 'active'])->default('pending')->after('order');
            $table->string('role')->nullable()->after('status');
            $table->timestamp('registered_at')->nullable()->after('role');
            $table->timestamp('last_active_at')->nullable()->after('registered_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('order');
            $table->dropColumn('status');
            $table->dropColumn('role');
            $table->dropColumn('registered_at');
            $table->dropColumn('last_active_at');
        });
    }
};
