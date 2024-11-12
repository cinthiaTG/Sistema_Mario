<!-- resources/views/jugador/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h1>Lista de Jugadores</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('jugadores.create') }}" class="btn btn-primary mb-3">Crear Nuevo Jugador</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Posicion</th>
                <th>Puntos</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($jugadores as $jugador)  <!-- Cambia aquí a $jugadores -->
                <tr>
                    <td>{{ $jugador->id }}</td>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->posicion }}</td>
                    <td>{{ $jugador->puntos }}</td>
                    <td>
                        <a href="{{ route('jugadores.show', $jugador->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('jugadores.edit', $jugador->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este jugador?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
