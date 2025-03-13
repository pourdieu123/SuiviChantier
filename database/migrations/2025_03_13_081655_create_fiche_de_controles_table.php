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
        Schema::create('fiche_de_controles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('contenu');
            $table->date('date_creation');
            $table->foreignId('id_projets')->constrained()->onDelete('cascade');
            $table->foreignId('id_chef_projets')->constrained()->onDelete('cascade');
            $table->foreignId('id_admins')->constrained()->onDelete('cascade');
            $table->foreignId('id_utilisateurs')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiche_de_controles');
    }
};
