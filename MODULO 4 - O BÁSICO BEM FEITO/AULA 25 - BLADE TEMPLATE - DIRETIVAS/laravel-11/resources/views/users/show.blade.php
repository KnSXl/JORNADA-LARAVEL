<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mostra usuário: {{ $user->name }}</h1>

    @if ($user->id === 1)
        <div>Sou Admin</div>
    @else
        <div>Não sou Admin</div>
    @endif

    {{ dd($user) }}
</body>
</html>