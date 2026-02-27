@php
    $links = [
        [
            'name' => 'Dashboard',
            'icon' => 'fa-solid fa-gauge',
            'href' => route('admin.dashboard'),
            'active' => request()->routeIs('admin.dashboard'),
        ],
        [
            'header' => 'Gestión',
        ],
        [ 
            'name' => 'Roles y permisos',
            'icon' => 'fa-solid fa-shield-halved',
            'href' => route('admin.roles.index'),
            'active' => request()->routeIs('admin.roles.*'),
        ],
    ];
@endphp

<aside id="top-bar-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidebar">

    <div class="h-full px-3 pb-24 overflow-y-auto bg-white dark:bg-gray-800">
        {{-- Logo y Nombre en la parte superior --}}
        <div class="flex items-center px-3 py-4 border-b border-gray-200 dark:border-gray-700">
            <img src="{{ asset('img/medical-png-11554022243haf0jefa6u.png') }}" class="h-8 me-3" alt="Logo" />
            <span class="text-xl font-semibold text-gray-900 dark:text-white">Hospital Red</span>
        </div>

        <ul class="space-y-2 font-medium pt-4">
            @foreach ($links as $index => $link)
                <li>
                    @isset($link['header'])
                        <div class="px-2 py-2 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            {{ $link['header'] }}
                        </div>
                    @elseif(isset($link['submenu']))
                        <button type="button"
                            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                            data-collapse-toggle="dropdown-{{ $index }}">
                            <span class="w-6 h-6 inline-flex justify-center items-center text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white">
                                <i class="{{ $link['icon'] }}"></i>
                            </span>
                            <span class="flex-1 ms-3 text-left whitespace-nowrap">{{ $link['name'] }}</span>
                            <i class="fa-solid fa-chevron-down text-xs ms-auto"></i>
                        </button>
                        <ul id="dropdown-{{ $index }}" class="hidden py-2 space-y-2 ml-4">
                            @foreach ($link['submenu'] as $sub)
                                <li>
                                    <a href="{{ $sub['href'] }}"
                                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 text-sm">
                                        {{ $sub['name'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <a href="{{ $link['href'] }}"class="flex items-center w-full p-2 text-base text-gray-900 "
                            class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hovertext-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"    
                        <span class="w-6 h-6 inline-flex items-center justify-center text-gray-500">
                                <i class="{{ $link['icon'] }}"></i>
                                </span>
                                <span class="ms-3">{{ $link['name'] }}</span>

                        </a>
                    @endisset
                </li>
            @endforeach
        </ul>
    </div>
</aside>