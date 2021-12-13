@extends('simple.simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do item</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Garantia</th>
                </thead>

                    <tbody>
                        <th scope="row">{{$item['id']}}</th>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['amount']}}</td>
                        <td>{{$item['brand']}}</td>
                        <td>{{$item['product_warranty']}}</td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('items')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>
@endsection
