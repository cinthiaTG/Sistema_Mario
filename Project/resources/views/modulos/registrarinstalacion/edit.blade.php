<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('css/editarcanchados.css') }}">
</head>
<body>
    <br>
    <div class="sidebar">
        <a href="{{ route('registrarinstalacion.read') }}">
            <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
        </a>
        <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
        <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
        <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
        <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
    </div>

    <div class="container">
        <h1>Editar Cancha</h1>
        <br>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <!-- Formulario para editar el equipo -->
        <form class="player-form" action="{{ route('registrarinstalacion.update', $instalacion->id) }}" method="POST" enctype="multipart/form-data">
           @csrf
          @method('PUT') <!-- Método PUT para actualización -->

          <div class="section-title">
                <label for="nombre">Nombre de instalacion</label>
                <input type="text" name="nombre_instalacion" class="form-control" value="{{ $instalacion->nombre_instalacion }}" required>
         </div>

            <div class="section-title">
                <label for="nombre">Ubicacion</label>
                <input type="text" name="ubicacion" class="form-control" value="{{ $instalacion->ubicacion }}" required>
            </div>


            <button type="submit" class="actualizar">Actualizar</button>
        </form>
    </div>    

</body>
</html>
