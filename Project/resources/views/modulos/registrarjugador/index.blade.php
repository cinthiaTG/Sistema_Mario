<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Administrador</title>
    <link rel="stylesheet" href="{{ asset('Css/registrarjugadores.css') }}">
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
        <div class="form-title">Registrar Jugador</div>
        <form class="player-form" action="{{ route('registrarjugador.store') }}" method="POST">
            @csrf
            <label>Nombre Completo</label>
            <input type="text" name="nombre" required>

            <label>Apellido Paterno</label>
            <input type="text" name="apellido_paterno" required>

            <label>Apellido Materno</label>
            <input type="text" name="apellido_materno" required>

            <label>Edad</label>
            <input type="number" name="edad" required>

            <label class="input-label" for="Deporte">Deportes</label>
                <select id="Deporte" name="deporte_id" class="input-box" required>
                    <option value="1">Futbol Americano</option>
                    <option value="2">Futbol Soccer</option>
                    <option value="3">Volleyball</option>
                    <option value="4">Basketball</option>
                </select>

            <label>Posicion</label>
            <input type="text" name="posicion" required>

            <div class="section-title">Estadísticas</div>
            <label>Puntos</label>
            <input type="number" name="puntos" required>

            <label>Asistencias</label>
            <input type="number" name="asistencias" required>

            <label>Tarjetas Rojas</label>
            <input type="number" name="tarjetas_rojas" required>

            <label>Tarjetas Amarillas</label>
            <input type="number" name="tarjetas_amarillas" required>



            <label>Faltas</label>
            <input type="number" name="faltas" required>

            {{-- crear algo que permite elija el deporte  y en base a eso elegir la posicion,
             por consecuente  el deporte tendra los datos predispuestos en la tabla como roles --}}

            <button type="submit" class="save-button">Guardar</button>
        </form>


        <div class="circle-wrapper">
            <div class="circle"></div>
        </div>
    </div>
</body>
</html>
