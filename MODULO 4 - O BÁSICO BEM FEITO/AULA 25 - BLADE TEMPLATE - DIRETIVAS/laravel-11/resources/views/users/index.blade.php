<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- php -->
    <!-- foreach -->
    <!-- if/else -->

    <h1>{{ $greeting }}</h1>
    
    @foreach ($users as $user)
        <div>
            {{ $user->name }} {{ $user->email }}
        </div>
    @endforeach
    
    {{ dd($users) }}
</body>
</html>