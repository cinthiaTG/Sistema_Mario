<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('Css/registrarequipo.css') }}">
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

        <form action="{{ route('registrarequipo.store') }}" method="POST">
            @csrf

            <label class="input-label" for="nombre_equipo">Nombre Equipo</label>
            <input type="text" id="nombre_equipo" name="nombre_equipo" class="input-box" required>

            <label class="input-label" for="escudo">Escudo </label>
            <input type="escudo" id="escudo" name="escudo" class="input-box" required>

            <label class="input-label" for="Deporte">Deportes</label>
                <select id="Deporte" name="deporte_id" class="input-box" required>
                    <option value="1">Futbol Americano</option>
                    <option value="2">Futbol Soccer</option>
                    <option value="3">Volleyball</option>
                    <option value="4">Basketball</option>
                </select>


            <button type="submit" class="btn btn-primary btn-block login-button">Register</button>
        </form>

    </div>
</body>
</html>
