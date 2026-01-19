<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil</title>
</head>
<body>
    <h1>Mi Perfil</h1>
    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
    
    <h2>Información Personal</h2>
    
    <p><strong>Usuario:</strong> {{ $user->username }}</p>
    <p><strong>Nombre:</strong> {{ $user->name }}</p>
    <p><strong>Apellidos:</strong> {{ $user->apellidos }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
</body>
</html>