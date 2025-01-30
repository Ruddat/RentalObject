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
        Schema::create('mod_invoice_recipients', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('user_id')->nullable(); // User ID or login ID
            $table->string('first_name')->nullable(); // First name of the recipient
            $table->string('last_name')->nullable(); // Last name of the recipient
            $table->string('company_name')->nullable(); // Company name (if applicable)
            $table->string('name'); // Full name of the recipient
            $table->string('email')->unique(); // Email address for e-invoice delivery
            $table->string('address')->nullable(); // Optional physical address
            $table->string('zip_code')->nullable(); // Postal code
            $table->string('city')->nullable(); // City name
            $table->string('country')->default('Germany'); // Default country
            $table->string('customer_type')->nullable(); // Customer type (e.g., individual, business)
            $table->string('vat_number')->nullable(); // VAT number for businesses
            $table->string('payment_terms')->nullable(); // Payment terms
            $table->boolean('is_active')->default(true); // Active status
            $table->text('notes')->nullable(); // Additional notes
            $table->boolean('is_e_invoice')->default(false); // Is this an electronic invoice recipient?
            $table->string('e_invoice_format')->nullable(); // Format for e-invoices
            $table->string('delivery_method')->nullable(); // Delivery method (e.g., email, post)
            $table->string('invoice_language')->default('de'); // Preferred invoice language
            $table->string('iban')->nullable(); // IBAN for payments
            $table->string('bic')->nullable(); // BIC for payments
            $table->string('default_currency')->default('EUR'); // Default currency
            $table->date('last_invoice_date')->nullable(); // Date of the last invoice
            $table->decimal('total_invoiced', 15, 2)->default(0); // Total amount invoiced
            $table->boolean('newsletter_opt_in')->default(false); // Opt-in for newsletters
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_invoice_recipients');
    }
};
