<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<body>
    <h1>Lista itens</h1>
    @foreach($itens as $item)
        <li> ID : {{$item['id']}} </li> 
        <li> Item : {{$item['item']}}</li>

        <br>
            <a href="{{route('items.exibir', $item['id'])}}">Ver detalhes </a> 
        <br>
        <br>
    @endforeach
</body>
</html>