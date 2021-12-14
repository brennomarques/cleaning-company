@extends('simple.simple')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
            <h1>Detalhes do Documento</h1>
        </div>
        <div class="container mt-5 shadow-sm p-3 mb-5 bg-body rounded">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Tamanho documento</th>
                        <th scope="col">Número de assinatura</th>
                        <th scope="col">Resposanvel assinatura</th>
                        <th scope="col">Números de paginas</th>
                        <th scope="col">Data da Criação</th>
                        <th scope="col">Ação</th>

                </thead>

                    <tbody>
                        <th scope="row">{{$doc['id']}}</th>
                        <td>{{$doc['title']}}</td>
                        <td>{{$doc['document_size']}}</td>
                        <td>{{$doc['subscription_number']}}</td>
                        <td>{{$doc['responsible_signature']}}</td>
                        <td>{{$doc['number_pages']}}</td>
                        <td>{{$doc['created_at']}}</td>

                        <td>
                            <form action="{{route('deleteDoc' , $doc->id)}}" method="post">
                                <input type="hidden" name="_method" value="delete">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tbody>

            </table>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <a href="{{route('document')}}" class="btn btn-outline-primary btn-lg" title="Voltar">Voltar</a>
            </div>

        </div>
    </div>

@endsection
