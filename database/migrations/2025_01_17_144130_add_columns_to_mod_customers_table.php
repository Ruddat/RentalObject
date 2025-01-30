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
        Schema::table('mod_customers', function (Blueprint $table) {
            $table->string('country')->nullable()->after('postal_code');
            $table->string('customer_type')->default('private')->after('country'); // private or business
            $table->string('company_name')->nullable()->after('customer_type');
            $table->string('vat_number')->nullable()->after('company_name');
            $table->string('payment_terms')->default('14 days')->after('vat_number');
            $table->boolean('is_active')->default(true)->after('payment_terms');
            $table->text('notes')->nullable()->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mod_customers', function (Blueprint $table) {
            $table->dropColumn([
                'country',
                'customer_type',
                'company_name',
                'vat_number',
                'payment_terms',
                'is_active',
                'notes',
            ]);
        });
    }
};
