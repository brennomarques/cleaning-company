<h1>Quadro de horários</h1>
<br>
<hr>
    @foreach ($shedules as $item)

        <li>ID: {{$item->id}} </li>
        <li>Nome: {{$item->name}} </li>
        <li>Dia: {{$item->day}} </li>
        <li>Entrada: {{$item->arrivel}} </li>
        <li>Saída: {{$item->leavel}} </li>

    @endforeach
