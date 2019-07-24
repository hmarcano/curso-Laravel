<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba 2</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<main class="container">
    <h1>Pasar Datos a una Vista</h1>
    {{-- COMENTARIO --}}
    <p>Hola</p>

    <p>{{ $numero }}</p>
    <p>{{ $nombre }}</p>

    @if ($nombre == 'Jean')
        Welcome
    @else
        Get Out
    @endif

</main>
</body>
</html>
