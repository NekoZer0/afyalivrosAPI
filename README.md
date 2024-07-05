## Requisitos

* PHP 8.2 ou superior
* MySQL 8 ou superior
* Composer

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo .env as credenciais do banco de dados<br>

Instalar as dependências do PHP
```
composer install
```

Gerar a chave no arquivo .env
```
php artisan key:generate
```

Executar as migration
```
php artisan migrate
```

Executar as seed
```
php artisan db:seed
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Para acessar a API, é recomendado utilizar o Insomnia para simular requisições à API.
```
http://127.0.0.1:8000/api/users
```


## Sequencia para criar o projeto
Como criar o projeto com Laravel
```
composer create-project laravel/laravel .
```

Alterar no arquivo .env as credenciais do banco de dados<br>

Como criar o arquivo de rotas para API no Laravel 11
```
php artisan install:api
```

Como iniciar o projeto criado com Laravel
```
php artisan serve
```

Para acessar a API, é recomendado utilizar o Insomnia para simular requisições à API.
```
http://127.0.0.1:8000/api/users
```

Como criar seed com artisan no Laravel 11
```
php artisan make:seeder NomeDaSeeder
php artisan make:seeder UserSeeder
```

Como executar as seed com artisan no Laravel 11
```
php artisan db:seed
```

Como criar a Controller com artisan no Laravel 11
```
php artisan make:model NomeDaController
php artisan make:controller UserController
```

Como criar o Request com artisan no Laravel 11
```
php artisan make:request NomeDoRequest
php artisan make:request UserRequest
```
## Criar um controllers

```
php artisan make:controller UsuarioController --resource
php artisan make:controller CategoriaController --resource
php artisan make:controller LivroController --resource
```
## Criar rotas para os controllers

```
Route::resource('usuarios',UsuarioController::class);
Route::resource('categorias',CategoriaController::class);
Route::resource('livros',LivroController::class);
```
Consulatr a rotas disponivels no resorces
```
php artisan route:list
```
## Manipular migration

criar migration
```
php artisan make:migration livros --create=tb_livros
php artisan make:migration categorias --create=tb_categorias
php artisan make:migration fornecedores --create=tb_fornecedores
```
Executar as migration
```
php artisan migrate
```
desfazer o ultimo migration
```
php artisan migrate:rollback
```
desfazer todas as migration
```
php artisan migrate:reset
```