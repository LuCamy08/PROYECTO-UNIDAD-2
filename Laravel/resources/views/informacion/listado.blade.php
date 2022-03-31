<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/style_mostrar.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concentración</title>
</head>
<body>
    @foreach ($informacion as $information)
    <a href="informacion/mostrar/{{$loop->index}}">
    <input class= "botons" type = "submit" value="MOSTRAR"></center></h3>
    
    </a>   

    <a href="informacion/editar/{{$loop->index}}">
    <input class= "botons1" type = "submit" value="EDITAR"></center></h3>
    </a>

    <form action="informacion/borrar/{{$loop->index}}" method="post">
        @csrf
        @method('Delete')
    <input class="botons2" type="submit" value="BORRAR"></b>
    </form>    
    @dump($information)
@endforeach    

<a href="/informacion/registrar"><input class="botons3" type="submit" value="CREAR NUEVO REGISTRO"></a>

</body>
</html>