<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Especies Editar</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
    <body>
        <h1>EDITAR ESPECIE</h1>
        <form method="POST" action="{{ route('species.update', ['species' => $species]) }}">
            @csrf
            {{ method_field('PUT') }}
            Nombre común:<br>
            <input type="text" name="species[vulgar_name]" value="{{ $species->vulgar_name }}">
            <br>
            Nombre científico:<br>
            <input type="text" name="species[scientific_name]" value="{{ $species->scientific_name }}">
            <br>
            Familia:<br>
            <input type="text" name="species[family]" value="{{ $species->family }}">
            <br>
            ¿En peligro?:<br>
            <input type="text" name="species[on_danger]" value="{{ $species->on_danger }}">
            <br><br>

            <input type="submit" value="Editar">
        </form>
    </body>
</html>
