<h1>Detalhes do Funcionário</h1>
<br>
<hr>

    <li>ID: {{$employee['id']}} </li>
    <li>Nome: {{$employee['name']}} </li>
    <li>Função: {{$employee['role']}} </li>
    <li>Salario: {{$employee['payment']}} </li>
    <li>Tempo de contrato: {{$employee['contract_time']}} </li>
    <li>Criado em: {{$employee['created_at']}} </li>
    <li>Atualizado em: {{$employee['updated_at']}} </li>
    <br>
    <a href="{{route('getAll')}}">Voltar</a><br>

