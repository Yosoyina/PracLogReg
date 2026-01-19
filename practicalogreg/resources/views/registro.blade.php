<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    
    <form method="POST" action="{{ route('registro') }}">
        @csrf
        
        <div>
            <label>Usuario</label>
            <input type="text" name="username" value="{{ old('username') }}" required>
            @error('username')<span>{{ $message }}</span>@enderror
        </div>
        
        <div>
            <label>Nombre</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name')<span>{{ $message }}</span>@enderror
        </div>
        
        <div>
            <label>Apellidos</label>
            <input type="text" name="apellidos" value="{{ old('apellidos') }}" required>
            @error('apellidos')<span>{{ $message }}</span>@enderror
        </div>
        
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email')<span>{{ $message }}</span>@enderror
        </div>
        
        <div>
            <label>Contraseña</label>
            <input type="password" name="password" required>
            @error('password')<span>{{ $message }}</span>@enderror
        </div>
        
        <div>
            <label>Confirmar Contraseña</label>
            <input type="password" name="password_confirmation" required>
        </div>
        
        <div>
            <label>Rol</label>
            <select name="rol" required>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
            @error('rol')<span>{{ $message }}</span>@enderror
        </div>
        
        <button type="submit">Registrarse</button>
    </form>
    
    <a href="{{ route('login') }}">Iniciar sesión</a>
</body>
</html>
