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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('intitule');
            $table->text('description');
            $table->string('entreprise')->nullable();
            $table->string('ville');
            $table->foreignId('pays_id')->constrained("pays", "id");
            $table->string('type_contrat');
            $table->string('salaire')->nullable();
            $table->timestamp('date_fin');
            $table->foreignId('user_id')->constrained("users", "id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
