# Projeto: Controle de Estoque
Visão Geral
Nome do Projeto: Controle de Estoque
Tecnologias Utilizadas:

- Laravel 11
- Jetstream (autenticação)
- MySQL
- Vuex
- DataTables
- Biblioteca Laracasts (flash)
Descrição:
Este projeto é uma aplicação web para o controle de estoque de produtos. A aplicação permite que os administradores e usuários autenticados gerenciem produtos, visualizem as quantidades em estoque, façam alterações e acompanhem o histórico de movimentações de produtos.
   Também ira servir pra controlar uma lista de funcionarios e suas horas trabalhadas

## Requisitos
Pré-Requisitos
- PHP >= 8.1
- Composer
- Node.js
- MySQL
- XAMPP (opcional)
- Laravel 11.0
- Vue.js
- DataTables (ou qualquer outra lib que esteja usando)
- Instalação
- Clone o repositório:

### bash
Copiar código
git clone https://github.com/seu-usuario/controle-de-estoque.git
Navegue até o diretório do projeto:

### bash
Copiar código
cd controle-de-estoque
Instale as dependências PHP:

### bash
Copiar código
composer install
Instale as dependências JavaScript:

### bash
Copiar código
npm install
Configure o arquivo .env para o seu banco de dados MySQL:

### plaintext
Copiar código
DB_CONNECTION=mysql<br>
DB_HOST=127.0.0.1<br>
DB_PORT=3306<br>
DB_DATABASE=nome_do_banco<br>
DB_USERNAME=seu_usuario<br>
DB_PASSWORD=sua_senha<br>
Execute as migrations para criar as tabelas no banco de dados:

### bash
Copiar código
php artisan migrate
Gere a chave de aplicação:

### bash
Copiar código
php artisan key:generate
Inicie o servidor:

### bash
Copiar código
php artisan serve
Acesse o aplicativo no navegador:
http://localhost:8000

### Funcionalidades
- Autenticação: A aplicação utiliza o Jetstream para gerenciar usuários, autenticação, e sessões.

- Admin: Acesso completo para gerenciar produtos, categorias e movimentações de estoque.
- Usuários:com permissões limitadas.
### Gestão de Produtos:

### Cadastro de novos produtos.
Edição e exclusão de produtos existentes.
Exibição detalhada de produtos no estoque.
Controle de Movimentação de Estoque:

### Registra entradas e saídas de produtos no estoque.
Histórico de movimentações.
DataTables: Utilização de DataTables para exibição e filtragem dinâmica de dados de produtos e movimentações.

### Estrutura do Projeto
- app/: Contém os controllers, modelos, e lógica de aplicação.
- database/migrations/: Scripts de migration para criar as tabelas no banco de dados.
- resources/views/: Contém as views da aplicação.
- routes/: Define as rotas da aplicação, com as correspondências para os controllers.
- public/: Arquivos públicos (CSS, JS, imagens).
- config/: Arquivos de configuração do Laravel.
- EndPoints da API (se aplicável)
- Autenticação
- POST /login
- Autentica um usuário e retorna um token.


### Comandos Comuns do Artisan
<code><b>php artisan migrate</b></code>
Executa as migrations e cria as tabelas no banco de dados.

<code><b>php artisan db:seed "nome da seed" </b></code>
Popula o banco de dados com dados de exemplo.

<code><b>php artisan serve</b></code>
Inicia o servidor de desenvolvimento.

Testes
Testes Unitários
Os testes unitários para o projeto estão localizados na pasta tests/. Eles cobrem as funcionalidades de criação, leitura, atualização e exclusão de produtos, bem como as funcionalidades de autenticação.

Para rodar os testes:
bash
Copiar código
<code><b>php artisan test</b></code>
Considerações Finais
O projeto está em fase de desenvolvimento e ainda pode ter novas funcionalidades adicionadas, como relatórios de movimentação de estoque, integração com outros sistemas, e mais.

