@extends('principal.app')

@section('content')
<h1>Acerca de</h1>

@if(isset($algo))
    <div>
        <h2>esto solo aparece si algo se puso</h2>
    </div> 
@endif

@foreach($registros as $registro)

    <div>
        <h1>{{$registro->descripcion}}</h1>
            <p>{{$registro->unidades}}</p>
    </div>
    <br>
@endforeach



@endsection


@section('scripts')
<script>
    $('#1').addClass('activo');
</script>
@endsection