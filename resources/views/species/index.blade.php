<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Especies</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
    <body>
        <h1>Especies</h1>
        <p>
            <a href="{{ route('species.create') }}">CREAR NUEVA ESPECIE</a>
        </p>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Común</th>
                    <th>Nombre científico</th>
                    <th>Faimlia</th>
                    <th>¿En peligro?</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($species as $species)
                    <tr>
                        <th>{{ $species->id }}</th>
                        <th>{{ $species->vulgar_name }}</th>
                        <th>{{ $species->scientific_name }}</th>
                        <th>{{ $species->family }}</th>
                        <!--Para darle valor a los booleans, se le indica con '? a:b', en donde a es el resultado de true
                        y b es el resultado de false-->
                        <th>{{ $species->on_danger ? 'Sí':'No'}}</th>
                        <th>
                            <a href="{{ route('species.show', ['species' => $species]) }}">
                                Ver
                            </a><br>
                            <a href="{{ route('species.edit', ['species' => $species]) }}">
                                Editar
                            </a>
                            <form method="POST" action="{{ route('species.delete', ['species' => $species]) }}">
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
