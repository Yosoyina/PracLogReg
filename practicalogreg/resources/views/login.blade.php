<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    
    @if($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
    
    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <div>
            <label>Username</label>
            <input type="text" name="username" value="{{ old('username') }}" required>
        </div>
        
        <div>
            <label>Contraseña</label>
            <input type="password" name="password" required>
        </div>
        
        <button type="submit">Iniciar Sesión</button>
    </form>
    
    <a href="{{ route('registro') }}">Registrarse</a>
</body>
</html>