<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('Css/registrarresultado2.css') }}">
</head>
<body>
    <br>
    <div class="sidebar">
        <a href="{{ route('registrarresultadouno.index') }}"> 
            <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
        </a>

        <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
        <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
        <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
        <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
    </div>

    <div class="container">
        <div class="form-title">Ingresar datos</div>
        <form class="player-form">
            <div class="section-title">Fecha</div>
            <input class="in1" type="date" required>
            <br>

            <div class="section-title">Nombre del Equipo Local</div>
            <input type="text" required>

            <div class="section-title">Marcador</div>
            <input type="number" required>

            <div class="section-title">Nombre del Equipo Visitante</div>
            <input type="text" required>

            <button type="submit" class="save-button">Guardar</button>
        </form>

        <div class="circle-wrapper">
            <div class="circle"></div>
        </div>
    </div>
</body>
</html>
