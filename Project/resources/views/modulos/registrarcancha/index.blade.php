<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('Css/registrarcancha.css') }}">
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
        <h1 class="form-title">Registrar Cancha</h1>
        <br>
        <form class="team-form">
            
            <label for="name">Nombre</label>
            <input id="name" type="text" required>

            <label for="team-name">Ubicacion</label>
            <input id="team-name" type="text" required>

            <label for="sport">Deporte</label>
            <select name="deporte" id="sport-name">
                <option value="1">Fútbol</option>
                <option value="2">Fútbol Americano</option>
                <option value="3">Voleibol</option>
                <option value="4">Basquetbol</option>
            </select>

            <button type="submit" class="save-button">Guardar</button>
        </form>
    </div>
</body>
</html>
