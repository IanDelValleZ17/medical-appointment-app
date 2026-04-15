<x-admin-layout title="Roles" :breadcrumbs="[
    ['name' => 'Dashboard', 'href' => route('admin.dashboard')],
    ['name' => 'Roles', 'href' => route('admin.roles.index')],
    ['name' => 'Crear'],
]">
    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <x-validation-errors class="mb-4" />

        <form action="{{ route('admin.roles.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="mb-2 block text-sm font-medium text-gray-700">Nombre</label>
                <input name="name" value="{{ old('name') }}" placeholder="Nombre del rol"
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
        'name' => 'Crear',
    ],
]">
    <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm">
        <form action="{{ route('admin.roles.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="mb-2 block text-sm font-medium text-gray-700">Nombre</label>
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:gap-6">
                    <input id="name" name="name" value="{{ old('name') }}" placeholder="Nombre del rol"
                        class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
                        required>

                    <button type="submit"
                        class="inline-flex w-full shrink-0 items-center justify-center rounded-lg bg-blue-600 px-6 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">
                        Guardar
                    </button>
                </div>
                <x-input-error for="name" class="mt-2" />
            </div>
        </form>
    </div>
</x-admin-layout>