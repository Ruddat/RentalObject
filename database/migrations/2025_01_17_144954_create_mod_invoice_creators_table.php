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
        Schema::create('mod_invoice_creators', function (Blueprint $table) {
            $table->id();
            $table->string('first_name'); // Vorname des Erstellers
            $table->string('last_name'); // Nachname des Erstellers
            $table->string('company_name')->nullable(); // Firmenname (z. B. GmbH)
            $table->string('email')->unique(); // E-Mail-Adresse des Erstellers
            $table->string('phone')->nullable(); // Telefonnummer
            $table->string('address')->nullable(); // Adresse (Straße, Hausnummer)
            $table->string('city')->nullable(); // Stadt
            $table->string('postal_code')->nullable(); // Postleitzahl
            $table->string('country')->nullable(); // Land
            $table->string('tax_number')->nullable(); // Steuer-ID oder Umsatzsteuer-Identifikationsnummer
            $table->string('bank_name')->nullable(); // Name der Bank
            $table->string('bank_account')->nullable(); // Bankkontonummer
            $table->string('iban')->nullable(); // IBAN
            $table->string('bic')->nullable(); // BIC/SWIFT-Code
            $table->string('paypal_account')->nullable(); // PayPal-Konto
            $table->boolean('accept_bank_transfer')->default(true); // Akzeptiert Banküberweisung
            $table->boolean('accept_paypal')->default(true); // Akzeptiert PayPal-Zahlungen
            $table->string('website')->nullable(); // Website des Erstellers
            $table->string('logo_path')->nullable(); // Pfad zum Logo
            $table->text('notes')->nullable(); // Zusätzliche Notizen
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_invoice_creators');
    }
};
