<!-- resources/views/jugadores/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Jugador</title>
</head>
<body>


<div class="container">
    <h1>Registrar Nuevo Jugador</h1>

    <form action="{{ route('jugadores.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido_paterno">Apellido Paterno:</label>
            <input type="text" id="apellido_paterno" name="apellido_paterno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido_materno">Apellido Materno:</label>
            <input type="text" id="apellido_materno" name="apellido_materno" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="posicion">Posición:</label>
            <input type="text" id="posicion" name="posicion" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="puntos">Puntos:</label>
            <input type="number" id="puntos" name="puntos" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="asistencias">Asistencias:</label>
            <input type="number" id="asistencias" name="asistencias" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tarjetas_rojas">Tarjetas Rojas:</label>
            <input type="number" id="tarjetas_rojas" name="tarjetas_rojas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tarjetas_amarillas">Tarjetas Amarillas:</label>
            <input type="number" id="tarjetas_amarillas" name="tarjetas_amarillas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="faltas">Faltas:</label>
            <input type="number" id="faltas" name="faltas" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Jugador</button>
    </form>
</div>

</body>
</html>
