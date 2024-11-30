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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('nome');
            $table->string('cpf', 14)->unique('cpf');
            $table->string('rg', 12)->unique('rg');
            $table->string('cargo', 100);
            $table->string('endereco')->nullable();
            $table->string('cep', 9)->nullable();
            $table->decimal('salario', 10)->nullable();
            $table->string('telefone', 13);
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
