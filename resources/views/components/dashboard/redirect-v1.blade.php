<div class="mt-2 sm:px-6 lg:px-8">

<h2 class="italic font-medium tracking-wide text-gray-500 uppercase text-md">Search Document</h2>
<ul role="list" class="grid grid-cols-1 gap-6 pt-4 sm:grid-cols-2 lg:grid-cols-3">

    <li class="col-span-1 bg-white divide-y divide-gray-200 rounded-lg shadow">
        <div class="flex items-center justify-between w-full p-6 space-x-6">
            <div class="flex-1 truncate">
                <div class="flex items-center space-x-3">
                    <h2 class="text-sm font-medium text-gray-900 truncate">Court Decree/Order</h2>
                    <span class="px-2.5 py-0.5 text-sm font-medium text-white bg-blue-500 rounded-full">
                        {{ $court_decree_order_count }}
                    </span>
                </div>
                <p class="mt-1 text-sm text-gray-500">Search Court Decree/Order.</p>
            </div>
            <img src="{{ asset('\images\search.jpg') }}"
                class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" alt="Image">
        </div>
        <div class="p-2">
            <div class="flex mt-1 rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <x-form.input-text wire:model='search_court_decree_order' type="search" placeholder="Enter LCR Number" class="pl-2 border rounded-none rounded-l-md"/>
                </div>
                <x-form.button wire:click='searchCourtDecreeOrder()' class="relative inline-flex items-center -ml-px space-x-2 border-gray-300 rounded-none rounded-r-md bg-gray-50 hover:bg-gray-100">
                    <x-icon.location class="w-6 h-6" /><span>Search</span>
                </x-form.button>
            </div>
        </div>
    </li>

    <li class="col-span-1 bg-white divide-y divide-gray-200 rounded-lg shadow">
        <div class="flex items-center justify-between w-full p-6 space-x-6">
            <div class="flex-1 truncate">
                <div class="flex items-center space-x-3">
                    <h2 class="text-sm font-medium text-gray-900 truncate">Death</h2>
                    <span class="px-2.5 py-0.5 text-sm font-medium text-white bg-blue-500 rounded-full">
                        {{ $death_count }}
                    </span>
                </div>
                <p class="mt-1 text-sm text-gray-500">Search Death.</p>
            </div>
            <img src="{{ asset('\images\search.jpg') }}"
                class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" alt="Image">
        </div>
        <div class="p-2">
            <div class="flex mt-1 rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <x-form.input-text wire:model='searchDeath' type="search" placeholder="Enter LCR Number" class="pl-2 border rounded-none rounded-l-md"/>
                </div>
                <x-form.button wire:click='search_death()' class="relative inline-flex items-center -ml-px space-x-2 border-gray-300 rounded-none rounded-r-md bg-gray-50 hover:bg-gray-100">
                    <x-icon.location class="w-6 h-6" /><span>Search</span>
                </x-form.button>
            </div>
        </div>
    </li>
    <li class="col-span-1 bg-white divide-y divide-gray-200 rounded-lg shadow">
        <div class="flex items-center justify-between w-full p-6 space-x-6">
            <div class="flex-1 truncate">
                <div class="flex items-center space-x-3">
                    <h2 class="text-sm font-medium text-gray-900 truncate">Fetal Death</h2>
                    <span class="px-2.5 py-0.5 text-sm font-medium text-white bg-blue-500 rounded-full">
                        {{ $fetal_death_count }}
                    </span>
                </div>
                <p class="mt-1 text-sm text-gray-500">Search Fetal Death.</p>
            </div>
            <img src="{{ asset('\images\search.jpg') }}"
                class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" alt="Image">
        </div>
        <div class="p-2">
            <div class="flex mt-1 rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <x-form.input-text wire:model='search_fetal_death' type="search" placeholder="Enter LCR Number" class="pl-2 border rounded-none rounded-l-md"/>
                </div>
                <x-form.button wire:click='searchFetalDeath()' class="relative inline-flex items-center -ml-px space-x-2 border-gray-300 rounded-none rounded-r-md bg-gray-50 hover:bg-gray-100">
                    <x-icon.location class="w-6 h-6" /><span>Search</span>
                </x-form.button>
            </div>
        </div>
    </li>
    <li class="col-span-1 bg-white divide-y divide-gray-200 rounded-lg shadow">
        <div class="flex items-center justify-between w-full p-6 space-x-6">
            <div class="flex-1 truncate">
                <div class="flex items-center space-x-3">
                    <h2 class="text-sm font-medium text-gray-900 truncate">Legal Instrument</h2>
                    <span class="px-2.5 py-0.5 text-sm font-medium text-white bg-blue-500 rounded-full">
                        {{ $legal_instrument_count }}
                    </span>
                </div>
                <p class="mt-1 text-sm text-gray-500">Search Legal Instrument.</p>
            </div>
            <img src="{{ asset('\images\search.jpg') }}"
                class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" alt="Image">
        </div>
        <div class="p-2">
            <div class="flex mt-1 rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <x-form.input-text wire:model='search_legal_instrument' type="search" placeholder="Enter LCR Number" class="pl-2 border rounded-none rounded-l-md"/>
                </div>
                <x-form.button wire:click='searchLegalInstrument()' class="relative inline-flex items-center -ml-px space-x-2 border-gray-300 rounded-none rounded-r-md bg-gray-50 hover:bg-gray-100">
                    <x-icon.location class="w-6 h-6" /><span>Search</span>
                </x-form.button>
            </div>
        </div>
    </li>
    <li class="col-span-1 bg-white divide-y divide-gray-200 rounded-lg shadow">
        <div class="flex items-center justify-between w-full p-6 space-x-6">
            <div class="flex-1 truncate">
                <div class="flex items-center space-x-3">
                    <h2 class="text-sm font-medium text-gray-900 truncate">Live Birth</h2>
                    <span class="px-2.5 py-0.5 text-sm font-medium text-white bg-blue-500 rounded-full">
                        {{ $live_birth_count }}
                    </span>
                </div>
                <p class="mt-1 text-sm text-gray-500">Search Live Birth.</p>
            </div>
            <img src="{{ asset('\images\search.jpg') }}"
                class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" alt="Image">
        </div>
        <div class="p-2">
            <div class="flex mt-1 rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <x-form.input-text wire:model='search_live_birth' type="search" placeholder="Enter LCR Number" class="pl-2 border rounded-none rounded-l-md"/>
                </div>
                <x-form.button wire:click='searchLiveBirth()' class="relative inline-flex items-center -ml-px space-x-2 border-gray-300 rounded-none rounded-r-md bg-gray-50 hover:bg-gray-100">
                    <x-icon.location class="w-6 h-6" /><span>Search</span>
                </x-form.button>
            </div>
        </div>
    </li>
    <li class="col-span-1 bg-white divide-y divide-gray-200 rounded-lg shadow">
        <div class="flex items-center justify-between w-full p-6 space-x-6">
            <div class="flex-1 truncate">
                <div class="flex items-center space-x-3">
                    <h2 class="text-sm font-medium text-gray-900 truncate">Marriage</h2>
                    <span class="px-2.5 py-0.5 text-sm font-medium text-white bg-blue-500 rounded-full">
                        {{ $marriage_count }}
                    </span>
                </div>
                <p class="mt-1 text-sm text-gray-500">Search Marriage.</p>
            </div>
            <img src="{{ asset('\images\search.jpg') }}"
                class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" alt="Image">
        </div>
        <div class="p-2">
            <div class="flex mt-1 rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <x-form.input-text wire:model='search_marriage' type="search" placeholder="Enter Register No." class="pl-2 border rounded-none rounded-l-md"/>
                </div>
                <x-form.button wire:click='searchMarriage()' class="relative inline-flex items-center -ml-px space-x-2 border-gray-300 rounded-none rounded-r-md bg-gray-50 hover:bg-gray-100">
                    <x-icon.location class="w-6 h-6" /><span>Search</span>
                </x-form.button>
            </div>
        </div>
    </li>
    <li class="col-span-1 bg-white divide-y divide-gray-200 rounded-lg shadow">
        <div class="flex items-center justify-between w-full p-6 space-x-6">
            <div class="flex-1 truncate">
                <div class="flex items-center space-x-3">
                    <h2 class="text-sm font-medium text-gray-900 truncate">Marriage Licenses</h2>
                    <span class="px-2.5 py-0.5 text-sm font-medium text-white bg-blue-500 rounded-full">
                        {{ $marriage_license_count }}
                    </span>
                </div>
                <p class="mt-1 text-sm text-gray-500">Search Marriage License.</p>
            </div>
            <img src="{{ asset('\images\search.jpg') }}"
                class="flex-shrink-0 w-10 h-10 bg-gray-300 rounded-full" alt="Image">
        </div>
        <div class="p-2">
            <div class="flex mt-1 rounded-md shadow-sm">
                <div class="relative flex items-stretch flex-grow focus-within:z-10">
                    <x-form.input-text wire:model='search_marriage_license' type="search" placeholder="Enter Register Number" class="pl-2 border rounded-none rounded-l-md"/>
                </div>
                <x-form.button wire:click='search_marriage_license()' class="relative inline-flex items-center -ml-px space-x-2 border-gray-300 rounded-none rounded-r-md bg-gray-50 hover:bg-gray-100">
                    <x-icon.location class="w-6 h-6" /><span>Search</span>
                </x-form.button>
            </div>
        </div>
    </li>

    <!-- Add more... -->
</ul>
</div>
