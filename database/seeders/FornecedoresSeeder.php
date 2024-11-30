<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FornecedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedores = [
            [
                'nome' => 'Construmais',
                'cnpj' => '12.345.678/0001-01',
                'cep' => '01000-000',
                'contato' => '(11) 1234-5678',
                'endereco' => 'Av. Paulista, 1000, São Paulo - SP',
            ],
            [
                'nome' => 'Cia Construtora',
                'cnpj' => '23.456.789/0001-02',
                'cep' => '02000-000',
                'contato' => '(11) 2345-6789',
                'endereco' => 'Rua do Comércio, 200, São Paulo - SP',
            ],
            [
                'nome' => 'Materiais Lopes',
                'cnpj' => '34.567.890/0001-03',
                'cep' => '03000-000',
                'contato' => '(21) 3456-7890',
                'endereco' => 'Rua das Pedras, 300, Rio de Janeiro - RJ',
            ],
            [
                'nome' => 'Construforte',
                'cnpj' => '45.678.901/0001-04',
                'cep' => '04000-000',
                'contato' => '(41) 4567-8901',
                'endereco' => 'Av. das Américas, 400, Curitiba - PR',
            ],
            [
                'nome' => 'Casa do Construtor',
                'cnpj' => '56.789.012/0001-05',
                'cep' => '05000-000',
                'contato' => '(31) 5678-9012',
                'endereco' => 'Rua dos Pinheiros, 500, Belo Horizonte - MG',
            ],
            [
                'nome' => 'Construmar',
                'cnpj' => '67.890.123/0001-06',
                'cep' => '06000-000',
                'contato' => '(51) 6789-0123',
                'endereco' => 'Av. do Forte, 600, Porto Alegre - RS',
            ],
            [
                'nome' => 'Bloco Forte',
                'cnpj' => '78.901.234/0001-07',
                'cep' => '07000-000',
                'contato' => '(71) 7890-1234',
                'endereco' => 'Rua das Flores, 700, Salvador - BA',
            ],
            [
                'nome' => 'Mega Construtora',
                'cnpj' => '89.012.345/0001-08',
                'cep' => '08000-000',
                'contato' => '(81) 8901-2345',
                'endereco' => 'Av. Recife, 800, Recife - PE',
            ],
            [
                'nome' => 'Cimento e Cia',
                'cnpj' => '90.123.456/0001-09',
                'cep' => '09000-000',
                'contato' => '(62) 9012-3456',
                'endereco' => 'Rua Goiás, 900, Goiânia - GO',
            ],
            [
                'nome' => 'Tudo para Construção',
                'cnpj' => '01.234.567/0001-10',
                'cep' => '10000-000',
                'contato' => '(85) 0123-4567',
                'endereco' => 'Av. Ceará, 1000, Fortaleza - CE',
            ],
        ];

        foreach ($fornecedores as $fornecedor) {
            DB::table('fornecedores')->updateOrInsert(
                ['cnpj' => $fornecedor['cnpj']], 
                $fornecedor      
            );
        }
    }
}
