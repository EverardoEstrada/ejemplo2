<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        function realizaProceso(valorCaja1, valorCaja2){
                var parametros = {
                        "v1" : valorCaja1,
                        "v2" : valorCaja2,
                        "_token" : $('input[name="_token"]').val()
                };
                $.ajax({
                        data:  parametros,
                        url:   '/procesa',
                        type:  'post',
                        beforeSend: function () {
                                $("#resultado").html("Procesando, espere por favor...");
                        },
                        success:  function (response) {
                                $("#resultado").html(response);
                        }
                });
        }
        </script>
         
        </head>
         
        <body>
         
        Introduce valor 1
         
        <input type="text" name="caja_texto" id="valor1" value="0"/> 
         
        @csrf 
        Introduce valor 2
         
        <input type="text" name="caja_texto" id="valor2" value="0"/>
         
        Realiza suma
         
        <input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>
         
        <br/>
         
        Resultado: <span id="resultado">0</span>
         
        </body>
         
        </html>