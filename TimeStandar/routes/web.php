<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\JhonatanPermission\Models\Role;
use App\JhonatanPermission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Auth::routes();

    Route::get('/test', function () {

    $user =User::find(2);

    //$user->roles()->sync([2]);
    Gate::authorize('haveaccess','role.show');
    return $user;
    //return $user->havePermission('role.create');
    });

    Route::resource('/role', 'RoleController')->names('role');
    Route::resource('/user', 'UserController', ['except'=>[
        'create','store']])->names('user');

    // Route::resource('Registro',          RegistroController::class);
    Route::resource('salida',            SalidaController::class);
    Route::resource('ciclo',             CicloController::class);
    Route::resource('ciclosalida',       CicloSalidaController::class);
    Route::resource('ciclobreakin',      CicloBreakinController::class);
    Route::resource('ciclobreakout',     CicloBreakOutController::class);
    Route::resource('ciclobano',         CiclobanoController::class);
    Route::resource('ciclobanoout',      CiclobanooutController::class);
    Route::resource('ciclocalamidad',    CicloCalamidadController::class);
    Route::resource('ciclocalamidadout', CicloCalamidadOutController::class);
    Route::resource('ciclolunch',        CicloLunchController::class);
    Route::resource('ciclolunchout',     CicloLunchOutController::class);
    Route::resource('ciclocapa',         CicloCapaController::class);
    Route::resource('ciclocapout',       CicloCapOutController::class);
    Route::resource('cicloEmeMedica',    CicloEmeMedicaController::class);
    Route::resource('cicloEmeMedicaout', CicloEmeMedicaoutController::class);
    Route::resource('ciclopausas',       CicloPausasController::class);
    Route::resource('ciclopausasout',    CicloPausaOutController::class);
    Route::resource('cicloaveria',       CicloAveriaController::class);
    Route::resource('cicloaveriaout',    CicloAveriaOutController::class);
    Route::resource('cicloeva',          CicloEvaController::class);
    Route::resource('cicloevaout',       CicloEvaOutController::class);
    Route::resource('cicloretro',        CicloRetroController::class);
    Route::resource('cicloretroout',     CicloRetroOutController::class);
    Route::resource('cicloreunion',      CicloReunionController::class);
    Route::resource('cicloreunionout',   CicloReunionOutController::class);
    Route::resource('historico',         HistoricoController::class);
    Route::resource('personalgeneral',   PersonalActivoController::class);

    Route::get('ciclo-list-excel', 'PersonalActivoController@exportExcel')->name('ciclo.excel');
    Route::get('/searchpersonalgeneral','PersonalActivoController@searchpersonalgeneral');
    Route::get('/searchfecha','HistoricoController@searchfecha');
    Route::get('/searchname','HistoricoController@searchname');
    Route::get('/searchcedula','HistoricoController@searchcedula');
    Route::get('/searchentre','HistoricoController@searchentre');

    Route::get('/searchusers','UserController@searchusers');




