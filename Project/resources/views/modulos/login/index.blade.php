<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-text">SPORTIVO</div>
            <img class="logo-image" src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        
        <div class="main-text">Gestiona tu pasión, lidera tu equipo</div>
        <div class="sub-text">
            <span>No tienes una cuenta? </span><span class="register-link">Registrate ahora</span>
        </div>

        <div class="form-container">
            <label class="input-label email-label" for="email">Correo Electrónico</label>
            <input type="email" id="email" class="input-box email-box">

            <label class="input-label password-label" for="password">Contraseña</label>
            <input type="password" id="password" class="input-box password-box">
            
            <div class="remember-label">
                <input type="checkbox" class="checkbox">Recordar
            </div>
            
            <div class="login-button">Log in</div>
        </div>
    </div>
</body>
</html>

