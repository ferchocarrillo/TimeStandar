<?php

namespace App\Http\Controllers;

use App\CicloEva;
use Illuminate\Http\Request;
use App\CicloSalida;
use Carbon\carbon;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class CicloEvaController extends Controller
{
      /**

     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        Carbon::setlocale('co');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos=Ciclo::findOrFail($id);

        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->diffInMinutes($date1);
        $tiempoB = $carbon1->diffInMinutes($date2);
        $timebreak = ($tiempoB - $tiempoA);
        $timebreak = number_format($timebreak,1,'.',',');

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInHours($date3);
        $tiempoD = $carbon1->floatDiffInHours($date4);
        $timelunch = ($tiempoD - $tiempoC);
        $timelunch = number_format($timelunch,2,'.',',');

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timecapa = ($tiempoF - $tiempoE);
        $timecapa = number_format($timecapa,1,'.',',');

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->diffInMinutes($date7);
        $tiempoH = $carbon1->diffInMinutes($date8);
        $timepausas = ($tiempoH - $tiempoG);
        $timepausas = number_format($timepausas,1,'.',',');

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->diffInMinutes($date9);
        $tiempoJ = $carbon1->diffInMinutes($date10);
        $timedaño = ($tiempoJ - $tiempoI);
        $timedaño = number_format($timedaño,1,'.',',');

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaluacionout;
        $tiempoK = $carbon1->diffInMinutes($date11);
        $tiempoL = $carbon1->diffInMinutes($date12);
        $timeeva = ($tiempoL - $tiempoK);
        $timeeva = number_format($timeeva,1,'.',',');

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->diffInMinutes($date15);
        $tiempoP = $carbon1->diffInMinutes($date16);
        $timereunion = ($tiempoP - $tiempoO);
        $timereunion = number_format($timereunion,1,'.',',');

        $date17 = $ciclosos->calamidad;
        $date18 = $ciclosos->calamidadout;
        $tiempoQ = $carbon1->diffInMinutes($date17);
        $tiempoR = $carbon1->diffInMinutes($date18);
        $timecalamidad = ($tiempoR - $tiempoQ);
        $timecalamidad = number_format($timecalamidad,1,'.',',');

        $date19 = $ciclosos->EmeMedica;
        $date20 = $ciclosos->EmeMedicaout;
        $tiempoV = $carbon1->diffInMinutes($date19);
        $tiempoW = $carbon1->diffInMinutes($date20);
        $timeEmeMedica = ($tiempoW - $tiempoV);
        $timeEmeMedica = number_format($timeEmeMedica,1,'.',',');

        $date21 = $ciclosos->bano;
        $date22 = $ciclosos->banoout;
        $tiempoX = $carbon1->diffInMinutes($date21);
        $tiempoY = $carbon1->diffInMinutes($date22);
        $timebano = ($tiempoY - $tiempoX);
        $timebano = number_format($timebano,1,'.',',');

        $ingreso =$ciclosos->ingreso;
        $salida  =$ciclosos->salida;
        $timeluch = $ciclosos->timelunch;
        $ingresoA = $carbon1->diffInHours($ingreso);
        $salidaB = $carbon1->diffInHours($salida);
        $total = ($salidaB - $ingresoA)-$timeluch;
        $total = number_format($total,1,'.',',');

        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->evaluacion        = $hora;
        $ciclosos->llave             = $llave;

        $ciclosos->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CicloEva  $cicloEva
     * @return \Illuminate\Http\Response
     */
    public function show(CicloEva $cicloEva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CicloEva  $cicloEva
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
         $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos=Ciclo::findOrFail($id);

        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->diffInMinutes($date1);
        $tiempoB = $carbon1->diffInMinutes($date2);
        $timebreak = ($tiempoB - $tiempoA);
        $timebreak = number_format($timebreak,1,'.',',');

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInHours($date3);
        $tiempoD = $carbon1->floatDiffInHours($date4);
        $timelunch = ($tiempoD - $tiempoC);
        $timelunch = number_format($timelunch,2,'.',',');

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timecapa = ($tiempoF - $tiempoE);
        $timecapa = number_format($timecapa,1,'.',',');

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->diffInMinutes($date7);
        $tiempoH = $carbon1->diffInMinutes($date8);
        $timepausas = ($tiempoH - $tiempoG);
        $timepausas = number_format($timepausas,1,'.',',');

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->diffInMinutes($date9);
        $tiempoJ = $carbon1->diffInMinutes($date10);
        $timedaño = ($tiempoJ - $tiempoI);
        $timedaño = number_format($timedaño,1,'.',',');

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaluacionout;
        $tiempoK = $carbon1->diffInMinutes($date11);
        $tiempoL = $carbon1->diffInMinutes($date12);
        $timeeva = ($tiempoL - $tiempoK);
        $timeeva = number_format($timeeva,1,'.',',');

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->diffInMinutes($date15);
        $tiempoP = $carbon1->diffInMinutes($date16);
        $timereunion = ($tiempoP - $tiempoO);
        $timereunion = number_format($timereunion,1,'.',',');

        $date17 = $ciclosos->calamidad;
        $date18 = $ciclosos->calamidadout;
        $tiempoQ = $carbon1->diffInMinutes($date17);
        $tiempoR = $carbon1->diffInMinutes($date18);
        $timecalamidad = ($tiempoR - $tiempoQ);
        $timecalamidad = number_format($timecalamidad,1,'.',',');

        $date19 = $ciclosos->EmeMedica;
        $date20 = $ciclosos->EmeMedicaout;
        $tiempoV = $carbon1->diffInMinutes($date19);
        $tiempoW = $carbon1->diffInMinutes($date20);
        $timeEmeMedica = ($tiempoW - $tiempoV);
        $timeEmeMedica = number_format($timeEmeMedica,1,'.',',');

        $date21 = $ciclosos->bano;
        $date22 = $ciclosos->banoout;
        $tiempoX = $carbon1->diffInMinutes($date21);
        $tiempoY = $carbon1->diffInMinutes($date22);
        $timebano = ($tiempoY - $tiempoX);
        $timebano = number_format($timebano,1,'.',',');

        $ingreso =$ciclosos->ingreso;
        $salida  =$ciclosos->salida;
        $timeluch = $ciclosos->timelunch;
        $ingresoA = $carbon1->diffInHours($ingreso);
        $salidaB = $carbon1->diffInHours($salida);
        $total = ($salidaB - $ingresoA)-$timeluch;
        $total = number_format($total,1,'.',',');

        return view('cicloeva.edit' ,compact('total','ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','date9','date10','date11','date12','date13','date14','date15','date16','date17','date18','date19','date20','date21','date22','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timecapa','timepausas','timedaño','timeeva', 'timeretro','timereunion','timecalamidad','timeEmeMedica','timebano'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CicloEva  $cicloEva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        date_default_timezone_set('America/Bogota');
        Carbon::setLocale('co');
        Carbon::now();
        $hoy = Carbon::now();
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $carbon1 = new \Carbon\Carbon("2021-01-01 00:00:00");
        $ciclosos=Ciclo::findOrFail($id);

        $date1 = $ciclosos->breakin;
        $date2 = $ciclosos->breakout;
        $tiempoA = $carbon1->diffInMinutes($date1);
        $tiempoB = $carbon1->diffInMinutes($date2);
        $timebreak = ($tiempoB - $tiempoA);
        $timebreak = number_format($timebreak,1,'.',',');

        $date3 = $ciclosos->almuerzo;
        $date4 = $ciclosos->almuerzoout;
        $tiempoC = $carbon1->floatDiffInHours($date3);
        $tiempoD = $carbon1->floatDiffInHours($date4);
        $timelunch = ($tiempoD - $tiempoC);
        $timelunch = number_format($timelunch,2,'.',',');

        $date5 = $ciclosos->capacitacion;
        $date6 = $ciclosos->capout;
        $tiempoE = $carbon1->diffInMinutes($date5);
        $tiempoF = $carbon1->diffInMinutes($date6);
        $timecapa = ($tiempoF - $tiempoE);
        $timecapa = number_format($timecapa,1,'.',',');

        $date7 = $ciclosos->pausas;
        $date8 = $ciclosos->pausasout;
        $tiempoG = $carbon1->diffInMinutes($date7);
        $tiempoH = $carbon1->diffInMinutes($date8);
        $timepausas = ($tiempoH - $tiempoG);
        $timepausas = number_format($timepausas,1,'.',',');

        $date9 = $ciclosos->daño;
        $date10 = $ciclosos->dañoout;
        $tiempoI = $carbon1->diffInMinutes($date9);
        $tiempoJ = $carbon1->diffInMinutes($date10);
        $timedaño = ($tiempoJ - $tiempoI);
        $timedaño = number_format($timedaño,1,'.',',');

        $date11 = $ciclosos->evaluacion;
        $date12 = $ciclosos->evaluacionout;
        $tiempoK = $carbon1->diffInMinutes($date11);
        $tiempoL = $carbon1->diffInMinutes($date12);
        $timeeva = ($tiempoL - $tiempoK);
        $timeeva = number_format($timeeva,1,'.',',');

        $date13 = $ciclosos->retro;
        $date14 = $ciclosos->retroout;
        $tiempoM = $carbon1->diffInMinutes($date13);
        $tiempoN = $carbon1->diffInMinutes($date14);
        $timeretro = ($tiempoN - $tiempoM);
        $timeretro = number_format($timeretro,1,'.',',');

        $date15 = $ciclosos->reunion;
        $date16 = $ciclosos->reunionout;
        $tiempoO = $carbon1->diffInMinutes($date15);
        $tiempoP = $carbon1->diffInMinutes($date16);
        $timereunion = ($tiempoP - $tiempoO);
        $timereunion = number_format($timereunion,1,'.',',');

        $date17 = $ciclosos->calamidad;
        $date18 = $ciclosos->calamidadout;
        $tiempoQ = $carbon1->diffInMinutes($date17);
        $tiempoR = $carbon1->diffInMinutes($date18);
        $timecalamidad = ($tiempoR - $tiempoQ);
        $timecalamidad = number_format($timecalamidad,1,'.',',');

        $date19 = $ciclosos->EmeMedica;
        $date20 = $ciclosos->EmeMedicaout;
        $tiempoV = $carbon1->diffInMinutes($date19);
        $tiempoW = $carbon1->diffInMinutes($date20);
        $timeEmeMedica = ($tiempoW - $tiempoV);
        $timeEmeMedica = number_format($timeEmeMedica,1,'.',',');

        $date21 = $ciclosos->bano;
        $date22 = $ciclosos->banoout;
        $tiempoX = $carbon1->diffInMinutes($date21);
        $tiempoY = $carbon1->diffInMinutes($date22);
        $timebano = ($tiempoY - $tiempoX);
        $timebano = number_format($timebano,1,'.',',');

        $ingreso =$ciclosos->ingreso;
        $salida  =$ciclosos->salida;
        $timeluch = $ciclosos->timelunch;
        $ingresoA = $carbon1->diffInHours($ingreso);
        $salidaB = $carbon1->diffInHours($salida);
        $total = ($salidaB - $ingresoA)-$timeluch;
        $total = number_format($total,1,'.',',');

        $datosBreakin = request()->except(['_token','_method']);
        Ciclo::where('id','=',$id)->update($datosBreakin);
     //return response()->json($ciclo);
     return view('cicloevaout.edit', compact('total','ciclosos','date1','date2','date3','date4','date5','date6','date7','date8','date9','date10','date11','date12','date13','date14','date15','date16','date17','date18','date19','date20','date21','date22','hoy','hora','llave','user_nombre','user_cedula','timebreak','timelunch','timecapa','timepausas','timedaño','timeeva', 'timeretro','timereunion','timecalamidad','timeEmeMedica','timebano'));
     //return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CicloEva  $cicloEva
     * @return \Illuminate\Http\Response
     */
    public function destroy(CicloEva $cicloEva)
    {
        //
    }
}
