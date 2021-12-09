<h1>Listar de Funcionários</h1>
<br>
<hr>
    @foreach ($employees as $item)

        <li>ID: {{$item->id}} </li>
        <li>Nome: {{$item->name}} </li>
        <li>Função: {{$item->role}} </li>
        <br>
        <a href="{{route('search', $item->id)}}">Ver detalhes</a><br>
        <hr>

    @endforeach
