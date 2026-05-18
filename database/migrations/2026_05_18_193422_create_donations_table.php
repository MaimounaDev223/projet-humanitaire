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
    Schema::create('donations', function (Blueprint $table) {
        $table->id();
        $table->string('donateur_nom');
        $table->string('donateur_email');
        $table->enum('type_don', ['financier', 'materiel']);
        $table->double('montant', 8, 2)->nullable(); // Si financier
        $table->string('description_materiel')->nullable(); // Si matériel (ex: "20 sacs de riz")
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
