<?php

namespace App\Http\Controllers;

use App\Mail\SendPost;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required',
            'apellido'=>'required',
            'email'=>'required'|'unique:personas,email', //unique, que sea unico en la persona. (un solo email)
            'celular'=>'required'|'unique:personas,celular'
        ]);


        $persona = persona::create([
            'nombre' => $request['nombre'],
            'apellido' =>  $request['apellido'],
            'email' =>  $request['emai1l'],
            'celular' =>  $request['celular'],
        ]);
        //Envio de mail
        $details = [
            'mensaje' => "El usuario". $request['nombre'] ."a sido registrado",
            'nombre' => $request['nombre'],
            'apellido' =>  $request['apellido'],
            'email' =>  $request['emai1l'],
            'celular' =>  $request['celular'],
        ];
        Mail::to('jeremiasoviedo01l@gmail.com')->send(new SendPost($details));
        
        
            return response()->json([
            'mensaje' => "Se agregó correctamente a la persona",
            'data' => $persona
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        //
    }
}
