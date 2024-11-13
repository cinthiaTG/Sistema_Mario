<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipo</title>
    <link rel="stylesheet" href="{{ asset('css/editarjugador.css') }}">
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
        <h1 class="form-title">Editar Jugador</h1>
        <div class="results-section">
            <br>
            <table class="results-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Ubicacion</th>
                        {{-- <th>Puntos</th>
                        <th>Asistencias</th>
                        <th>Tarjetas Amarillas</th>
                        <th>Tarjetas Rojas</th>
                        <th>Faltas</th> --}}
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($instalaciones as $instalacion)
                    <tr>
                        <td>{{ $instalacion->nombre_instalacion }}</td>
                        <td>{{ $instalacion->ubicacion }}</td>
                        {{-- <td>{{ $jugador->puntos }}</td>
                        <td>{{ $jugador->asistencias }}</td>
                        <td>{{ $jugador->tarjetas_amarillas }}</td>
                        <td>{{ $jugador->tarjetas_rojas }}</td>
                        <td>{{ $jugador->faltas }}</td> --}}
                        {{-- <td>
                            <a href="{{ route('instalaciones.edit', $instalacion->id) }}"><button class="edit-button">Editar</button></a>
                            <form action="{{ route('instalaciones.destroy', $instalacion->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="quit-button">Eliminar</button>
                            </form>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
