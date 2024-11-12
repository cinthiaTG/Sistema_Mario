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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Jugadores</th>
                        <th>Edad</th>
                        <th>Posición</th>
                        <th>ID_Deporte</th>
                        <th>ID_Equipo</th>
                        <th>Puntos</th>
                        <th>Asistencias</th>
                        <th>Tarjetas Amarillas</th>
                        <th>Faltas</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>198</td>
                        <td>Juan Daniel</td>
                        <td>Guerrero</td>
                        <td>Guerrero</td>
                        <td>19</td>
                        <td>Delantero</td>
                        <td>288</td>
                        <td>399</td>
                        <td>15</td>
                        <td>24</td>
                        <td>2</td>
                        <td>4</td>

                        <td><a href="{{ route('editarjugadordos.index') }}"><button class="edit-button">Editar</button></a>
                            <button class="quit-button">Eliminar</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
