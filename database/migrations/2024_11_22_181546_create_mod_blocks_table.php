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
        Schema::create('mod_blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')
                  ->constrained('mod_pages') // Tabellenname explizit angeben
                  ->onDelete('cascade');
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('type')->default('text'); // z.B. text, image, gallery, etc.
            $table->text('html_structure')->nullable(); // Für benutzerdefinierte HTML-Blöcke
            $table->integer('order')->default(0); // Reihenfolge
            $table->boolean('active')->default(true); // Aktiv/Inaktiv
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mod_blocks');
    }
};
