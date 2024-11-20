<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipo</title>
    <link rel="stylesheet" href="{{ asset('Css/historialtorneo.css') }}">
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
        <h1 class="form-title">Historial de Torneos</h1>
        <div class="results-section">
            <br>
            <table class="results-table">
                <thead>
                    <tr>
                        <th>Nombre del Torneo</th>
                        <th>Fecha</th>
                        <th>Ubicación</th>
                        <th>Estado</th> 
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                        <th>Nombre del Torneo</th>
                        <th>19/11/2024</th>
                        <th>Universidad Politecnica de Victoria</th>
                        <th>En proceso</th>
                        <th>
                            <button class="edit-button">Editar</button>
                            <button class="quit-button">Eliminar</button>
                            <button class="ver-button">Ver</button>
                        </th>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
