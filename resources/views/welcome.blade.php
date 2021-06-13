<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">
<h4>Listado de Etiquetas</h4>
<table>
    @forelse($tags as $tag)
        <tr>
            <td>{{ $tag }}</td>
        </tr>
    @empty
        <tr>
            <td>No hay etiquetas</td>
        </tr>
    @endforelse
</table>
</body>
</html>
