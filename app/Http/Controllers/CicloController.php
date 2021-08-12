<?php

namespace App\Http\Controllers;

use App\Ciclo;
use App\Http\Requests\CicloRequest;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CicloController extends Controller
{


    public function __construct()
    {
        Carbon::setLocale('co');
        date_default_timezone_set('America/Bogota');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $today= Carbon::now()->format('Y-m-d');
        $fecha= Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::orderBy('fecha', 'desc')->where('nombre','=', $user_nombre)->where('fecha','=', $fecha)->paginate(10);


        //return back();
        return view ('ciclo.index',compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));
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
    public function store(CicloRequest $request, Ciclo $ciclosos)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $request->validate([
            'llave'          => ['required|unique:ciclos,llave'],
        ]);
        $ciclosos = new Ciclo();
        $ciclosos->nombre            = $user_nombre;
        $ciclosos->cedula            = $user_cedula;
        $ciclosos->fecha             = $hoy;
        $ciclosos->ingreso           = $hora;
        $ciclosos->salida            = $request->salida;
        $ciclosos->breakin           = $request->breakin;
        $ciclosos->breakout          = $request->breakout;
        $ciclosos->almuerzo          = $request->almuerzo;
        $ciclosos->almuerzoout       = $request->almuerzoout;
        $ciclosos->capacitacion      = $request->capacitacion;
        $ciclosos->pausas            = $request->pausas;
        $ciclosos->daño              = $request->daño;
        $ciclosos->evaluacion        = $request->evaluacion;
        $ciclosos->retro             = $request->retro;
        $ciclosos->reunion           = $request->reunion;
        $ciclosos->bano              = $request->bano;
        $ciclosos->banoout           = $request->banoout;
        $ciclosos->calamidad         = $request->calamidad;
        $ciclosos->calamidadout      = $request->calamidadout;
        $ciclosos->EmeMedica         = $request->EmeMedica;
        $ciclosos->EmeMedicaout      = $request->EmeMedicaout;
        $ciclosos->total             = $request->total;
        $ciclosos->llave             = $llave;


        $ciclosos->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function show(Ciclo $ciclo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::findOrFail($id);
        $fecha = Carbon::now()->format('Y-m-d');

        return view('ciclosalida.edit' ,compact('ciclosos','hoy','hora','llave','user_nombre','user_cedula','fecha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciclo $ciclo)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciclo  $ciclo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciclo $ciclo)
    {
        //
    }
}
