<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipo</title>
    <link rel="stylesheet" href="{{ asset('Css/editarequipo.css') }}">
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
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Logo</th>
                        <th>Jugadores</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>198</td>
                        <td>Murcielagos</td>
                        <td>Img</td>
                        <td>12</td>
                        <td><a href="{{ route('editarequipodos.index') }}"><button class="edit-button">Editar</button></a>
                            <button class="quit-button">Eliminar</button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>