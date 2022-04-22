<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Ubicacion;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $activos =  Activo::all() 
        $activos = DB::table('activos') -> join('ubicaciones' , 'activos.ubicacion_id' , '=' , 'ubicaciones.id')
        ->select('*' )
        ->get();
        return Inertia::render('Activo/Mostrar' ,[   
            'activos' => $activos,
           
            
            
            ]) ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Activo/FormCrear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigo_activo' => 'required',
            'modelo_equipo' => 'required',
            'cantidad_activo' => 'required',
            'direccion_ip' => 'required',
            'ubicacion_id' => 'required',
            'tipo_activo' => 'required',

    
        ]);

        Activo::create($request->all());
        return Redirect::route('activos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function show(Activo $activo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function edit(Activo $activo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activo $activo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activo  $activo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activo $activo)
    {
        //
    }
}
