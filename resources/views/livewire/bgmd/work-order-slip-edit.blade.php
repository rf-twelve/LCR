<div x-data="{disabled:true, finalize:false}" class="relative flex flex-col min-h-screen overflow-hidden bg-gray-50">
    <nav class="flex bg-blue-500 border-b border-gray-200" aria-label="Breadcrumb">
        <ol role="list" class="flex w-full max-w-screen-xl px-4 mx-auto space-x-4 sm:px-6 lg:px-8">
            <li class="flex">
                <div class="flex items-center">
                    <a href="{{ route('dashboard',['user_id'=>auth()->user()->id]) }}" class="text-white hover:font-semibold">
                        <!-- Heroicon name: solid/home -->
                        <x-icon.home class="flex-shrink-0 w-5 h-5" />
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="{{ url()->previous() }}" class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                        Work Order Slip
                    </a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                        Edit
                    </a>
                </div>
            </li>

        </ol>
    </nav>

    <div class="sm:h-8"></div>

    <div class="relative w-full px-6 pt-4 pb-4 bg-white shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-2xl sm:rounded-lg sm:px-10">

        <div class="mx-autoss">
            <div class="divide-y divide-gray-300/50">
                <div class="space-y-4 text-base leading-7 text-gray-600">

                    <div class="mt-4">
                        <form wire:submit.prevent="save" enctype="multipart/form-data" class="grid font-medium gap-y-1 gap-x-2 sm:grid-cols-4 sm:gap-x-8">

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="mr_id" class="w-40 py-2 text-sm">Maintenance Request:</label><br>
                                <x-select wire:model="maintenance_request_id" id="mr_id" class="w-full border" disabled>
                                    <option value="">-Select Tracking Number-</option>
                                    @foreach (App\Models\MaintenanceRequest::get() as $index => $item)
                                        <option value="{{ $item['id'] }}">{{ $item['tn']}}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div class="w-40"></div>
                            @error('maintenance_request_id')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="work_order_no" class="w-40 py-2 text-sm">Work Order Number:</label>
                                <x-input wire:model.lazy="work_order_no" id="work_order_no" type="text"/>
                            </div>
                            <div class="w-40"></div>
                            @error('work_order_no')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="assigned_worker" class="w-40 py-2 text-sm">Assigned Worker:</label>
                                <textarea wire:model.lazy="assigned_worker" rows="4" id="assigned_worker" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <div class="w-40"></div>
                            @error('assigned_worker')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="date_started" class="w-40 py-2 text-sm">Date Started:</label>
                                <x-input wire:model.lazy="date_started" id="date_started" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('date_started')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="date_finished" class="w-40 py-2 text-sm">Date Finished:</label>
                                <x-input wire:model.lazy="date_finished" id="date_finished" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('date_finished')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="supervised_by" class="w-40 py-2 text-sm">Supervised By:</label>
                                <x-input wire:model.lazy="supervised_by" id="supervised_by" type="text"/>
                            </div>
                            <div class="w-40"></div>
                            @error('supervised_by')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="supervised_date" class="w-40 py-2 text-sm">Supervised Date:</label>
                                <x-input wire:model.lazy="supervised_date" id="supervised_date" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('supervised_date')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="approved_by" class="w-40 py-2 text-sm">Approved By:</label>
                                <x-input wire:model.lazy="approved_by" id="approved_by" type="text"/>
                            </div>
                            <div class="w-40"></div>
                            @error('approved_by')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="approved_date" class="w-40 py-2 text-sm">Approved Date:</label>
                                <x-input wire:model.lazy="approved_date" id="approved_date" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('approved_date')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="received_by" class="w-40 py-2 text-sm">Received By:</label>
                                <x-input wire:model.lazy="received_by" id="received_by" type="text"/>
                            </div>
                            <div class="w-40"></div>
                            @error('received_by')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="received_date" class="w-40 py-2 text-sm">Received Date:</label>
                                <x-input wire:model.lazy="received_date" id="received_date" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('received_date')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="mt-2 space-y-1 sm:col-span-4">
                                <div class="flex flex-col">
                                    <div class="min-w-full overflow-hidden overflow-x-scroll align-middle shadow">
                                        <x-table>
                                            <x-slot name="head">
                                                <x-table.head class="px-2 py-1">WORK DESCRIPTION</x-table.head>
                                                <x-table.head class="px-2 py-1">ESTIMATED MAN-HOURS</x-table.head>
                                                <x-table.head class="px-2 py-1">MARTERIALS/PARTS</x-table.head>
                                                <x-table.head class="px-2 py-1">REMARKS</x-table.head>
                                            </x-slot>

                                            <x-slot name="body">
                                                @forelse ($work_descriptions as $key => $item)
                                                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $key }}" class="text-gray-600 hover:bg-blue-100">
                                                    <x-table.cell>
                                                        <span>{{ $item['description'] }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell>
                                                        <span>{{ $item['estimated_man_hours'] }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell>
                                                        <span>{{ $item['parts_needed'] }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell>
                                                        <span>{{ $item['remarks'] }}</span>
                                                    </x-table.cell>
                                                </x-table.row>

                                                @empty

                                                @endforelse
                                                <x-table.row>
                                                    <td colspan="3">
                                                        <div class="flex justify-center">
                                                            <button wire:click.prevent="addItem()" class="flex px-2 py-1 m-2 text-white bg-blue-500 rounded-xl">
                                                                <x-icon.plus class="w-4" />
                                                                <span class="text-sm italic">Add work description</span>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </x-table.row>
                                            </x-slot>
                                        </x-table>
                                    </div>
                                </div>
                            </div>

                            <span class="sr-only">Buttons</span>
                            <div class="flex justify-end space-x-2 sm:col-span-4">
                                <div class="flex justify-end space-x-3">
                                    <a href="{{ route('charge-slips',['user_id',auth()->user()->id]) }}" class="px-3 py-1 bg-gray-300 rounded-md hover:bg-gray-500 hover:text-white">
                                        Back
                                    </a>
                                    <x-button type="submit" class="text-white bg-blue-500 hover:bg-blue-600">
                                        Save
                                    </x-button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sm:h-8"></div>
    {{-- ADD CHARGE SLIP ITEMS --}}
    <x-modal.dialog wire:ignore.self wire:model="add_work_desc" maxWidth="md">
        <x-slot name="title">WORK DESCRIPTION FORM</x-slot>

        <x-slot name="content">
            <div class="grid font-medium gap-y-1 gap-x-2 sm:grid-cols-4 sm:gap-x-8">
            <div class="col-span-4">
                <label for="description" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Work Descriptions :</label>
                <textarea wire:model.lazy="items.description" rows="4" id="description" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                @error('items.description')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            <div class="col-span-4">
                <label for="estimated_man_hours" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Estimated Man-Hours :</label>
                <textarea wire:model.lazy="items.estimated_man_hours" rows="4" id="estimated_man_hours" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                @error('items.estimated_man_hours')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            <div class="col-span-4">
                <label for="parts_needed" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Materials/Parts Needed :</label>
                <textarea wire:model.lazy="items.parts_needed" rows="4" id="parts_needed" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                @error('items.parts_needed')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            <div class="col-span-4">
                <label for="remarks" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Remarks :</label>
                <textarea wire:model.lazy="items.remarks" rows="4" id="remarks" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                @error('items.remarks')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>

            </div>
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="closeWorkDescription()" type="button" class="text-white bg-gray-400 hover:bg-gray-500">
                {{ __('Cancel') }}
            </x-button>
            <x-button wire:click="saveWorkDescription()" type="button" class="hover:bg-blue-500 hover:text-white">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-modal.dialog>

</div>
