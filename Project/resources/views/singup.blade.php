<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" href="Css/signup.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="main-text">Sign Up</div>
            <label class="input-label" for="nombre">Nombre</label>
            <input type="text" id="nombre" class="input-box">
            
            <label class="input-label" for="apellido">Apellido</label>
            <input type="text" id="apellido" class="input-box">
            
            <label class="input-label" for="email">Correo Electrónico</label>
            <input type="email" id="email" class="input-box">
            
            <label class="input-label" for="password">Contraseña</label>
            <input type="password" id="password" class="input-box">
            
            <div class="terms">
                <div class="checkbox"></div>
                <span class="remember-label">Estoy de acuerdo con los</span>
                <span class="register-link">&nbsp;términos y condiciones.</span>
            </div>
            <a href="{{ route('login') }}" class="btn btn-primary btn-block login-button">Log in</a>
        </div>
    </div>
</body>
</html>
