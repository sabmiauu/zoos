<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Animales</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
    <h1>Animales</h1>
    <p>
        <a href="{{ route('animals.create') }}">CREAR NUEVO ZOO</a>
    </p>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Número de identificación</th>
                <th>Género</th>
                <th>Año de nacimiento</th>
                <th>País</th>
                <th>Continente</th>
                <th>Especie</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($animals as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <th>{{ $item->id_number }}</th>
                    <th>{{ $item->genre }}</th>
                    <th>{{ $item->birth_year }}</th>
                    <th>{{ $item->country }}</th>
                    <th>{{ $item->continent }}</th>
                    <th>{{ $item->species->vulgar_name }}</th>
                    <th>
                        <a href="">
                            Editar
                        </a>
                        <form method="" action="">
                            @csrf
                            <input type="submit" value="Eliminar">
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
