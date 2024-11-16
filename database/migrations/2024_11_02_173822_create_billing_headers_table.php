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
        Schema::create('billing_headers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User-ID als Fremdschlüssel
            $table->string('creator_name');
            $table->string('first_name')->nullable();
            $table->string('street')->nullable();
            $table->string('house_number')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable(); // Optional für Telefonnummer
            $table->string('email')->nullable(); // Optional für E-Mail
            $table->string('bank_name')->nullable(); // Optional für Bankname
            $table->string('iban')->nullable(); // Optional für IBAN
            $table->string('bic')->nullable(); // Optional für BIC
            $table->text('footer_text')->nullable(); // Optional für Fußtext
            $table->text('notes')->nullable(); // Optional für Notizen
            $table->string('logo')->nullable(); // Optional für Logo
            $table->string('logo_path')->nullable(); // Speichert den Pfad zum Logo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billing_headers');
    }
};
