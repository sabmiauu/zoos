<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Modificar especies</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
<body>
    <h1>{{ $zoo->name }}</h1>
    Vamos a modificar las especies de este zoo

    <form method="POST" action="{{ route('zoos.species.update', ['zoo' => $zoo]) }}">
    @csrf
    {{  method_field('PUT') }}
        <ul>
            @foreach($species as $item)
            <li>
                <!--Hay que indicarle al name que es un arreglo, y darle el valor de la variable de
                    ese tipo de objetos que queremos que nos regrese-->
                <input type="checkbox" name ="species[]" value="{{ $item->id }}">
                {{ $item->vulgar_name }}
            </li>
            @endforeach
        </ul>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
