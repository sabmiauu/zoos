<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zoológicos</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
    <h1>Zoológicos</h1>
    <p>
        <a href="{{ route('zoos.create') }}">CREAR NUEVO ZOO</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Tamaño</th>
                <th>Presupuesto anual</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zoos as $zoo)
                <tr>
                    <th>
                        <a href="{{ route('zoos.show', ['zoo' => $zoo]) }}">
                            {{ $zoo->id }}
                        </a>
                    </th>
                    <th>{{ $zoo->name }}</th>
                    <th>{{ $zoo->city }}</th>
                    <th>{{ $zoo->country }}</th>
                    <th>{{ $zoo->size }} m2</th>
                    <th>$ {{ $zoo->budget }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
    <ul>
        <!--Para cada elemento (foreach) zoo de la clase zoos hacer una lista con su nombre-->
        <!--@foreach($zoos as $zoo)
            <li>{{ $zoo->name }}</li>
        @endforeach-->
    </ul>
</body>
</html>
