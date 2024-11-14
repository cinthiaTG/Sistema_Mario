<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('Css/editarjugador2.css') }}">
</head>
<body>
    <br>
    <div class="sidebar">
        <a href="{{ route('editarjugador.index') }}">
            <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
        </a>

        <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
        <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
        <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
        <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
    </div>

    <div class="container">
        <div class="form-title">Editar Jugador</div>
        <form class="player-form">
            <br>
            <div class="section-title">Nombre</div>
            <input type="text" required>

            <div class="section-title">Apellido Paterno</div>
            <input type="text" required>

            <div class="section-title">Apellido Materno</div>
            <input type="text" required>

            <div class="section-title">Edad</div>
            <input type="Number" required>

            <div class="section-title">Posicion</div>
            <input type="text" required>

            <div class="section-title">ID_Deporte</div>
            <input type="Number" required>

            <div class="section-title">ID_Equipo</div>
            <input type="Number" required>

            <div class="section-title">Puntos</div>
            <input type="Number" required>

            <div class="section-title">Asistencias</div>
            <input type="Number" required>

            <div class="section-title">Tarjetas Amarillas</div>
            <input type="Number" required>

            <div class="section-title">Faltas</div>
            <input type="Number" required>

            <button type="submit" class="save-button">Guardar</button>
        </form>

        <div class="circle-wrapper">
            <div class="circle"></div>
        </div>
    </div>
</body>
</html>
