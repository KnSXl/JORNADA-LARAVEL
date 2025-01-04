# Aula 1O - Escolhendo os serviços do Sail

Foi ensinado a escolher os serviços que serão utilizado com Docker e Laravel Sail.

## Passos:

### Criar o projeto escolhendo os serviços:

```bash
curl -s "https://laravel.build/laravel-11?with=mysql" | bash    // Aqui foi escolhido apenas o serviço do mysql
```

### Acessar o projeto:

```bash
cd laravel-11
```

### Iniciar o Laravel Sail:

```bash
./vendor/bin/sail up -d
```

### Rodar as migrações:

```bash
./vendor/bin/sail artisan migrate
```

### Parar o ambiente:

```bash
./vendor/bin/sail down
```