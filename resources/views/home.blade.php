@extends('layouts.app')
@section('content')
<div class="pull-right">
    <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        </body>
        <form action="{{ url('/ciclo')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            {{csrf_field()}}
            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <img src="\theme\images\isotipo-slogan.png" float="left" height="120" width="300">
            <h1 align="center">Registrar Tiempos</h1>
            <h3 align="center">  BIENVENIDO {{ Auth::user()->name }}</h3>
        </center>
            <div class="row">
                &nbsp;&nbsp;&nbsp;
                <script type="text/javascript">
                    function HoraActual(hora, minuto, segundo){
                        segundo = segundo + 1;
                        if(segundo == 60) {
                            minuto = minuto + 1;
                            segundo = 0;
                            if(minuto == 60) {
                                minuto = 0;
                                hora = hora + 1;
                                if(hora == 24) {
                                    hora = 0;
                                }
                            }
                        }
                        if(hora < 10) hora = '0' + hora;
                        if(minuto < 10) minuto = '0' + minuto;
                        if(segundo < 10) segundo = '0' + segundo;
                        HoraCompleta= hora + ":" + minuto + ":" + segundo;
                        document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
                        setTimeout("HoraActual("+hora+", "+minuto+", "+segundo+")", 1000);
                }
                </script>
                <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Mi??rcoles","Jueves","Viernes","S??bado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
                &nbsp;&nbsp;&nbsp;
                <body input style="font-size: 20px" type = "time" onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)" >
                <div id="contenedor_reloj"></div>
                &nbsp;&nbsp;&nbsp;
                <link rel="shortcut icon" href="" >
                </body>
            </div>
                <div class="row">
<input type="hidden"  id="hoy"  name="hoy" value="{{ $hoy }}">
<input type="hidden"  id="hora"  name="hora" value="{{ $hora}}">
<input type="hidden"  id="ago"  name="ago" value="{{ $ago}}">
</div>

<div class="card-header">

    <p><button style="height: 155px" >Registrar Ingreso</button></p>
</div>
</form>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
  'Cada Mininuto Cuenta',
  'Registra todos los tiempos de tu jornada',
  'success'
)
</script>
@stop
<script src="{{asset('js/app.js')}}"></script>
</body>
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('js')
<script>
Swal.fire(
'REGISTRO DE TIEMPOS',
'Lista de registros',
'success'
)
</script>
@stop
@endsection


