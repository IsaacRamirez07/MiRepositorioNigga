<html>
<body>
<h1>"Que hay de nuevo viejo"</h1>
<p>
    @foreach($peliculas as $pelis)
          {{$pelis->Nombre}} 
          {{$pelis->Genero}} 
          {{$pelis->Duracion}} 
          <br>
    @endforeach
</p>
</body>
</html>