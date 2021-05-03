<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    
    <form action="/guardapedido" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="Descripcion" placeholder="Descripcion">
        <input type="number" name="Unidades" placeholder="Unidades">
        <input type="number" name="Subtotal" placeholder="Subtotal">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>


    <div>
    @foreach($orders as $order)
        <p>{{$order->descripcion}} | {{$order->unidades}} | {{$order->subtotal}} | <a href="/actualiza/{{$order->id}}">Actualizar</a> 
        <img src="/storage/{{$order->imagen}}" alt="" width="150px">|
        <form action="/borra/{{$order->id}}" method="post">@csrf<input type="submit" value="Borrar"></form>
         </p>
    @endforeach
    </div>

    <div>
    <h2>Pedidos mayores a $500 pesos</h2>
    @foreach($pedidos2 as $order)
        <p>{{$order->descripcion}} | {{$order->unidades}} | {{$order->subtotal}}</p>
    @endforeach
    
    </div>

    <h2>Pedidos eliminados</h2>
    @foreach($pedidos3 as $order)
        <p>{{$order->descripcion}} | {{$order->unidades}} | {{$order->subtotal}}</p>
    @endforeach
    

</body>
</html>