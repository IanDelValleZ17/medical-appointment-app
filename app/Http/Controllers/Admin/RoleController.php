<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
        return view('admin.roles.edit', compact($role));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //validar los datos
        $request->validate([
            'name' => 'required|unique:roles,name,' 
        ]);
        
        //Confirmación de operación exitosa
session()->flash('swal', [
    'icon' => 'success',
    'title' => 'Rol creado correctamente',
    'text' => 'El rol ha sido creado correctamente'
]);

//Redireccionará a la tabla principal
return redirect('admin.roles.index')->with('success', 'Role created successfully.');
        //redireccionar a la pagina de roles
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
