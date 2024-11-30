<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { 
        $this->call(FornecedoresSeeder::class); 
        $this->call(ProdutosSeeder::class);
        $this->call(FuncionariosSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
