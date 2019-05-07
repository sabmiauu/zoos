<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zoológicos</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
    <body>
        <h1>Especies</h1>
        <p>
            <a href="">CREAR NUEVA ESPECIE</a>
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
                        <th>
                            <a href="">
                                {{ $species->id }}
                            </a>
                        </th>
                        <th>{{ $species->vulgar_name }}</th>
                        <th>{{ $species->scientific_name }}</th>
                        <th>{{ $species->family }}</th>
                        <th>{{ $species->on_danger }}</th>
                        <th>
                            <a href="">
                                Editar
                            </a>
                            <form method="" action="">
                                @csrf
                                <!--{{ method_field('DELETE') }}-->
                                <input type="submit" value="Eliminar">
                            </form>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>
