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
                            Register of Court Decree/Order
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
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('document_type')"
                                    :direction="$filters['sort-field'] === 'document_type' ? $filters['sort-direction'] : null">
                                    TYPE OF DOCUMENT
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('subject_name')"
                                    :direction="$filters['sort-field'] === 'subject_name' ? $filters['sort-direction'] : null">
                                    SUBJECT PARTY/PARTIES
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('subject_citizenship')"
                                    :direction="$filters['sort-field'] === 'subject_citizenship' ? $filters['sort-direction'] : null">
                                    CITIZENSHIP
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('petitioner_name')"
                                    :direction="$filters['sort-field'] === 'petitioner_name' ? $filters['sort-direction'] : null">
                                    PETITIONER
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('petitioner_citizenship')"
                                    :direction="$filters['sort-field'] === 'petitioner_citizenship' ? $filters['sort-direction'] : null">
                                    PET. CITIZENSHIP
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('court_name')"
                                    :direction="$filters['sort-field'] === 'court_name' ? $filters['sort-direction'] : null">
                                    NAME OF COURT
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('special_proceeding_number')"
                                    :direction="$filters['sort-field'] === 'special_proceeding_number' ? $filters['sort-direction'] : null">
                                    SPECIAL PROCEEDING NO.
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('date_issued')"
                                    :direction="$filters['sort-field'] === 'date_issued' ? $filters['sort-direction'] : null">
                                    DATE ISSUED
                                </x-table.head>
                                <x-table.head class="px-2 py-1" sortable wire:click="sortBy('judge_name')"
                                    :direction="$filters['sort-field'] === 'judge_name' ? $filters['sort-direction'] : null">
                                    NAME OF JUDGE
                                </x-table.head>
                                <x-table.head class="px-2 py-1">
                                    REMARKS
                                </x-table.head>
                            </x-slot>

                            <x-slot name="body">
                                @if($selectPage)
                                <x-table.row class="bg-gray-300" wire:key="row-message">
                                    <x-table.cell colspan="13" class="py-2">
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
                                        <span>{{ $item['document_type'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['subject_name'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['subject_citizenship'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['petitioner_name'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['petitioner_citizenship'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['court_name'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['special_proceeding_no'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['date_issued'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['judge_name'] }}</span>
                                    </x-table.cell>
                                    <x-table.cell class="space-y-2">
                                        <span>{{ $item['remarks'] }}</span>
                                    </x-table.cell>
                                </x-table.row>
                                @empty
                                <x-table.row wire:loading.class.delay="opacity-50">
                                    <x-table.cell colspan="13">
                                        <div class="flex items-center justify-center">
                                            <x-icon.box-empty class="w-8 h-8 text-slate-400" />
                                            <span class="px-2 py-8 text-xl font-medium text-slate-400">No Records
                                                found...</span>
                                        </div>
                                    </x-table.cell>
                                </x-table.row>
                                @endforelse
                                <x-table.row class="bg-gray-300" wire:key="row-message">
                                    <x-table.cell colspan="13" class="">
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
                            <label for="document_type" class="text-sm">TYPE OF DOCUMENT :</label>
                            <x-form.text-area wire:model.lazy="document_type" id="document_type" rows="3"></x-form.text-area>
                            @error('document_type')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="subject_name" class="text-sm">SUBJECT PARTY/PARTIES :</label>
                            <x-form.text-area wire:model.lazy="subject_name" id="subject_name" rows="3"></x-form.text-area>
                            @error('subject_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="subject_citizenship" class="text-sm">CITIZENSHIP :</label>
                            <x-input wire:model.lazy="subject_citizenship" id="subject_citizenship" type="text"/>
                            @error('subject_citizenship')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="petitioner_name" class="text-sm">PETITIONER :</label>
                            <x-input wire:model.lazy="petitioner_name" id="petitioner_name" type="text"/>
                            @error('petitioner_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="petitioner_citizenship" class="text-sm">CITIZENSHIP :</label>
                            <x-input wire:model.lazy="petitioner_citizenship" id="petitioner_citizenship" type="text"/>
                            @error('petitioner_citizenship')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="court_name" class="text-sm">NAME OF COURT :</label>
                            <x-form.text-area wire:model.lazy="court_name" id="court_name" rows="3"></x-form.text-area>
                            @error('court_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="special_proceeding_no" class="text-sm">SPECIAL PROCEEDING NO. :</label>
                            <x-input wire:model.lazy="special_proceeding_no" id="special_proceeding_no" type="text"/>
                            @error('special_proceeding_no')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="date_issued" class="text-sm">ISSUED DATE :</label>
                            <x-input wire:model.lazy="date_issued" id="date_issued" type="date"/>
                            @error('date_issued')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="judge_name" class="text-sm">NAME OF JUDGE :</label>
                            <x-input wire:model.lazy="judge_name" id="judge_name" type="text"/>
                            @error('judge_name')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        <div class="space-y-1 sm:col-span-2">
                            <label for="remarks" class="text-sm">REMARKS :</label>
                            <x-form.text-area wire:model.lazy="remarks" id="remarks" rows="3"></x-form.text-area>
                            @error('remarks')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                        </div>
                        @if ($exist_image && is_null($temp_image))
                            @forelse ($exist_image as $key=>$eimage)
                            <div class="relative">
                                <img src="{{ asset('images/'.$eimage['name']) }}" alt="Scanned images">
                                <button wire:click="removeImage({{ $eimage['id'] }},'{{ $key }}')" class="absolute top-0 right-0 px-2 py-1 mx-1 my-1 text-sm italic text-white bg-red-500 rounded hover:bg-red-800">
                                    Remove?
                                </button>
                              </div>

                            @empty
                            @endforelse
                        @endif


                        @if ($temp_image)
                            @forelse ($temp_image as $timage)
                                <img src="{{ $timage->temporaryUrl() }}" alt="Scanned images">
                            @empty

                            @endforelse
                        @endif

                        <div class="space-y-1 sm:col-span-2">
                            <label for="cover-photo" class="block text-sm text-gray-700 sm:mt-px sm:pt-2"> UPLOAD PHOTO (Optional) : </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <div class="flex justify-center max-w-lg px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Click here to attach file</span>
                                        <input wire:model="temp_image" id="file-upload" type="file" class="sr-only" multiple>
                                    </label>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG/JPG up to 10MB</p>
                                </div>
                                </div>
                            </div>
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
