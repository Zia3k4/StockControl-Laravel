<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionariosSeeder extends Seeder
{
    public function run(): void
    {
        $funcionarios = [
            [
                'id' => '1',
                'nome' => 'João Silva',
                'cpf' => '123.456.789-01',
                'rg' => '12.345.678-9',
                'cargo' => 'Vendedor',
                'endereco' => 'Rua das Flores, 123',
                'cep' => '12345-678',
                'salario' => 2000.00,
                'telefone' => '11987654321',
                'email' => 'joao.silva@email.com',
            ],
            [
                'id' => '2',
                'nome' => 'Maria Oliveira',
                'cpf' => '234.567.890-12',
                'rg' => '23.456.789-0',
                'cargo' => 'Caixa',
                'endereco' => 'Avenida Central, 456',
                'cep' => '23456-789',
                'salario' => 1500.00,
                'telefone' => '21912345678',
                'email' => 'maria.oliveira@email.com',
            ],
            [
                'id' => '3',
                'nome' => 'Pedro Santos',
                'cpf' => '345.678.901-23',
                'rg' => '34.567.890-1',
                'cargo' => 'Estoquista',
                'endereco' => 'Rua São João, 789',
                'cep' => '34567-890',
                'salario' => 1800.00,
                'telefone' => '31934567890',
                'email' => 'pedro.santos@email.com',
            ],
            [
                'id' => '4',
                'nome' => 'Ana Costa',
                'cpf' => '456.789.012-34',
                'rg' => '45.678.901-2',
                'cargo' => 'supervisor1',
                'endereco' => 'Avenida Brasil, 101',
                'cep' => '45678-901',
                'salario' => 3000.00,
                'telefone' => '41956781234',
                'email' => 'ana.costa@email.com',
            ],
            [
                'id' => '5',
                'nome' => 'Lucas Martins',
                'cpf' => '567.890.123-45',
                'rg' => '56.789.012-3',
                'cargo' => 'Atendente',
                'endereco' => 'Rua das Acácias, 234',
                'cep' => '56789-012',
                'salario' => 1500.00,
                'telefone' => '51923456789',
                'email' => 'lucas.martins@email.com',
            ],
            [
                'id' => '6',
                'nome' => 'Julia Rodrigues',
                'cpf' => '678.901.234-56',
                'rg' => '67.890.123-4',
                'cargo' => 'Gerente',
                'endereco' => 'Rua Nova, 567',
                'cep' => '67890-123',
                'salario' => 5000.00,
                'telefone' => '61945678901',
                'email' => 'julia.rodrigues@email.com',
            ],
            [
                'id' => '7',
                'nome' => 'Fernando Alves',
                'cpf' => '789.012.345-67',
                'rg' => '78.901.234-5',
                'cargo' => 'Vendedor',
                'endereco' => 'Rua das Palmeiras, 890',
                'cep' => '78901-234',
                'salario' => 2200.00,
                'telefone' => '71978901234',
                'email' => 'fernando.alves@email.com',
            ],
            [
                'id' => '8',
                'nome' => 'Camila Souza',
                'cpf' => '890.123.456-78',
                'rg' => '89.012.345-6',
                'cargo' => 'Repositor',
                'endereco' => 'Avenida São Paulo, 123',
                'cep' => '89012-345',
                'salario' => 1700.00,
                'telefone' => '81909876543',
                'email' => 'camila.souza@email.com',
            ],
            [
                'id' => '9',
                'nome' => 'Roberto Pereira',
                'cpf' => '901.234.567-89',
                'rg' => '90.123.456-7',
                'cargo' => 'supervisor2',
                'endereco' => 'Rua da Paz, 456',
                'cep' => '90123-456',
                'salario' => 2500.00,
                'telefone' => '91912345678',
                'email' => 'roberto.pereira@email.com',
            ],
            [
                'id' => '10',
                'nome' => 'Paula Ferreira',
                'cpf' => '012.345.678-90',
                'rg' => '01.234.567-8',
                'cargo' => 'Vendedor',
                'endereco' => 'Rua do Comércio, 789',
                'cep' => '01234-567',
                'salario' => 2100.00,
                'telefone' => '19923456789',
                'email' => 'paula.ferreira@email.com',
            ],
            // Adicione os demais registros aqui
        ];

        foreach ($funcionarios as $funcionario) {
            // Insira apenas se o registro não existir
            DB::table('funcionarios')->updateOrInsert(
                ['id' => $funcionario['id']], // Condição para verificar duplicados
                $funcionario                  // Dados a serem inseridos ou atualizados
            );
        }
    }
}
