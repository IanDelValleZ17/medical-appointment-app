<x-admin-layout title="Usuarios" :breadcrumbs="[
    ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
    ['name' => 'Usuarios'],
]">
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.users.create') }}"
            class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-700">
            Crear usuario
        </a>
    </div>

    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm">
                <thead class="border-b text-gray-600">
                    <tr>
                        <th class="py-2">Nombre</th>
                        <th class="py-2">Email</th>
                        <th class="py-2">Rol</th>
                        <th class="py-2 text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b">
                            <td class="py-2">{{ $user->name }}</td>
                            <td class="py-2">{{ $user->email }}</td>
                            <td class="py-2">{{ $user->roles->pluck('name')->first() ?? '—' }}</td>
                            <td class="py-2">
                                <div class="flex justify-end gap-2">
                                    <a class="text-blue-600 hover:underline"
                                        href="{{ route('admin.users.edit', $user) }}">
                                        Editar
                                    </a>
                                    <form class="delete-form" action="{{ route('admin.users.destroy', $user) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>

