<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item exibir</title>
</head>
<body>
    <h1>Detalhes do item</h1>
    <li>Item: {{$item['item']}}</li>
    <li>Quantidade: {{$item['quantidade']}}</li>
    <li>Marca: {{$item['marca']}}</li> 
    <li>Garantia: {{$item['garantia']}}</li> 
    <br>
        Quantidade aproximada de uso por dia durante um período de 20 dias :  {{$item['quantidade']/20}}
    <br><br>
        <a href="{{route('items.index')}}">Voltar</a>
    <br>
           
</body>
</html>