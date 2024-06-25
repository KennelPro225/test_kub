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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('numero_candidature')->nullable()->unique();
            $table->foreignId('offre_id')->constrained("offres", "id");
            $table->foreignId('pays_id')->constrained("pays", "id");
            $table->foreignId('user_id')->constrained("users", "id");
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('numero_whatsapp')->unique();
            $table->string("telephone");
            $table->string("ville");
            $table->text('motivation');
            $table->string("cv");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
