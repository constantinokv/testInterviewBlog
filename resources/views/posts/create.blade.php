<!DOCTYPE html>
<html>
<head>
   
    <title>Alta de Entradas</title>
 

</head>
<body>

<h2>Alta de Entradas</h2>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form method="post" action="{{ route('posts.store') }}">
    @csrf

  
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required><br>

    <label for="autor">Autor:</label>
    <input type="text" name="autor" required><br>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" required><br>

    <label for="contenido">Contenido:</label><br>
    <textarea name="contenido" required  style="width: 30%; height: 100px;"></textarea><br>

    <button type="submit">Guardar Entrada</button>
</form>

</body>
</html>