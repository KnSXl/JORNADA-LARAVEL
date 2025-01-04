# Aula 9 - Instalando Laravel Sail

Foi ensinado a criar um projeto Laravel utilizando o Docker com Laravel Sail.

## Passos:

### Criar o projeto:

```bash
curl -s "https://laravel.build/laravel-11" | bash
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