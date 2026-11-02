<?php
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
          $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('email');
            $table->string('adresse');
            $table->string('type_livraison');
            $table->string('plats');
            $table->string('montant_total', 40, 20)->nullable(); // Nouvelle colonne pour le montant total
            $table->date('date');
            $table->time('time');
            
          
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
   
    
};