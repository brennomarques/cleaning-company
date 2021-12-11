@extends('simple.simple')
@section('content')
    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Listar de Funcionários</h1>
    </div>
    <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Função</th>
                <th scope="col">Ver</th>
            </thead>
            @foreach ($employees as $item)
                <tbody>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->role}}</td>
                    <td class="ml-5"><a href="{{route('searchEmployee', $item->id)}}" class="btn btn-primary" title="Ver detalhes"><i class="fa fa-eye"></i></a></td>

                </tbody>
            @endforeach
        </table>
    </div>
@endsection
