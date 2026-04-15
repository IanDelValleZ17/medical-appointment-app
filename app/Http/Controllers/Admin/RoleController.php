<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::query()->orderBy('name')->get();

        return view('admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('admin.roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name'],
        ]);

        Role::create([
            'name' => $validated['name'],
            'guard_name' => 'web',
            'is_system' => false,
        ]);

        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Rol creado',
            'text' => 'El rol se ha creado correctamente',
        ]);

        return redirect()->route('admin.roles.index');
    }

    public function edit(Role $role)
    {
        if ($role->is_system) {
            abort(403, 'No puedes editar roles protegidos');
        }

        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        if ($role->is_system) {
            abort(403, 'No puedes actualizar roles protegidos');
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:roles,name,' . $role->id],
        ]);

        $role->update($validated);

        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Rol actualizado',
            'text' => 'El rol se ha actualizado correctamente',
        ]);

        return redirect()->route('admin.roles.index');
    }

    public function destroy(Role $role)
    {
        if ($role->is_system) {
            abort(403, 'No puedes eliminar roles protegidos');
        }

        $role->delete();

        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Rol eliminado',
            'text' => 'El rol se ha eliminado correctamente',
        ]);

        return redirect()->route('admin.roles.index');
    }
}

