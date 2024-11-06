<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/registrarequipo.css') }}">
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
        <h1 class="form-title">Registrar Equipo</h1>
        
        <form class="team-form">
            <label for="team-logo">Subir escudo del equipo</label>
            <input id="team-logo" type="file" accept="image/*">

            <label for="team-name">Nombre del equipo</label>
            <input id="team-name" type="text" required>

            <label for="sport">Deporte</label>
            <input id="sport" type="text" required>

            <label for="coach">Entrenador</label>
            <input id="coach" type="text" required>

            <label for="roster">Plantilla</label>
            <input id="roster" type="text" required>

            <div class="field-section">
                <div class="field-image">
                    <img class="field-placeholder" src="{{ asset('img/campo.png') }}" alt="Campo">
                </div>
                
                <div class="player-list">
                    <h2 class="section-title">Jugadores</h2>
                    <button type="button" class="add-player-button">+</button>
                    
                    <ul class="players">
                        <li><input type="text" placeholder="Jugador 1" required></li>
                        <li><input type="text" placeholder="Jugador 2" required></li>
                        <li><input type="text" placeholder="Jugador 3" required></li>
                    </ul>
                </div>
            </div>

            <button type="submit" class="save-button">Guardar</button>
        </form>
    </div>
</body>
</html>
