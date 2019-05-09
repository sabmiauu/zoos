<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zoológicos</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
    <h1>CREAR NUEVO ZOOLÓGICO</h1>
    <!--La ruta "zoos.store" le indica la ruta que seguirá para guardar la información-->
    <!--"POST" es el método por el cuál se va a guardar la información-->
    <form method="POST" action="{{ route('animals.store') }}">
        @csrf
        Nombre:<br>
        <!--En name se pone 'zoo[name]' para que ese dato se pueda guardar en un arreglo, y para que, si hay otros inputs similares,
        se pueda hacer la distinción que éste pertenece a la clase 'Zoo'-->
        <input type="text" name="zoo[name]" value="">
        <br>
        Ciudad:<br>
        <input type="text" name="zoo[city]" value="">
        <br>
        País:<br>
        <input type="text" name="zoo[country]" value="">
        <br>
        Tamaño:<br>
        <input type="text" name="zoo[size]" value="">
        <br>
        Presupuesto anual:<br>
        <input type="text" name="zoo[budget]" value="">
        <br><br>

        <input type="submit" value="Crear">
    </form>
</body>
</html>
