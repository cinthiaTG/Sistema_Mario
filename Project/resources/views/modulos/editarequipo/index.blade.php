<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipo</title>
    <link rel="stylesheet" href="{{ asset('css/editarequipo.css') }}">
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
        <h1 class="form-title">Editar Equipo</h1>
        <div class="results-section">
            <br>
            <table class="results-table">
                <thead>
                    <tr>
                        <th>Nombre del Equipo</th>
                        <th>Logo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->nombre }}</td>
                        <td>
                            <img src="{{ asset('storage/logos/' . $equipo->logo) }}" alt="Logo del equipo" class="team-logo">
                        </td>
                        <td>
                            <a href="{{ route('equipos.edit', $equipo->id) }}">
                                <button class="edit-button">Editar</button>
                            </a>
                            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="quit-button">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
