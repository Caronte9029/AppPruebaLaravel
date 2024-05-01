<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form control</title>
</head>
<body>
    <h1>Ingresa tus datos</h1>
    <form action="{{url('/formInsert')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <label for="Id">ID</label>
        <input type="text" name="Id" id="Id" value="">
        <label for="Nombre">Nombre</label>
         <input type="text" name="Nombre" id="Nombre" value="">
         <label for="Productora">Productora</label>
         <input type="text" name="Productora" id="Productora" value="">
        
        <input type="submit" value="Agregar">
    </form>


</body>
</html>