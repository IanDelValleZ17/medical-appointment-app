<x-admin-layout title="Roles" :breadcrumbs="[
    ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
    ['name' => 'Roles'],
]">
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.roles.create') }}"
            class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
            Crear rol
        </a>
    </div>

    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b text-gray-600">
                    <tr>
                        <th class="py-2">Nombre</th>
                        <th class="py-2">Protegido</th>
                        <th class="py-2 text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr class="border-b">
                            <td class="py-2">{{ $role->name }}</td>
                            <td class="py-2">
                                @if ($role->is_system)
                                    <span class="text-xs font-semibold text-gray-700">Sí</span>
                                @else
                                    <span class="text-xs text-gray-500">No</span>
                                @endif
                            </td>
                            <td class="py-2">
                                <div class="flex justify-end gap-2">
                                    @if (! $role->is_system)
                                        <a class="text-blue-600 hover:underline"
                                            href="{{ route('admin.roles.edit', $role) }}">
                                            Editar
                                        </a>
                                        <form class="delete-form" action="{{ route('admin.roles.destroy', $role) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:underline">
                                                Eliminar
                                            </button>
                                        </form>
                                    @else
                                        <span class="text-gray-400">—</span>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>

