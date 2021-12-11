@extends('simple.simple')
@section('content')
    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Lista Items</h1>
    </div>

    <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
        <table class="table">
            <thead>
                <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ver</th>
            </thead>
            @foreach ($itens as $item)
                <tbody>
                    <th>{{$item->id}}</th>
                    <td >{{$item->item}}</td>
                    <td class="ml-5"><a href="{{route('searchItems', $item['id'])}}" class="btn btn-primary" title="Ver detalhes"><i class="fa fa-eye"></i></a></td>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection
