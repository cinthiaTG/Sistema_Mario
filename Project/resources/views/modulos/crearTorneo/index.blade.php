<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Torneo</title>
    <link rel="stylesheet" href="{{ asset('css/creartorneo.css') }}"> 
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <a href="{{ route('dashboard.index') }}"> 
                <img class="icon0" src="{{ asset('img/iB.png') }}" alt="more">
            </a>            
            <img class="icon1" src="{{ asset('img/more.png') }}" alt="more">
            <img class="icon2" src="{{ asset('img/cup.png') }}" alt="cup">
            <img class="icon3" src="{{ asset('img/player.png') }}" alt="player">
            <img class="icon4" src="{{ asset('img/search.png') }}" alt="search">
        </div>

        <div class="form-title">Crear Torneo</div>
        <form class="tournament-form">
            <label>Subir Logotipo</label>
            <input type="file" class="file-input">

            <label>Nombre del torneo</label>
            <input type="text">

            <label>Categoría</label>
            <input type="text">

            <label>Tipo de Torneo</label>
            <input type="text">

            <label>Deporte</label>
            <input type="text">

            <div class="section-title">Patrocinadores</div>
            <label>Nombre del patrocinador</label>
            <input type="text">

            <label>Monto del patrocinador</label>
            <input type="text">

            <div class="section-title">Precios</div>
            <label>Costo del Torneo</label>
            <input type="text">

            <label>Costo de Inscripción</label>
            <input type="text">

            <div class="section-title">Equipos</div>
            <label>Equipos a jugar</label>
            <input type="text">

            <div class="section-title">Fechas</div>
            <label>Fecha inicial del Torneo</label>
            <input type="date">

            <label>Hora</label>
            <input type="time">

            <div class="section-title">Ubicación</div>
            <label>Estado</label>
            <input type="text">

            <label>Ciudad</label>
            <input type="text">

            <button type="submit" class="save-button">Guardar</button>
        </form>

        <div class="circle-wrapper">
            <div class="circle"></div>
        </div>
    </div>
</body>
</html>
