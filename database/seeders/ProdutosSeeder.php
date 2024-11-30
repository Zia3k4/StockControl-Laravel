<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProdutosSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
{
    DB::table('produtos')->truncate();

    $produtos = [
        ['descricao' => 'Cimento CP II 50kg', 'preco' => 25.90, 'qtd_disponivel' => 100, 'nota_fiscal' => 'NF001', 'fornecedor_id' => 1],
        ['descricao' => 'Areia Média 1m³', 'preco' => 70.00, 'qtd_disponivel' => 50, 'nota_fiscal' => 'NF002', 'fornecedor_id' => 2],
        ['descricao' => 'Brita 1 1m³', 'preco' => 85.00, 'qtd_disponivel' => 40, 'nota_fiscal' => 'NF003', 'fornecedor_id' => 3],
        ['descricao' => 'Bloco de Concreto 14x19x39 cm', 'preco' => 1.50, 'qtd_disponivel' => 500, 'nota_fiscal' => 'NF004', 'fornecedor_id' => 4],
        ['descricao' => 'Cimento CP II 50kg', 'preco' => 25.90, 'qtd_disponivel' => 100, 'nota_fiscal' => 'NF001', 'fornecedor_id' => 1],
        ['descricao' => 'Areia Média 1m³', 'preco' => 70.00, 'qtd_disponivel' => 50, 'nota_fiscal' => 'NF002', 'fornecedor_id' => 2],
        ['descricao' => 'Brita 1 1m³', 'preco' => 85.00, 'qtd_disponivel' => 40, 'nota_fiscal' => 'NF003', 'fornecedor_id' => 3],
        ['descricao' => 'Bloco de Concreto 14x19x39 cm', 'preco' => 1.50, 'qtd_disponivel' => 500, 'nota_fiscal' => 'NF004', 'fornecedor_id' => 4],
        ['descricao' => 'Tijolo Baiano 9 Furos', 'preco' => 0.80, 'qtd_disponivel' => 1000, 'nota_fiscal' => 'NF005', 'fornecedor_id' => 5],
        ['descricao' => 'Cal Hidratada CH III 20kg', 'preco' => 12.00, 'qtd_disponivel' => 200, 'nota_fiscal' => 'NF006', 'fornecedor_id' => 6],
        ['descricao' => 'Vergalhão CA-50 8mm 12m', 'preco' => 29.90, 'qtd_disponivel' => 150, 'nota_fiscal' => 'NF007', 'fornecedor_id' => 7],
        ['descricao' => 'Tubo PVC 100mm 6m', 'preco' => 45.50, 'qtd_disponivel' => 120, 'nota_fiscal' => 'NF008', 'fornecedor_id' => 8],
        ['descricao' => 'Caixa D\'Água 500L', 'preco' => 189.90, 'qtd_disponivel' => 30, 'nota_fiscal' => 'NF009', 'fornecedor_id' => 9],
        ['descricao' => 'Telha Cerâmica 40x24 cm', 'preco' => 1.20, 'qtd_disponivel' => 600, 'nota_fiscal' => 'NF010', 'fornecedor_id' => 10],
        ['descricao' => 'Porta de Madeira 80x210 cm', 'preco' => 160.00, 'qtd_disponivel' => 20, 'nota_fiscal' => 'NF011', 'fornecedor_id' => 1],
        ['descricao' => 'Janela de Alumínio 1.20x1.00m', 'preco' => 220.00, 'qtd_disponivel' => 15, 'nota_fiscal' => 'NF012', 'fornecedor_id' => 2],
        ['descricao' => 'Piso Cerâmico 60x60 cm', 'preco' => 22.90, 'qtd_disponivel' => 300, 'nota_fiscal' => 'NF013', 'fornecedor_id' => 3],
        ['descricao' => 'Rejunte Branco 1kg', 'preco' => 8.90, 'qtd_disponivel' => 500, 'nota_fiscal' => 'NF014', 'fornecedor_id' => 4],
        ['descricao' => 'Argamassa ACIII 20kg', 'preco' => 15.50, 'qtd_disponivel' => 400, 'nota_fiscal' => 'NF015', 'fornecedor_id' => 5],
        ['descricao' => 'Massa Corrida 18L', 'preco' => 32.00, 'qtd_disponivel' => 50, 'nota_fiscal' => 'NF016', 'fornecedor_id' => 6],
        ['descricao' => 'Luminária LED Embutir 18W', 'preco' => 45.00, 'qtd_disponivel' => 80, 'nota_fiscal' => 'NF017', 'fornecedor_id' => 7],
        ['descricao' => 'Interruptor Simples', 'preco' => 4.50, 'qtd_disponivel' => 300, 'nota_fiscal' => 'NF018', 'fornecedor_id' => 8],
        ['descricao' => 'Tomada 10A', 'preco' => 5.00, 'qtd_disponivel' => 300, 'nota_fiscal' => 'NF019', 'fornecedor_id' => 9],
        ['descricao' => 'Fita Isolante 20m', 'preco' => 3.50, 'qtd_disponivel' => 200, 'nota_fiscal' => 'NF020', 'fornecedor_id' => 10],
        ['descricao' => 'Chave Philips 6mm', 'preco' => 12.00, 'qtd_disponivel' => 100, 'nota_fiscal' => 'NF021', 'fornecedor_id' => 1],
        ['descricao' => 'Martelo Pena 500g', 'preco' => 20.00, 'qtd_disponivel' => 100, 'nota_fiscal' => 'NF022', 'fornecedor_id' => 2],
        ['descricao' => 'Serra Mármore 125mm', 'preco' => 280.00, 'qtd_disponivel' => 15, 'nota_fiscal' => 'NF023', 'fornecedor_id' => 3],
        ['descricao' => 'Escada de Alumínio 6 Degraus', 'preco' => 180.00, 'qtd_disponivel' => 10, 'nota_fiscal' => 'NF024', 'fornecedor_id' => 4],
        ['descricao' => 'Nível de Bolha 40cm', 'preco' => 25.00, 'qtd_disponivel' => 50, 'nota_fiscal' => 'NF025', 'fornecedor_id' => 5],
        ['descricao' => 'Broxa para Pintura', 'preco' => 2.50, 'qtd_disponivel' => 150, 'nota_fiscal' => 'NF026', 'fornecedor_id' => 6],
        ['descricao' => 'Rolo de Lã 23cm', 'preco' => 7.00, 'qtd_disponivel' => 200, 'nota_fiscal' => 'NF027', 'fornecedor_id' => 7],
        ['descricao' => 'Caixa de Luz 4x2', 'preco' => 1.90, 'qtd_disponivel' => 300, 'nota_fiscal' => 'NF028', 'fornecedor_id' => 8],
        ['descricao' => 'Torneira para Jardim', 'preco' => 15.00, 'qtd_disponivel' => 80, 'nota_fiscal' => 'NF029', 'fornecedor_id' => 9],
        ['descricao' => 'Válvula de Descarga', 'preco' => 60.00, 'qtd_disponivel' => 40, 'nota_fiscal' => 'NF030', 'fornecedor_id' => 10],
        ['descricao' => 'Mangueira Flexível 20m', 'preco' => 35.00, 'qtd_disponivel' => 50, 'nota_fiscal' => 'NF031', 'fornecedor_id' => 1],
        ['descricao' => 'Chuveiro Elétrico 220V', 'preco' => 60.00, 'qtd_disponivel' => 60, 'nota_fiscal' => 'NF032', 'fornecedor_id' => 2],
        ['descricao' => 'Trena 5m', 'preco' => 15.00, 'qtd_disponivel' => 100, 'nota_fiscal' => 'NF033', 'fornecedor_id' => 3],
        ['descricao' => 'Betoneira 400L', 'preco' => 2500.00, 'qtd_disponivel' => 5, 'nota_fiscal' => 'NF034', 'fornecedor_id' => 4],
        ['descricao' => 'Carrinho de Mão', 'preco' => 150.00, 'qtd_disponivel' => 20, 'nota_fiscal' => 'NF035', 'fornecedor_id' => 5],
        ['descricao' => 'Escada de Fibra 8 Degraus', 'preco' => 220.00, 'qtd_disponivel' => 10, 'nota_fiscal' => 'NF036', 'fornecedor_id' => 6],
        ['descricao' => 'Arame Galvanizado 1kg', 'preco' => 8.00, 'qtd_disponivel' => 150, 'nota_fiscal' => 'NF037', 'fornecedor_id' => 7],
        ['descricao' => 'Parafuso 3mm 100 un', 'preco' => 5.50, 'qtd_disponivel' => 500, 'nota_fiscal' => 'NF038', 'fornecedor_id' => 8],
        ['descricao' => 'Prego 17x27 1kg', 'preco' => 7.50, 'qtd_disponivel' => 250, 'nota_fiscal' => 'NF039', 'fornecedor_id' => 9],
        ['descricao' => 'Lixa para Madeira P100', 'preco' => 1.50, 'qtd_disponivel' => 400, 'nota_fiscal' => 'NF040', 'fornecedor_id' => 10],
        ['descricao' => 'Resina Impermeabilizante 18L', 'preco' => 130.00, 'qtd_disponivel' => 20, 'nota_fiscal' => 'NF041', 'fornecedor_id' => 1],
        ['descricao' => 'Tinta Látex Branco 18L', 'preco' => 110.00, 'qtd_disponivel' => 25, 'nota_fiscal' => 'NF042', 'fornecedor_id' => 2],
        ['descricao' => 'Massa Acrílica 18L', 'preco' => 95.00, 'qtd_disponivel' => 30, 'nota_fiscal' => 'NF043', 'fornecedor_id' => 3],
        ['descricao' => 'Impermeabilizante Vedacit 18L', 'preco' => 120.00, 'qtd_disponivel' => 25, 'nota_fiscal' => 'NF044', 'fornecedor_id' => 4],
        ['descricao' => 'Vedapren Branco 3,6L', 'preco' => 70.00, 'qtd_disponivel' => 40, 'nota_fiscal' => 'NF045', 'fornecedor_id' => 5],
        ['descricao' => 'Bucha para Parafuso 8mm 100 un', 'preco' => 4.00, 'qtd_disponivel' => 300, 'nota_fiscal' => 'NF046', 'fornecedor_id' => 6],
        ['descricao' => 'Espátula de Aço 5cm', 'preco' => 5.50, 'qtd_disponivel' => 100, 'nota_fiscal' => 'NF047', 'fornecedor_id' => 7],
        ['descricao' => 'Prumo de Centro 500g', 'preco' => 9.00, 'qtd_disponivel' => 50, 'nota_fiscal' => 'NF048', 'fornecedor_id' => 8],
        ['descricao' => 'Alicate Universal 8"', 'preco' => 25.00, 'qtd_disponivel' => 50, 'nota_fiscal' => 'NF049', 'fornecedor_id' => 9],
        ['descricao' => 'Estilete Profissional', 'preco' => 8.00, 'qtd_disponivel' => 200, 'nota_fiscal' => 'NF050', 'fornecedor_id' => 10],
    ];
    foreach ($produtos as $produto) {
        DB::table('produtos')->updateOrInsert(
            ['descricao' => $produto['descricao'], 'nota_fiscal' => $produto['nota_fiscal']], 
            $produto
    );
    }
}
}