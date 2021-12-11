@extends('simple.simple')
@section('content')
    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Quadro de horários</h1>
    </div>

    <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Dia</th>
                <th scope="col">Entrada</th>
                <th scope="col">Saída</th>
            </thead>
            @foreach ($shedules as $item)
                <tbody>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->day}}</td>

                    <td>{{$item->arrival}}</td>
                    <td>{{$item->leave}}</td>

                </tbody>
            @endforeach
        </table>
    </div>

@endsection
