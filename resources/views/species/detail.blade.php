<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Especies Detalle</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
    <h1>{{ $species->vulgar_name }}</h1>
    <p>Nombre científico: {{ $species->scientific_name }}</p>
    <p>Familia: {{ $species->family }}</p>
    <p>¿En peligro?: {{ $species->on_danger ? 'Sí':'No' }}</p>
    <a href="{{ route('species.index') }}">Regresar</a>
</body>
</html>
