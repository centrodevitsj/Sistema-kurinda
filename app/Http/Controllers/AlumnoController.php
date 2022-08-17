<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $alumnos = Alumno::all();
        return view('alumnos.index')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->NumCtrl = $request->get('NumCtrl');
        $alumno->Nombre = $request->get('Nombre');
        $alumno->Primer_Ap = $request->get('Primer_Ap');
        $alumno->Segundo_Ap = $request->get('Segundo_Ap');
        $alumno->Edad = $request->get('Edad');
        $alumno->Semestre = $request->get('Semestre');
        $alumno->Carrera = $request->get('Carrera');

        $alumno->save();
        return redirect('/alumnos');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.edit')->with('alumno', $alumno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $alumno = Alumno::find($id);
        $alumno->NumCtrl = $request->get('NumCtrl');
        $alumno->Nombre = $request->get('Nombre');
        $alumno->Primer_Ap = $request->get('Primer_Ap');
        $alumno->Segundo_Ap = $request->get('Segundo_Ap');
        $alumno->Edad = $request->get('Edad');
        $alumno->Semestre = $request->get('Semestre');
        $alumno->Carrera = $request->get('Carrera');

        $alumno->save();
        return redirect('/alumnos');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return redirect('/alumnos');
    }
}
