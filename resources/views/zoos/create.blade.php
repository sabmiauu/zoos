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
    <form method="POST" action="{{ route('zoos.store') }}">
        @csrf
        Nombre:<br>
        <input type="text" name="name" value="">
        <br>
        Ciudad:<br>
        <input type="text" name="city" value="">
        <br>
        País:<br>
        <input type="text" name="country" value="">
        <br>
        Tamaño:<br>
        <input type="text" name="size" value="">
        <br>
        Presupuesto anual:<br>
        <input type="text" name="budget" value="">
        <br><br>

        <input type="submit" value="Crear">
    </form>
</body>
</html>
