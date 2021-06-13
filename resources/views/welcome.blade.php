<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">

<form action="tags" method="post">
    @csrf
    @method('POST')
    <input type="text" name="name" >
    <button type="submit">Agregar</button>
</form>
<hr>
<h4>Listado de Etiquetas</h4>
<table>
    @forelse($tags as $tag)
        <tr>
            <td>{{ $tag->name }}</td>
            <td>
                <form action="tags/{{ $tag->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td>No hay etiquetas</td>
        </tr>
    @endforelse
</table>
</body>
</html>
