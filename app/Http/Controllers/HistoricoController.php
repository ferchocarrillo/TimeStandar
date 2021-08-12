<?php

namespace App\Http\Controllers;

use App\Historico;
use App\Http\Requests\CicloRequest;
use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Ciclo;

class HistoricoController extends Controller
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
        $hora = Carbon::now()->format('H:i:s A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::orderBy('fecha', 'desc')->where('nombre','=', $user_nombre)->paginate(10);


        //return back();
       return view ('historico.index',compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function show(Historico $historico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function edit(Historico $historico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historico $historico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historico $historico)
    {
        //
    }
    public function searchfecha( Request $request)

    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $today= Carbon::now()->format('Y-m-d');
        $fecha= Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::all();
        $searchfecha = $request->get('searchfecha');
        $ciclosos = Ciclo::firstOrNew()->where('fecha', 'like', '%'.$searchfecha.'%')->paginate(30);
        return view('historico.index', ['historico' => $ciclosos],compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));
    }
    public function searchname( Request $request)

    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $today= Carbon::now()->format('Y-m-d');
        $fecha= Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::all();
        $searchname = $request->get('searchname');
        $ciclosos = Ciclo::firstOrNew()->where('nombre', 'like', '%'.$searchname.'%')->paginate(30);
        return view('historico.index', ['historico' => $ciclosos],compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));
    }

    public function searchcedula( Request $request)

    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $today= Carbon::now()->format('Y-m-d');
        $fecha= Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::all();
        $searchcedula = $request->get('searchcedula');
        $ciclosos = Ciclo::firstOrNew()->where('cedula', 'like', '%'.$searchcedula.'%')->paginate(30);
        return view('historico.index', ['historico' => $ciclosos],compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));
    }

    public function searchentre( Request $request)

    {
        $user_id = Auth::user()->cedula;
        $user_nombre = Auth::user()->name;
        $user_cedula = Auth::user()->cedula;
        $hoy = Carbon::now()->format('d-m-Y');
        $today= Carbon::now()->format('Y-m-d');
        $fecha= Carbon::now()->format('Y-m-d');
        $hora = Carbon::now()->format('H:i:s A');
        $llave = $user_cedula. $hoy;
        $ciclosos = Ciclo::all();
        $from1 = $request->get('searchfrom');
        $to1 = $request->get('searchto');
        $ciclosos = Ciclo::firstOrNew()->whereBetween('fecha', [$from1, $to1])->paginate(30);
        return view('historico.index', ['historico' => $ciclosos],compact('ciclosos','hoy','hora','user_id','user_nombre','user_cedula','llave','today','fecha'));
    }




}
