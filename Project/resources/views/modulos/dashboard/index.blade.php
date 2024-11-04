<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="sidebar"></div>
        
        <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
        <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
        <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
        <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
    </div>
        
    <div class="content">
        <div class="welcome-message">
            <span>Hola </span><span class="username">@Nombre del usuario</span>
        </div>
        <div class="sub-message">¿Qué buscas hacer hoy?</div>
        
        <div class="card-container">
            <a href="{{ route('creartorneo.index')}}" class="card">
                <div class="card-label">Crear Torneo</div>
            </a>
            <a href="{{ route('registrarjugador.index')}}" class="card">
                <div class="card-label">Registrar Equipo</div>
            </a>
            <a href="consulta_historial.html" class="card">
                <div class="card-label">Consulta Historial</div>
            </a>
        </div>
        

        
        <div class="card-wrapper">
            <div class="card"></div> 
        </div>
        
        <div class="history-label">Consultar Historial<br>de Torneos</div>
        
        <div class="flex-container">
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
        
        <div class="result-label">Registrar<br>Resultados</div>
        
        <div class="player-stats">Consultar <br>Estadísticas de<br>Jugadores</div>
        
        <div class="team-stats">Consultar <br>Estadísticas de<br>Equipos</div>
        
        <div class="circle-wrapper">
            <div class="circle"></div>
        </div>
    </div>
</div>
</body>
</html>
