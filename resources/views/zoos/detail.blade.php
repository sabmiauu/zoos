<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zoológicos</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
    <h1>{{ $zoo->name }}</h1>
    <p>Ciudad: {{ $zoo->city }}</p>
    <p>País: {{ $zoo->country }}</p>
    <p>Tamaño: {{ $zoo->size }}m2</p>
    <p>Presupuesto Anual: ${{ $zoo->budget }}</p>
    <a href="{{ route('zoos.index') }}">Regresar</a>
</body>
</html>
