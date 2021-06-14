<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-300 py-10">
<div class="max-w-lg bg-white mx-auto rounded-xl p-4 shadow">
    @if($errors->any())
        <ul class="list-none bg-red-100 text-red-500 p-4 mb-4 rounded-lg">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="tags" method="post" class="flex mb-4">
        @csrf
        @method('POST')
        <input type="text" name="name" class="rounded-l-lg bg-gray-200 w-full px-4 py-2 outline-none" placeholder="Agregar etiqueta">
        <button type="submit" class="rounded-r-lg bg-blue-500 text-white px-4 py-2 outline-none ">Agregar</button>
    </form>
    <h4 class="text-lg font-bold text-center mb-4">Listado de Etiquetas</h4>
    <table>
        @forelse($tags as $tag)
            <tr>
                <td class="w-1/2 px-4 py-2 border">{{ $tag->name }}</td>
                <td class="w-1/2 px-4 py-2 border">{{ $tag->slug }}</td>
                <td>
                    <form action="tags/{{ $tag->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 outline-none rounded-lg">Eliminar</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>No hay etiquetas</td>
            </tr>
        @endforelse
    </table>
</div>
</body>
</html>
