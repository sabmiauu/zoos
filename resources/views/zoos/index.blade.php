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
                <th>Acciones</th>
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
                    <th>
                        <a href="{{ route('zoos.edit', ['zoo' => $zoo]) }}">
                            Editar
                        </a>
                        <form method="POST" action="{{ route('zoos.delete', ['zoo' => $zoo]) }}">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Eliminar">
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
