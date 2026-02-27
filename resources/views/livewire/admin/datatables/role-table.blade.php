<div class="p-4 bg-white rounded-lg shadow">
    <div class="mb-4">
        <h1 class="text-2xl font-bold text-gray-900">Roles</h1>
    </div>
    
    <x-livewire-tables::wrapper :component="$this">
        <x-livewire-tables::tools>
            <x-livewire-tables::search />
            <x-livewire-tables::columns-dropdown />
            <x-livewire-tables::per-page />
        </x-livewire-tables::tools>

        <x-livewire-tables::table />
    </x-livewire-tables::wrapper>
</div>
