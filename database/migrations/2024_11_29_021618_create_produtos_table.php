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
        Schema::create('produtos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('descricao');
            $table->decimal('preco', 10);
            $table->integer('qtd_disponivel');
            $table->string('nota_fiscal', 50)->nullable();
            $table->integer('fornecedor_id')->nullable()->index('fornecedor_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
