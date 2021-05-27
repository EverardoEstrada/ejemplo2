<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<style>
</style>

</head>
<body>

<table class="table">

    <thead>
    <tr>
        <th>Descripcion</th>
        <th>Unidades</th>
        <th>Subtotal</th>
    </tr>
    </thead>
    <br>
    <tbody>
        @foreach($pedidos as $pedido)
            <tr>
                <td>{{$pedido->descripcion}}</td>
                <td>{{$pedido->unidades}}</td>
                <td>{{$pedido->subtotal}}</td>
            </tr>
        @endforeach    
    </tbody>

</table>
    
</body>
</html>