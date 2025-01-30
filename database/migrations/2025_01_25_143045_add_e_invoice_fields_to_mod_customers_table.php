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
            // E-Invoice specific fields
            $table->boolean('is_e_invoice')->default(0)->after('is_active');
            $table->string('e_invoice_format')->nullable()->after('is_e_invoice');
            $table->string('delivery_method')->nullable()->after('e_invoice_format');
            $table->string('invoice_language', 5)->default('de')->after('delivery_method');

            // Payment-related fields
            $table->string('iban')->nullable()->after('vat_number');
            $table->string('bic')->nullable()->after('iban');
            $table->string('default_currency', 3)->default('EUR')->after('payment_terms');

            // Status and history
            $table->timestamp('last_invoice_date')->nullable()->after('notes');
            $table->decimal('total_invoiced', 15, 2)->default(0)->after('last_invoice_date');

            // Communication opt-in
            $table->boolean('newsletter_opt_in')->default(0)->after('total_invoiced');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mod_customers', function (Blueprint $table) {
            $table->dropColumn([
                'is_e_invoice',
                'e_invoice_format',
                'delivery_method',
                'invoice_language',
                'iban',
                'bic',
                'default_currency',
                'last_invoice_date',
                'total_invoiced',
                'newsletter_opt_in'
            ]);
        });
    }
};
