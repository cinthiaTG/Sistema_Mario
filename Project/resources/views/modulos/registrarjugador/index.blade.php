<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('Css/registrarjugadores.css') }}"> 
</head>
<body>
    <div class="sidebar">
        <a href="{{ route('dashboard.index') }}"> 
            <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
        </a>
        <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
        <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
        <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
        <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
    </div>
    <div class="container">
        <div class="form-title">Registrar Jugador</div>
        <form class="player-form">
            <label>Nombre Completo</label>
            <input type="text" required>

            <label>Apellido Paterno</label>
            <input type="text" required>

            <label>Apellido Materno</label>
            <input type="text" required>

            <label>Edad</label>
            <input type="number" required>

            <label>Posición</label>
            <input type="text" required>

            <div class="section-title">Estadísticas</div>
            <label>Puntos</label>
            <input type="number" required>

            <label>Asistencias</label>
            <input type="number" required>

            <label>Tarjetas Rojas</label>
            <input type="number" required>

            <label>Tarjetas Amarillas</label>
            <input type="number" required>

            <label>Faltas</label>
            <input type="number" required>

            <button type="submit" class="save-button">Guardar</button>
        </form>

        <div class="circle-wrapper">
            <div class="circle"></div>
        </div>
    </div>
</body>
</html>
