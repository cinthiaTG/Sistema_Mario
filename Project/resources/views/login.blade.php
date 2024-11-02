<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 | Posts</title>
    
    <style>

* {
    box-sizing: border-box;
}

body {
    margin: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 100%;
    height: 100%;
    position: relative;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    gap: 15px;
}

.main-text {
    color: #FF0000;
    font-size: 25px;
    font-family: Inter, sans-serif;
    font-weight: 700;
    margin-bottom: 20px;
    text-align: center;
}

.sub-text {
    font-size: 15px;
    font-family: Inter, sans-serif;
    font-weight: 500;
    text-align: center;
    margin-bottom: 20px;
}

.register-link {
    color: #00B5FF;
    cursor: pointer;
}

.input-box {
    width: 340px;
    height: 28px;
    background: white;
    border: 1px black solid;
    margin-bottom: 30px;
}

.input-label {
    color: black;
    font-size: 13px;
    font-family: Inter, sans-serif;
    font-weight: 500;
    margin-bottom: 5px;
    display: block;
    text-align: left;
}

.remember-label {
    color: black;
    font-size: 10px;
    font-family: Inter, sans-serif;
    font-weight: 500;
    display: inline-block;
    margin-top: 8px;
}

.checkbox {
    width: 12px;
    height: 12px;
    background: white;
    border: 1px black solid;
    display: inline-block;
    vertical-align: middle;
    
    margin-right: 5px;
}

.login-button {
    width: 230px;
    height: 35px;
    margin-left: 60px;
    background: #E03131;
    border: 1px #E03131 solid;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    color: white;
    font-size: 15px;
    font-family: Inter, sans-serif;
    font-weight: 700;
    margin-top: 20px;
}

.header {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.logo-text {
    color: #0A0909;
    font-size: 50px;
    font-family: Inter, sans-serif;
    font-weight: 700;
    margin-bottom: 10px;
    margin-left: 20px;
}

.logo-image {
    width: 70px;
    height: 65px;
    border-radius: 50%;
    margin-left: 10px;
    margin-bottom: 10px;
}

    </style>
    
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo-text">SPORTIVO</div>
            <img class="logo-image" src="images/logo.png" alt="Logo"/>
        </div>
        
        <div class="main-text">Gestiona tu pasión, lidera tu equipo</div>
        <div class="sub-text">
            <span>No tienes una cuenta? </span><span class="register-link">Registrate ahora</span>
        </div>

        <div class="form-container">
                <!-- Campo de correo electrónico -->
                <div class="form-group">
                    <label for="email" class="input-label email-label">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="input-box email-box" required>
                </div>
        
                <!-- Campo de contraseña -->
                <div class="form-group">
                    <label for="password" class="input-label password-label">Contraseña</label>
                    <input type="password" id="password" name="password" class="input-box password-box" required>
                </div>
        
                <!-- Casilla de verificación "Recordar" -->
                <div class="form-group remember-label">
                    <input type="checkbox" id="remember" name="remember" class="checkbox">
                    <label for="remember">Recordar</label>
                </div>
        
                <!-- Botón de inicio de sesión -->
                <a href="{{ route('aficionado.index') }}" class="btn btn-primary btn-block login-button">Log in</a>

        </div>
        
    </div>
</body>
</html>
