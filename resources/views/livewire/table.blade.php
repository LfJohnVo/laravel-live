<h2>Listado de posts</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Contenido</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>
                    <button class="btn blue">
                        Editar
                    </button>
                </td>
                <td>
                    <button class="btn red">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}
