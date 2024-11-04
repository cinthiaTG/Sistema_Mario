<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Usuario</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            width: 100vw;
            height: 100vh;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .sidebar {
            width: 80px;
            background-color: black;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px 0;
        }

        .sidebar img {
            width: 30px;
            height: 30px;
            margin: 20px 0;
            cursor: pointer;
        }

        .profile-content {
            flex: 1;
            padding: 40px;
            background-color: #f9f3f4;
            border-radius: 0 10px 10px 0;
            overflow-y: auto;
        }

        .profile-content h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 26px;
        }

        .profile-picture {
            display: block;
            margin: 0 auto;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
        }

        .logo {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #7ebc68;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .profile-details {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        .profile-details li {
            font-size: 16px;
            margin-bottom: 12px;
            font-weight: bold;
        }
    </style>
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="{{ route('jugadores.index') }}"> 
                <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
            </a>            
            <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
            <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
            <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
            <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
        </div>
        <div class="profile-content">
            <h2>Perfil Usuario</h2>
            <img class="profile-picture" src="{{ asset('img/logo.png') }}" alt="Foto de Perfil">
            <div class="logo">SPORTIVO</div>
            <ul class="profile-details">
                <li>Nombre:</li>
                <li>Fecha de nacimiento:</li>
                <li>Género:</li>
                <li>Teléfono:</li>
                <li>Edad:</li>
                <li>Correo electrónico:</li>
                <li>Rol (jugador, entrenador, árbitro, fanático):</li>
            </ul>
        </div>
    </div>
</body>
</html>