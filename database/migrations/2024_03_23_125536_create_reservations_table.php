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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
           
              $table->string('nom');
              $table->string('prenom');
              $table->string('telephone');
              $table->string('email');
            $table->date('datereservation');
            $table->string('heurereservation');
            $table->string('adresse');
            $table->integer('nombrepersonnes');
           
           
           
           
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
}
};
