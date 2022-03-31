<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/style.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <section class="form-register">
        <form action="/informacion/guardar" method="post">
            @csrf
            <h3><center><input type = "text" class="controls" placeholder="Marca de la Laptop" name="marca"><br><br>
            <input type = "text" class="controls" placeholder="Modelo" name="modelo" ><br><br>
            <input type = "text" class="controls" placeholder="Procesador" name="procesador" ><br><br>
            <input type = "text" class="controls" placeholder="RAM" name="ram"><br><br>
            <input class= "botons" type = "submit" value="GUARDAR"></center></h3>
        </form>
</section>    
</body>
</html>
