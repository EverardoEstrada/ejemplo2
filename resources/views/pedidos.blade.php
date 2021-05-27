<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>


    <form action="/pedidos" method="POST">
        @csrf
        <input type="text" name="busqueda">
        <input type="submit">
    </form>

    <br><br><br>    
    <form action="/guardapedido" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="Descripcion" placeholder="Descripcion">
        <input type="number" name="Unidades" placeholder="Unidades">
        <input type="number" name="Subtotal" placeholder="Subtotal">
        <input type="submit" value="Enviar">
    </form>


    <div>
    @foreach($orders as $order)
        <p>{{$order->descripcion}} | {{$order->unidades}} | {{$order->subtotal}} | <a href="/actualiza/{{$order->id}}">Actualizar</a> 
        |<form action="/borra/{{$order->id}}" method="post">@csrf<input type="submit" value="Borrar"></form>
         </p>
    @endforeach
    </div>

    
    

    <form action="/reporte" method="POST">
        @csrf
        <input type="submit" value="Descargar PDF">
    </form>


    <script>



    </script>

</body>
</html>