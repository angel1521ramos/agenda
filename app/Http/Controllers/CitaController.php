<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cita;
use App\Http\Requests\Cita as CitaRequests;

class CitaController extends Controller
{
    protected $cita;
    public function __construct(Cita $cita){
        $this->cita = $cita;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$cita = Cita::all();
        //$cita = auth()->user()->user;
        $cita = Cita::where('user_id', auth()->id())->get();
        $longitud = sizeof($cita);
        
        if ($longitud == 0) {
            return view('error');
        }else{
            return view('cita.visualizar', compact('cita'));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('cita.añadir', compact('user'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CitaRequests $request)
    {
        $cita = $this->cita->create($request->all());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cita = Cita::find($id);
        $this->authorize('view', $cita);
        return view('cita.detalle', compact('cita'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $cita = Cita::find($id);
        $this->authorize('view', $cita);
        return view('cita.editar', compact('cita','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(CitaRequests $request, $id)
    {
        
        $cita = Cita::find($id);
        //$this->authorize('update', $cita);
        $cita->update($request->all());
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $this->authorize('delete', $cita);
        $cita->delete();
        return $this->index();
    }
}
