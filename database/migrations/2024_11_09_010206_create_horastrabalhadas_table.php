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
        Schema::create('horastrabalhadas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcionario')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->time('start_time'); // Hora de início
            $table->time('end_time')->nullable(); // Hora de término, pode ser null caso ainda esteja em andamento
            $table->decimal('hours_worked', 5, 2)->nullable(); // Total de horas trabalhad
            $table->text('situacao')->nullable(); // Descrição do trabalho realizado
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     * 
     */

};
