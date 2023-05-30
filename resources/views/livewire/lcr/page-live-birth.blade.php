
<div class="min-h-screen bg-gray-100 ">

    <div class="flex flex-col">
        <main class="flex-1">

            <!-- Topbar Desktop -->
            <x-topbar-desktop>
                <li class="flex">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"aria-hidden="true">
                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                        </svg>
                        <a href="{{ route('user-dashboard',['user_id'=> auth()->user()->id]) }}" class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                            Dashboard
                        </a>
                    </div>
                </li>
                <li class="flex">
                    <div class="flex items-center">
                        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"aria-hidden="true">
                            <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                        </svg>
                        <a href="#" class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                            Register of Live Birth
                        </a>
                    </div>
                </li>
            </x-topbar-desktop>
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="sm:flex">
                <div class="flex items-center flex-1 my-2">
                    <div class="w-full lg:max-w-xs">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full pl-2 pr-2">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <x-icon.search class="w-5 h-5 text-gray-500" />
                            </div>
                            <x-input wire:model.debounce.500ms="filters.search" id="searchTerm"
                                class="block w-full py-2 pl-10 pr-3 leading-5 placeholder-gray-500 bg-white border border-gray-300 rounded-xl focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Search" placeholder="Type any keyword..." type="search" />
                        </div>
                    </div>
                    <a target="_blank"
                        href="#"
                        {{-- href="{{ route('mswd/strandee/print-list/all',['user_id'=>auth()->user()->id]) }}" --}}
                        class="flex ml-3 text-indigo-600 hover:text-indigo-900">
                        <x-icon.printer class="w-5 h-5" /><span class="text-sm">Print List</span>
                    </a>
                </div>
                <div class="flex justify-between px-2 my-2 space-x-2">
                    <div>
                        <x-button wire:click="toggleCreateRecordModal()"
                            class="flex w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <x-icon.plus class="w-5 font-light" /> <p>Create</p>
                        </x-button>
                    </div>
                    <div class="flex justify-end space-x-1">
                        <div>
                            <x-select wire:model.debounce.500ms="filters.per-page"  id="perPage">
                                <option value="10">10 / page</option>
                                <option value="25">25 / page</option>
                                <option value="50">50 / page</option>
                                <option value="100">100 / page</option>
                            </x-select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sm:px-2 lg:px-4">
                <div class="flex flex-col mt-4">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden rounded-none shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg md:rounded-lg">
                        <x-table>
                            <x-slot name="head">
                                <x-table.head class="px-2 py-1">
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('lcr_no')"
                                    :direction="$filters['sort-field'] === 'lcr_no' ? $filters['sort-direction'] : null">
                                    LCR NUMBER
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('register_date')"
                                    :direction="$filters['sort-field'] === 'register_date' ? $filters['sort-direction'] : null">
                                    DATE OF REGISTRATION
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('child_first_name')"
                                    :direction="$filters['sort-field'] === 'child_first_name' ? $filters['sort-direction'] : null">
                                    FIRST NAME
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('child_middle_name')"
                                    :direction="$filters['sort-field'] === 'child_middle_name' ? $filters['sort-direction'] : null">
                                    MIDDLE NAME
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('child_last_name')"
                                    :direction="$filters['sort-field'] === 'child_last_name' ? $filters['sort-direction'] : null">
                                    LAST NAME
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('sex')"
                                    :direction="$filters['sort-field'] === 'sex' ? $filters['sort-direction'] : null">
                                    SEX
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('birth_date')"
                                    :direction="$filters['sort-field'] === 'birth_date' ? $filters['sort-direction'] : null">
                                    BIRTH DATE
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('birth_date_time_time')"
                                    :direction="$filters['sort-field'] === 'birth_date_time_time' ? $filters['sort-direction'] : null">
                                    TIME
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('birth_place')"
                                    :direction="$filters['sort-field'] === 'birth_place' ? $filters['sort-direction'] : null">
                                    BIRTH PLACE
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('birth_type')"
                                    :direction="$filters['sort-field'] === 'birth_type' ? $filters['sort-direction'] : null">
                                    TYPE
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('birth_order')"
                                    :direction="$filters['sort-field'] === 'birth_order' ? $filters['sort-direction'] : null">
                                    ORDER
                                </x-table.head>
                                <x-table.head class="px-2 py-1">
                                    MOTHER
                                </x-table.head>
                                <x-table.head class="px-2 py-1">
                                    AGE | NATIONALITY | RELIGION
                                </x-table.head>
                                <x-table.head class="px-2 py-1">
                                    FATHER
                                </x-table.head>
                                <x-table.head class="px-2 py-1">
                                    AGE | NATIONALITY | RELIGION
                                </x-table.head>
                                <x-table.head class="px-2 py-1">
                                    MARRIAGE DATE | PLACE
                                </x-table.head>
                                <x-table.head class="px-2 py-1">
                                    REMARKS
                                </x-table.head>
                            </x-slot>

                            <x-slot name="body">
                                @if($selectPage)
                                <x-table.row class="bg-gray-300" wire:key="row-message">
                                    <x-table.cell colspan="20" class="py-2">
                                        @unless ($selectAll)
                                        <div>
                                            <span>You have selected <strong>{{ $records->count() }}</strong> records, do you
                                                want to select all <strong>{{ $records->total() }}</strong>?</span>
                                            <x-button wire:click="selectAll" class="ml-1 text-blue-500">Select All
                                            </x-button>
                                        </div>
                                        @else
                                        <span>You have selected all <strong>{{ $records->total() }}</strong> records.</span>
                                        @endIf
                                    </x-table.cell>
                                </x-table.row>
                                @endif

                                @forelse ($records as $item)
                                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $item->id }}" class="text-gray-600 hover:bg-blue-100">
                                    <x-table.cell class="max-w-2xl">
                                        <div class="flex justify-center space-x-2">

                                            <x-button class="px-2 rounded-xl hover:text-white hover:bg-blue-500" wire:click="toggleView({{ $item->id }})">
                                                <x-icon.view class="w-5 h-5" />
                                            </x-button>

                                            <x-button class="px-2 rounded-xl hover:text-white hover:bg-blue-500" wire:click="toggleEditRecordModal({{ $item->id }})">
                                                <x-icon.edit class="w-5 h-5" />
                                            </x-button>

                                            <x-button class="px-2 rounded-xl hover:text-white hover:bg-red-500" wire:click="toggleDeleteSingleRecordModal({{ $item->id }})">
                                                <x-icon.trash class="w-5 h-5" />
                                            </x-button>
                                        </div>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['lcr_no'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['register_date'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['child_first_name'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['child_middle_name'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['child_last_name'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['sex'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['birth_date'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['birth_date_time_time'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['birth_place'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['birth_type'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['birth_order'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{
                                            $item['mother_first_name']
                                        .' '.$item['mother_middle_name']
                                        .' '.$item['mother_last_name']
                                        }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{
                                            $item['mother_age']
                                        .'/'.$item['mother_nationality']
                                        .'/'.$item['mother_religion']
                                        }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{
                                            $item['father_first_name']
                                        .' '.$item['father_middle_name']
                                        .' '.$item['father_last_name']
                                        }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{
                                            $item['father_age']
                                        .'/'.$item['father_nationality']
                                        .'/'.$item['father_religion']
                                        }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{
                                            $item['parents_marriage_date']
                                        .'/'.$item['parents_marriage_place']
                                        }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['remarks'] }}</span>
                                    </x-table.cell>
                                </x-table.row>
                                @empty
                                <x-table.row wire:loading.class.delay="opacity-50">
                                    <x-table.cell colspan="20">
                                        <div class="flex items-center justify-center">
                                            <x-icon.box-empty class="w-8 h-8 text-slate-400" />
                                            <span class="px-2 py-8 text-xl font-medium text-slate-400">No Records
                                                found...</span>
                                        </div>
                                    </x-table.cell>
                                </x-table.row>
                                @endforelse
                                <x-table.row class="bg-gray-300" wire:key="row-message">
                                    <x-table.cell colspan="20" class="">
                                        {{ $records->links('vendor.livewire.modified-tailwind') }}
                                    </x-table.cell>
                                </x-table.row>
                            </x-slot>
                        </x-table>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>


        <!-- Strandee Form -->
        <div>
            <x-modal.dialog wire:model="showFormModal" maxWidth="md">
                <x-slot name="title">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                        </svg>
                        <span>REGISTRY FORM</span>
                    </div>
                </x-slot>

                <x-slot name="content">
                    <div class="px-2 mb-4 space-y-3 overflow-y-auto max-h-96">
                        <div class="space-y-1 sm:col-span-2">
                            <label for="lcr_no" class="text-sm">LCR NUMBER :</label>
                            <x-input wire:model.lazy="lcr_no" id="lcr_no" type="text"/>
                            @error('lcr_no')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="register_date" class="text-sm">REGISTRATION DATE :</label>
                            <x-input wire:model.lazy="register_date" id="register_date" type="date"/>
                            @error('register_date')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="child_first_name" class="text-sm">FIRST NAME :</label>
                            <x-input wire:model.lazy="child_first_name" id="child_first_name" type="text"/>
                            @error('child_first_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="child_middle_name" class="text-sm">MIDDLE NAME :</label>
                            <x-input wire:model.lazy="child_middle_name" id="child_middle_name" type="text"/>
                            @error('child_middle_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="child_last_name" class="text-sm">LAST NAME :</label>
                            <x-input wire:model.lazy="child_last_name" id="child_last_name" type="text"/>
                            @error('child_last_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="sex" class="text-sm">SEX :</label>
                            <x-input wire:model.lazy="sex" id="sex" type="text"/>
                            @error('sex')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="birth_date" class="text-sm">BIRTH DATE :</label>
                            <x-input wire:model.lazy="birth_date" id="birth_date" type="date"/>
                            @error('birth_date')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="birth_date_time_time" class="text-sm">TIME :</label>
                            <x-input wire:model.lazy="birth_date_time_time" id="birth_date_time_time" type="text"/>
                            @error('birth_date_time_time')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="birth_place" class="text-sm">BIRTH PLACE :</label>
                            <x-input wire:model.lazy="birth_place" id="birth_place" type="text"/>
                            @error('birth_place')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="birth_type" class="text-sm">BIRTH TYPE :</label>
                            <x-input wire:model.lazy="birth_type" id="birth_type" type="text"/>
                            @error('birth_type')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="birth_order" class="text-sm">BIRTH ORDER :</label>
                            <x-input wire:model.lazy="birth_order" id="birth_order" type="text"/>
                            @error('birth_order')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="mother_first_name" class="text-sm">MOTHER FIRST NAME :</label>
                            <x-input wire:model.lazy="mother_first_name" id="mother_first_name" type="text"/>
                            @error('mother_first_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="mother_middle_name" class="text-sm">MOTHER MIDDLE NAME :</label>
                            <x-input wire:model.lazy="mother_middle_name" id="mother_middle_name" type="text"/>
                            @error('mother_middle_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="mother_last_name" class="text-sm">MOTHER LAST NAME :</label>
                            <x-input wire:model.lazy="mother_last_name" id="mother_last_name" type="text"/>
                            @error('mother_last_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="mother_age" class="text-sm">AGE OF MOTHER :</label>
                            <x-input wire:model.lazy="mother_age" id="mother_age" type="number"/>
                            @error('mother_age')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="mother_nationality" class="text-sm">NATIONALITY :</label>
                            <x-input wire:model.lazy="mother_nationality" id="mother_nationality" type="text"/>
                            @error('mother_nationality')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="mother_religion" class="text-sm">RELIGION :</label>
                            <x-input wire:model.lazy="mother_religion" id="mother_religion" type="text"/>
                            @error('mother_religion')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="father_first_name" class="text-sm">FATHER FIRST NAME :</label>
                            <x-input wire:model.lazy="father_first_name" id="father_first_name" type="text"/>
                            @error('father_first_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="father_middle_name" class="text-sm">FATHER MIDDLE NAME :</label>
                            <x-input wire:model.lazy="father_middle_name" id="father_middle_name" type="text"/>
                            @error('father_middle_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="father_last_name" class="text-sm">FATHER LAST NAME :</label>
                            <x-input wire:model.lazy="father_last_name" id="father_last_name" type="text"/>
                            @error('father_last_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="father_age" class="text-sm">AGE OF FATHER :</label>
                            <x-input wire:model.lazy="father_age" id="father_age" type="number"/>
                            @error('father_age')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="father_nationality" class="text-sm">NATIONALITY :</label>
                            <x-input wire:model.lazy="father_nationality" id="father_nationality" type="text"/>
                            @error('father_nationality')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="father_religion" class="text-sm">RELIGION :</label>
                            <x-input wire:model.lazy="father_religion" id="father_religion" type="text"/>
                            @error('father_religion')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="parents_marriage_date" class="text-sm">MARRIAGE DATE :</label>
                            <x-input wire:model.lazy="parents_marriage_date" id="parents_marriage_date" type="date"/>
                            @error('parents_marriage_date')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="parents_marriage_place" class="text-sm">MARRIAGE PLACE :</label>
                            <x-input wire:model.lazy="parents_marriage_place" id="parents_marriage_place" type="text"/>
                            @error('parents_marriage_place')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="remarks" class="text-sm">REMARKS :</label>
                            <x-form.text-area wire:model.lazy="remarks" id="remarks" rows="3"></x-form.text-area>
                            @error('remarks')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                    </div>

                </x-slot>

                <x-slot name="footer">
                    <x-button wire:click="closeRecord()" type="button" class="text-white bg-gray-400 hover:bg-gray-500">
                        {{ __('Cancel') }}
                    </x-button>
                    <x-button wire:click="saveRecord()" type="button" class="hover:bg-blue-500 hover:text-white">
                        {{ __('Save') }}
                    </x-button>
                </x-slot>
            </x-modal.dialog>
        </div>

        <!-- Delete Single Record Modal -->
        <div>
            <form wire:submit.prevent="deleteSingleRecord">
                <x-modal.confirmation wire:model.defer="showDeleteSingleRecordModal" selectedIcon="delete">
                    <x-slot name="title">Delete Record</x-slot>

                    <x-slot name="content">
                        <div class="py-8 text-gray-700">Are you sure you? This action is irreversible.</div>
                    </x-slot>

                    <x-slot name="footer">
                        <x-button type="button" wire:click="$set('showDeleteSingleRecordModal', false)">Cancel</x-button>

                        <x-button type="submit">Delete</x-button>
                    </x-slot>
                </x-modal.confirmation>
            </form>
        </div>

        <!-- Delete Single Record Modal -->
        <div>
            <form wire:submit.prevent="deleteSelectedRecord">
                <x-modal.confirmation wire:model.defer="showDeleteSelectedRecordModal" selectedIcon="delete">
                    <x-slot name="title">Delete Selected Record</x-slot>

                    <x-slot name="content">
                        <div class="py-8 text-gray-700">Are you sure you? This action is irreversible.</div>
                    </x-slot>

                    <x-slot name="footer">
                        <x-button type="button" wire:click.prevent="$set('showDeleteSelectedRecordModal', false)">Cancel</x-button>

                        <x-button type="submit">Delete</x-button>
                    </x-slot>
                </x-modal.confirmation>
            </form>
        </div>


        </main>
    </div>
</div>
