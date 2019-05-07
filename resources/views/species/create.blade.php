<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Especies Crear</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
    <h1>CREAR NUEVA ESPECIE</h1>
    <form method="POST" action="{{ route('species.store') }}">
        @csrf
        Nombre común:<br>
        <input type="text" name="species[vulgar_name]" value="">
        <br>
        Nombre científico:<br>
        <input type="text" name="species[scientific_name]" value="">
        <br>
        Familia:<br>
        <input type="text" name="species[family]" value="">
        <br>
        ¿En peligro?:<br>
        <input type="text" name="species[on_danger]" value="">
        <br><br>

        <input type="submit" value="Crear">
    </form>
</body>
</html>
