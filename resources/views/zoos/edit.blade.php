<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Editar</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
    <body>
        <h1>EDITAR ZOOLÓGICO</h1>
        <!-- -->
        <form method="POST" action="{{ route('zoos.update', ['zoo' => $zoo]) }}">
            @csrf
            <!--Este método es el que nos permitirá hacerla actualización (get es obtener y post es guardar)-->
            {{ method_field('PUT') }}
            Nombre:<br>
            <!--En value se pone el atributo del elemento para que el input muestre la información como placeholder-->
            <input type="text" name="zoo[name]" value="{{ $zoo->name }}">
            <br>
            Ciudad:<br>
            <input type="text" name="zoo[city]" value="{{ $zoo->city }}">
            <br>
            País:<br>
            <input type="text" name="zoo[country]" value="{{ $zoo->country }}">
            <br>
            Tamaño:<br>
            <input type="text" name="zoo[size]" value="{{ $zoo->size }}">
            <br>
            Presupuesto anual:<br>
            <input type="text" name="zoo[budget]" value="{{ $zoo->budget }}">
            <br><br>

            <input type="submit" value="Crear">
        </form>
    </body>
</html>
