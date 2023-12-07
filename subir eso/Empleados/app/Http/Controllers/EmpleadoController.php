<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //varaible que me permite ingresar a la base de datos para consultar infrmacion
        $datos['empleados']=Empleado::paginate();
        return view('layouts.index', $datos);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('layouts.create');
    }

    /**
     * aqui se resive la infrmacion, la prepara  la guarda 
     */
    public function store(Request $request)
    {
        //
        $datosEmpleado = $request->except('_token');

        Empleado::insert($datosEmpleado);

        //  return response()->json($datosEmpleado);
         return redirect('layouts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view('layouts.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $datosEmpleado = $request->except('_token','_method');
       
       Empleado::where('id','=', $id)->update($datosEmpleado);
        
       $empleado=Empleado::findOrFail($id);
       return view('layouts.edit',compact('empleado'),);
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Empleado::destroy($id);
        return redirect('layouts');
    }
}
