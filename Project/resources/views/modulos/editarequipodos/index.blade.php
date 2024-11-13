<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/editarequipodos.css') }}">
</head>
<body>
    <br>
    <div class="sidebar">
        <a href="{{ route('editarequipo.index') }}">
            <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
        </a>
        <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
        <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
        <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
        <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
    </div>

    <div class="container">
        <h1>Editar Equipo</h1>
        <br>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <!-- Formulario para editar el equipo -->
        <form class="player-form" action="{{ route('equipos.update', $equipo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Método PUT para actualización -->

            <div class="section-title">
                <label for="nombre">Nombre del Equipo</label>
                <input type="text" name="nombre_equipo" class="form-control" value="{{ $equipo->nombre_equipo }}" required>
            </div>

            <label for="escudo">Escudo del Equipo</label>
            <input type="file" id="escudo" name="escudo" accept="image/*" required style="display: none;">
            <label for="escudo" class="img-label">Seleccionar imagen</label>
            <br>

            <button type="submit" class="save-button">Guardar Cambios</button>
        </form>
    </div>
</body>
</html>
