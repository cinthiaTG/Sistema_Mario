<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Torneo</title>
    <link rel="stylesheet" href="{{ asset('css/perfiljugador.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="{{ route('dashboard.index') }}"> 
                <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
            </a>            
            <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
            <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
            <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
            <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
        </div>

        <div class="form-title">Perfil Jugador</div>
        <form class="tournament-form">
            <img class="photo" src="{{ asset('img/photo.png') }}" alt="more">
            <ul class="profile-details">
                <li>Nombre:</li>
                <li>Fecha de nacimiento:</li>
                <li>Género:</li>
                <li>Teléfono:</li>
                <li>Edad:</li>
                <li>Correo electrónico:</li>
                <li>Rol (jugador, entrenador, árbitro, fanático):</li>
            </ul>
            

            <button type="submit" class="save-button">Guardar</button>
        </form>

        <div class="circle-wrapper">
            <div class="circle"></div>
        </div>
    </div>
</body>
</html>
