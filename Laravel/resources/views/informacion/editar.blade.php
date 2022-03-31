<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <section class="form-register">
        <form action="/informacion/actualizar/{{$cual}}" method="post">
            @method('put')
            @csrf
            <h3><center><input type = "text" placeholder="Marca de la Laptop" name="marca" value="{{$seleccionado['marca']}}"><br><br>
            <input type = "text" placeholder="Modelo" name="modelo" value="{{$seleccionado['modelo']}}"><br><br>
            <input type = "text" placeholder="Procesador" name="procesador" value="{{$seleccionado['procesador']}}"><br><br>
            <input type = "text" placeholder="RAM" name="ram" value="{{$seleccionado['ram']}}"><br><br>
            <input type = "submit" class = "submit" value="GUARDAR"></center></h3>
        </form>
    </section>    
</body>
</html>