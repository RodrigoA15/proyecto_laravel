<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Models\Tipo_id_comercial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::simplePaginate(10);

        return view('locales.index', compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = Tipo_id_comercial::all();
        return view('locales.create', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locales = new Local();
        $locales->razon_social = $request->razon_social;
        $locales->direccion = $request->direccion;
        $locales->telefono_fijo = $request->telefono_fijo;
        $locales->telefono_movil = $request->telefono_movil;
        $locales->correo_electronico = $request->correo_electronico;
        $locales->identificacion = $request->identificacion;
        $locales->id_tipo_id_comercials = $request->id_tipo_id_comercials;

        $locales->save();
        return  redirect()->route('locales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        //
    }
}
