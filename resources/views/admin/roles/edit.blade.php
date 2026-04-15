<x-admin-layout title="Roles" :breadcrumbs="[
    ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
    ['name' => 'Roles', 'href' => route('admin.roles.index')],
    ['name' => 'Editar'],
]">
    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <x-validation-errors class="mb-4" />

        <form action="{{ route('admin.roles.update', $role) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label class="mb-2 block text-sm font-medium text-gray-700">Nombre</label>
                <input name="name" value="{{ old('name', $role->name) }}" placeholder="Nombre del rol"
                    class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                    required>
                <x-input-error for="name" class="mt-2" />
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="inline-flex items-center justify-center rounded-lg bg-blue-600 px-8 py-2 text-sm font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</x-admin-layout>

<x-admin-layout title="Roles" :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',
        'href' => route('admin.roles.index'),
    ],
    [
        'name' => 'Editar',
    ],
]">

    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
        <form action="{{ route('admin.roles.update', $role) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="mb-1 block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name', $role->name) }}"
                    placeholder="Nombre del rol"
                    class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white sm:text-sm"
                    required>
                <x-input-error for="name" class="mt-2" />
            </div>

            <div class="flex flex-wrap items-center justify-end gap-3 border-t border-gray-100 pt-4 dark:border-gray-700">
                <a href="{{ route('admin.roles.index') }}"
                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-200">
                    Cancelar
                </a>
                <button type="submit"
                    class="inline-flex items-center gap-2 rounded-lg bg-blue-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <i class="fa-solid fa-check"></i>
                    Actualizar y guardar
                </button>
            </div>
        </form>
    </div>

</x-admin-layout>
