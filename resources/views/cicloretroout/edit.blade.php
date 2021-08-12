@extends('adminlte::page')
@section('content')
<link rel="stylesheet" href="css/simplyCountdown.theme.default.css"/>
<script src="\js\simplyCountdown.min.js"></script>
<script src="\js\countdown.js"></script>
<div class="pull-right">
    <div class="col-md-12">
        <div class="card" style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
        </body>

<style>

    .botones{
        border-radius: 0.75rem;
        width: 16rem;
        background-color: #51abba;
        border: #36738c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight: bold;
        align-content: center;


}
.botones:hover{
    background-color: #36738c;
    color:#ebf2f3;
    border: #51abba;

}
.botonesinactivos{
    border-radius: 0.75rem;
    width: 16rem;
    background-color: #d8e3e6;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

.botonpeque{

    border-radius: 0.75rem;
    width: 7rem;
    background-color: #51abba;
    border: #36738c;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    font-weight: bold;

    }

.botonpeque:hover{
        background-color: #36738c;
        color:#ebf2f3;
        border: #51abba;

    }

    .botonpequeinactivo{

        border-radius: 0.75rem;
        width: 6.5rem;
        background-color: #d8e3e6;
        border: #36738c;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
.card-boton{

    background-color: transparent;

}
.card-bodyNew{
    border: #060707 3px solid;
    border-radius:0.75rem;
    background-image: linear-gradient(#EAF2F8, #AAB7B8)
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
 }
.card-bodyNew:hover{
    background-image: linear-gradient(#53a7b0, #AAB7B8);
 }
 .card-bodyNew1{
    border: #060707 3px solid;
    border-radius:0.75rem;
    background-image: linear-gradient(#596164, #154762)
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
 }
 img:hover {
    transform: scaleX(-1);
  }
.imglogo{
    float: center;
    height: 40;
    width: 140;
  }
  .input-small{
width: 30px;
background-color: transparent;
border: none;
  }
  a{
      font-size: 18px;
      color: #2965fd;
      -webkit-text-stroke: 0.7px rgb(0, 0, 0);

  }
  p{
    text-align: left;
}
.datos{
    text-align: right;
}
e{
    text-align: right;
    margin-top: 2em;
    margin-left: 5em;
}
</style>


            <center style="background-image: linear-gradient(#EAF2F8, #AAB7B8);">
            <img src="\theme\images\isotipo-slogan.png" float="left" height="40" width="140">
            <h3 style="font-family: Georgia, Verdana, sans-serif; font-weight: bold; text-transform: uppercase;">{{ Auth::user()->name }}</h3>
            <h1 style="font-weight: bold; text-aline:center;">ESTAS EN RETRO ALIMENTACION</h1>

        </center>
        <div class="row">
        <div class="card" style="background-color: transparent; width:100%" >
                <center>  <body input type ="time" style="font-size: 20px;  border-radius:0.75rem;" onload="HoraActual(<?php echo date("H").", ".date("i").", ".date("s"); ?>)" >

                    <link rel="shortcut icon" href="">
            <div style=" margin-left:0;">
                <script>
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                    var f=new Date();
                    document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                </script>
            </div>

                </body>
            </div>
            </div>


            {{--  @foreach ($ciclosos as $ciclosos)
            <div><input type="text" id= "ingreso" name="ingreso" value=" {{$ciclosos->ingreso}}"></div>

            @endforeach  --}}
            <div><input type="hidden" name= "ingreso" id="ingreso" value="{{ old('ingreso', $ciclosos->ingreso)}}"></div>
    </body>
        <div id="cuenta"></div>



        <div class="row">
            <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Turno</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="\theme\images\turno.png" alt="" style="width: 140px; heigth:120px; margen-left: 23rem;">
                            </div>
                            <div class="col-sm-6">
                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio: </b><e class="tiemp-text"> {{ old('ingreso', $ciclosos->ingreso)}} </e></small></p>
                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><e  class="tiemp-text">{{ old('salida', $ciclosos->salida)}}</e> </small></p>
                        <p class="card-text reloj-text"><small class="text-muted2"><b>Conexión:</b>  {{ old('total', $ciclosos->total)}}<b>minutos</b></small></p>

                    </div>
                    </div>
                    </div>
                    </div>
                    </div>



                    <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Break</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="\theme\images\cafe.png" alt="" style="width: 140px; heigth:130px; margen-left: 23rem;">
                            </div>
                            <div class="col-sm-6">
                          <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio: </b><e  class="tiemp-text"> {{ old('breakin', $ciclosos->breakin)}} </e></small></p>
                          <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><e  class="tiemp-text">{{ old('breakout', $ciclosos->breakout)}}</e> </small></p>
                          <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo de Break: </b> {{ old('timebreak', $ciclosos->timebreak)}} <b>minutos</b></small></p>
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>


                      <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Almuerzo</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <br>
                                <img src="\theme\images\cubiertos.png" alt="" style="width: 140px; heigth:130px; margen-left: 23rem;">
                            </div>

                            <div class="col-sm-6">
                          <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e  class="tiemp-text"> {{ old('almuerzo', $ciclosos->almuerzo)}} </e></small></p>
                          <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e  class="tiemp-text">{{ old('almuerzoout', $ciclosos->almuerzoout)}}</e> </small></p>
                          <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo de Almuerzo:</b>  {{ old('timelunch', $ciclosos->timelunch)}} <b>minutos</b></small></p>
                        </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>



                      <div class="row">
            <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Capacitación</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <br>
                                <img src="\theme\images\capacitacion.png" alt="" style="width: 100px; heigth:90px; margen-left: 23rem;">
                                <br>
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e  class="tiemp-text"> {{ old('capacitacion', $ciclosos->capacitacion)}} </e></small></p>
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e  class="tiemp-text">{{ old('capout', $ciclosos->capout)}}</e> </small></p>


                                <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo de Capacitación:</b> {{ old('timecap', $ciclosos->timecap)}} </small></p>

                            </div>
                        </div>
                        </div>
                        </div>
                  </div>




                  <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Pausas Activas</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <br>
                                <img src="\theme\images\pausas.png" style="width: 100px; heigth:80px; margen-left: 23rem;">
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e  class="tiemp-text"> {{ old('pausas', $ciclosos->pausas)}} </e></small></p>
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e  class="tiemp-text">{{ old('pausasout', $ciclosos->pausasout)}}</e> </small></p>


                            <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo de Pausas Activas:</b>  {{ old('timepausas', $ciclosos->timepausas)}} </small></p>
                        </div>
                    </div>
                </div>
                  </div>
                  </div>



                  <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Daño Tecnico</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <br>
                                <img src="\theme\images\dañado.png" style="width: 100px; heigth:90px; margen-left: 23rem;">
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e  class="tiemp-text"> {{ old('baño', $ciclosos->daño)}} </e></small></p>
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e  class="tiemp-text">{{ old('dañoout', $ciclosos->dañoout)}}</e> </small></p>


                                <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo de Daño de Equipo:</b> {{ old('timedaño', $ciclosos->timedaño)}} </small></p>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>



                    <div class="row">
            <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Evaluación</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="\theme\images\evalluaciones.png" alt="" style="width: 100px; heigth:90px; margen-left: 23rem;">
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e  class="tiemp-text"> {{ old('evaluacion', $ciclosos->evaluacion)}} </e></small></p>
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e  class="tiemp-text">{{ old('evaluacionout', $ciclosos->evaluacionout)}}</e> </small></p>


                                <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo de evaluacion:</b>  {{ old('timeeva', $ciclosos->timeeva)}} </small></p>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>


                  <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Retro</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="\theme\images\retroa.png" alt="" style="width: 100px; heigth:90px; margen-left: 23rem;">
                            </div>
                            <div class="col-sm-6">
                            <div id="contenedor_reloj" style="width: 150px; height:50px ; font-size:20px; font-family: Lucida Console, Courier New , monospace; text-align:center; margin-left:-40;"></div>
                                      <form action="{{url('/cicloretroout/'.$ciclosos->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    {{csrf_field()}}
                                    @method('PATCH')
                                    <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e class="tiemp-text"> {{ old('retro', $ciclosos->retro)}} </e></small></p>
                                    <div><input type="hidden" id="hoy" name"hoy" value="{{ $hoy }}"> </div>
                                    <div><input type="hidden" id="hora" name"hora" value="{{ $hora }}"> </div>
                                   <div><input type="hidden" id= "nombre" name="nombre" value=" {{$user_nombre}}"></div>
                                    <div><input type="hidden" id= "cedula" name="cedula" value=" {{$user_cedula}}"></div>
                                    <div><input type="hidden" id= "retroout" name="retroout" value=" {{$hora}}"></div>
                                    <input type="hidden" id="timeretro" name="timeretro" value="{{ $timeretro}}">
                                <input type='submit' class="botones prueba-btn btn2-prue" value='Fin'>
                            </form>
                               </div>
                        </div>
                    </div>
                    </div>
                    </div>

                    <script type="text/javascript">
                        setTimeout(function(){
                        location.reload("contenedor_reloj");
                        }, 5000);
                    </script>

                     <!--BOTON ALMUERZO-->
                  <style>
                      .prueba-btn{
                          width: 150px;
                      }

                      .reloj-text{
                          width: 190px;
                          margin-left:-20px;
                          padding:0px;
                      }
                      .tiemp-text{
                        margin-left:10px;
                      }
                      .btn2-prue{
                          margin:4px;
                      }

                  </style>



                    <div class="col-sm-4 style_card">
                <div class="card-space style_card">
                    <div class="card-bodyNew1 style_card">
                        <strong>
                            <p class="card-text" style="color:rgb(0, 0, 0)">Reunión</p>
                        </strong>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="\theme\images\REUNION.png" alt="" style="width: 100px; heigth:90px; margen-left: 23rem;">
                            </div>
                            <div class="col-sm-6">
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e  class="tiemp-text"> {{ old('reunion', $ciclosos->reunion)}} </e></small></p>
                                <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e  class="tiemp-text">{{ old('reunionout', $ciclosos->reunionout)}}</e> </small></p>


                                <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo de Reunion:</b></b>  {{ old('timereunion', $ciclosos->timereunion)}} </small></p>
                            </div>
                        </div>
                    </div>
                  </div>
                  </div>
                  </div>



                  <div class="row">
                    <div class="col-sm-4 style_card">
                        <div class="card-space style_card">
                            <div class="card-bodyNew1 style_card">
                                <strong>
                                    <p class="card-text" style="color:rgb(0, 0, 0)">Baño</p>
                                </strong>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img src="\theme\images\baño.png" alt="" style="width: 130px; heigth:120px; margen-left: 23rem;">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e class="tiemp-text"> {{ old('bano', $ciclosos->bano)}} </e></small></p>
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e class="tiemp-text">{{ old('banoout', $ciclosos->banoout)}}</e> </small></p>
                                        @if (empty($ciclosos->banoout))
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo: </b><rem class="tiemp-text"> 0 </rem></small></p>
                                        @else
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo: </b><rem class="tiemp-text"> {{ $timebano }}</rem></small></p>
                                        @endif


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 style_card">
                        <div class="card-space style_card">
                            <div class="card-bodyNew1 style_card">
                                <strong>
                                    <p class="card-text" style="color:rgb(0, 0, 0)">Calamidad Domestica</p>
                                </strong>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <br>
                                        <img src="\theme\images\calamidad.png" alt="" style="width: 120px; heigth:250px; margen-left: 23rem;">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e class="tiemp-text"> {{ old('calamidad', $ciclosos->calamidad)}} </e></small></p>
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e class="tiemp-text">{{ old('calamidadout', $ciclosos->calamidadout)}}</e> </small></p>

                                        @if (empty($ciclosos->calamidadout))
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo: </b><rem class="tiemp-text"> 0 </rem></small></p>
                                        @else
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo: </b><rem class="tiemp-text"> {{ $timecalamidad }}</rem></small></p>
                                        @endif


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 style_card">
                        <div class="card-space style_card">
                            <div class="card-bodyNew1 style_card">
                                <strong>
                                    <p class="card-text" style="color:rgb(0, 0, 0)">Emergencia Médica</p>
                                </strong>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <br>
                                        <img src="\theme\images\emergencia medica.png" alt="" style="width: 100px; heigth:160px; margen-left: 23rem;">
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Inicio:</b><e class="tiemp-text"> {{ old('EmeMedica', $ciclosos->EmeMedica)}} </e></small></p>
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Fin:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><e class="tiemp-text">{{ old('EmeMedicaout', $ciclosos->EmeMedicaout)}}</e> </small></p>
                                        @if (empty($ciclosos->EmeMedicaout))
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo: </b><rem>0</rem></small></p>
                                        @else
                                        <p class="card-text reloj-text"><small class="text-muted2"><b>Tiempo: </b><rem> {{ $timeEmeMedica }} </rem></small></p>
                                        @endif


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
    <br>
    <p style="text-align: center; aline-contents: center;"><i class="fa fa-copyright" aria-hidden="true">Todos los Derechos Reservados, Elaborado para Mentius S.A. Colombia 2021</i></p>
</div>
</div>
@endsection


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
<script src="{{asset('js/app.js')}}"></script>
              </body>
              @section('css')
              <link rel="stylesheet" href="/css/admin_custom.css">
              @stop
              @section('js')
      <script>
      Swal.fire(
        'UNA VEZ TERMINE LA RETROALIMENTACION REGISTRA EL FIN DEL PROCESO',
        'AL DAR CLICK EN EL BOTON FIN, CONCLUIRA ESTA INSTANCIA',
        'success'
      )
      </script>
      @stop



<style>
    .reloj-text{
    width: 190px;
    margin-left:-20px;
    padding:0px;
    }
    .tiemp-text{
    margin-left:10px;
    }
    .btn2-prue{
    margin:4px;
    }
    .style_card{
    width:100%;
    height:235px;
    margin-bottom:5px;
    }
</style>
