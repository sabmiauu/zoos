<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Animales Crear</title>
  <meta name="description" content="">
  <meta name="author" content="">
</head>
    <body>
        <h1>CREAR NUEVO ANIMAL</h1>
        <!--La ruta "zoos.store" le indica la ruta que seguirá para guardar la información-->
        <!--"POST" es el método por el cuál se va a guardar la información-->
        <form method="POST" action="{{ route('animals.store') }}">
            @csrf
            Número de identificación:<br>
            <input type="text" name="animal[id_number]" value="">
            <br>
            Género:<br>
            <input type="text" name="animal[genre]" value="">
            <br>
            Año de nacimiento:<br>
            <input type="text" name="animal[birth_year]" value="">
            <br>
            País:<br>
            <input type="text" name="animal[country]" value="">
            <br>
            Continente:<br>
            <input type="text" name="animal[continent]" value="">
            <br><br>
            Especie<br>
            <select name="animal[species_id]">
                <option>Elije una especie</option>
                @foreach($species as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->vulgar_name }}
                    </option>
                @endforeach
            </select>
            <input type="submit" value="Crear">
        </form>
    </body>
</html>
