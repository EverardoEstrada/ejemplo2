<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="/actualiza/{{$pedido->id}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="Descripcion" value="{{$pedido->descripcion}}" placeholder="Descripcion" >
        <input type="number" name="Unidades" value="{{$pedido->unidades}}" placeholder="Unidades">
        <input type="number" name="Subtotal" value="{{$pedido->subtotal}}" placeholder="Subtotal">
        <img src="/storage/imagenes/{{$pedido->imagen}}" alt="" width="150px">
        <input type="file" name="archivo">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>