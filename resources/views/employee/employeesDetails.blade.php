@extends('simple.simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do Funcionário</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Função</th>
                    <th scope="col">Salario</th>
                    <th scope="col">Tempo de contrato</th>
                    <th scope="col">Criado em</th>
                    <th scope="col">Atualizado em</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$employee['id']}}</th>
                        <td>{{$employee['name']}}</td>
                        <td>{{$employee['role']}}</td>
                        <td>{{$employee['payment']}}</td>
                        <td>{{$employee['contract_time']}}</td>
                        <td>{{$employee['created_at']}}</td>
                        <td>{{$employee['updated_at']}}</td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('employee')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>
@endsection
