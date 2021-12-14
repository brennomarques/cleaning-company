@extends('simple.simple')
@section('content')
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

    @if($errors->any())
        <div class="alert alert-danger d-flex justify-content-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    Todos os campos são obrigatórios
                    {{-- @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach --}}
                </div>
            </div>
    @endif

    <div class="d-flex justify-content-center mt-5" style="color: #013d52;">
        <h1>Criar novo documento</h1>
    </div>

    <div class="container mt-5 ">

        <form action="{{route('createDoc')}}" method="post" class="row g-3 shadow-sm p-3 mb-5 bg-body rounded">

            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="col-md-5">
                <label class="form-label">Titulo do documento</label>
                <input type="text" name="title" class="form-control" value="{{ old("title") }}" placeholder="Informa um titulo">
            </div>

            <div class="col-md-4">
                <label class="form-label">Tamanho do documento</label>
                <input type="text" name="document_size" class="form-control" value="{{ old("document_size") }}" placeholder="exe. 2 MB">
            </div>

            <div class="col-md-3">
                <label class="form-label">Número de assinatura</label>
                <input type="number" name="subscription_number" class="form-control" value="{{ old("subscription_number") }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Assinatura do responsável</label>
                <input type="text" name="responsible_signature" class="form-control" value="{{ old("responsible_signature") }}">
            </div>

            <div class="col-md-4">
                <label class="form-label">Número de páginas</label>
                <input type="text" name="number_pages" class="form-control" value="{{ old("number_pages") }}">
            </div>

            <div class="col-12 d-flex justify-content-end mt-5">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>

@endsection
