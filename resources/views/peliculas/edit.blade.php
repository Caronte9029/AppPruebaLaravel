<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form control</title>
</head>
<body>
    <h1>Peliculas</h1>
    <ul>
        @foreach ($peliculas as $pelicula)
            <li>{{$pelicula->nombre}} {{$pelicula->productora}}</li>
        @endforeach
    </ul>

</body>
</html>