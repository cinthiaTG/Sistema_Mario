<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipo</title>
    <link rel="stylesheet" href="{{ asset('css/registrarresultado1.css') }}">
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
        <div class="results-section">
            <h2 class="section-title">Tabla de Posiciones</h2>
            <table class="results-table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Equipo Local</th>
                        <th>Marcador</th>
                        <th>Equipo Visitante</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Fecha 1</td>
                        <td>Equipo A</td>
                        <td>2 - 1</td>
                        <td>Equipo B</td>
                        <td><a href="{{ route('registrarresultadodos.index') }}"><button class="edit-button">Editar</button></a></td>
                    </tr>
                    <tr>
                        <td>Fecha 2</td>
                        <td>Equipo C</td>
                        <td>2 - 1</td>
                        <td>Equipo D</td>
                        <td><a href="{{ route('registrarresultadodos.index') }}"><button class="edit-button">Editar</button></a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

        <button type="button" class="save-button">Guardar</button>
    </div>
</body>
</html>
