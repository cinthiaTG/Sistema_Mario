<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Equipo</title>
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
        <h1>Registrar Equipo</h1>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form action="{{ route('registrarequipo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="nombre_equipo">Nombre del Equipo</label>
            <input type="text" id="nombre_equipo" name="nombre_equipo" required>

            <label for="escudo">Escudo del Equipo</label>
            <input type="file" id="escudo" name="escudo" accept="image/*" required>

            <label for="deporte_id">Deporte</label>
            <select id="deporte_id" name="deporte_id" required>
                <option value="1">Futbol Americano</option>
                <option value="2">Futbol Soccer</option>
                <option value="3">Volleyball</option>
                <option value="4">Basketball</option>
            </select>

            <button type="submit" class="save-button">Guardar</button>
        </form>
    </div>
</body>
</html>
