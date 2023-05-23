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
                        Charge Slip Form
                    </a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg"aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="#" class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                        Create
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
                                <label for="date" class="w-40 py-2 text-sm">Date :</label>
                                <x-input wire:model.lazy="date" id="date" type="date"/>
                                @error('date')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                            </div>

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="to" class="w-40 py-2 text-sm">To :</label>
                                <x-input wire:model.lazy="to" id="to" type="text" placeholder="Enter supplier name"/>
                                @error('to')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                            </div>

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="from" class="w-40 py-2 text-sm">From :</label>
                                <x-input wire:model.lazy="from" id="from" type="text" placeholder="Enter Company/Office name"/>
                                @error('from')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                            </div>

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="for" class="w-40 py-2 text-sm">For :</label><br>
                                <x-select wire:model.lazy="for" id="for" class="w-full border">
                                    <option value="">-Select Vehicle/Equipment-</option>
                                    @foreach (App\Models\Vehicle::get() as $index => $vehicle)
                                        <option value="{{ $vehicle['id'] }}">{{ $vehicle['brand'].'/'.$vehicle['model'] }}</option>
                                    @endforeach
                                </x-select>
                                @error('for')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                            </div>

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="prepared_by" class="w-40 py-2 text-sm">Prepared by :</label>
                                <x-input wire:model.lazy="prepared_by" id="prepared_by" type="text" placeholder="Enter Full name"/>
                                @error('prepared_by')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                            </div>

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="noted_by" class="w-40 py-2 tex-2t-sm">Noted by :</label>
                                <x-input wire:model.lazy="noted_by" id="noted_by" type="text" placeholder="Enter Full name"/>
                                @error('noted_by')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
                            </div>

                            <div class="mt-2 space-y-1 sm:col-span-4">
                                <div class="flex flex-col">
                                    <div class="min-w-full overflow-hidden overflow-x-scroll align-middle shadow">
                                        <x-table>
                                            <x-slot name="head">

                                                <x-table.head class="w-8 px-2 py-1">ITEM #</x-table.head>
                                                <x-table.head class="px-2 py-1">QTY</x-table.head>
                                                <x-table.head class="px-2 py-1">UNIT</x-table.head>
                                                <x-table.head class="px-2 py-1">PARTICULAR</x-table.head>
                                                <x-table.head class="px-2 py-1">UNIT PRICE</x-table.head>
                                                <x-table.head class="px-2 py-1">TOTAL PRICE</x-table.head>
                                                <x-table.head class="w-10 px-6 py-1"><span class="sr-only">Edit</span></x-table.head>
                                            </x-slot>

                                            <x-slot name="body">
                                                <?php $num=1; ?>
                                                @forelse ($charge_slip_items as $key => $item)
                                                <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $key }}" class="text-gray-600 hover:bg-blue-100">
                                                    <x-table.cell class="text-center">
                                                        <span>{{ $num++; }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell class="text-center">
                                                        <span>{{ $item['qty'] }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell class="text-center">
                                                        <span>{{ $item['unit'] }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell class="text-center">
                                                        <span>{{ $item['particular'] }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell class="text-center">
                                                        <span>{{ number_format($item['unit_price'], 2,'.',',') }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell class="text-right">
                                                        <span>{{ number_format($item['total_price'], 2,'.',',') }}</span>
                                                    </x-table.cell>
                                                    <x-table.cell class="text-right">
                                                        <button wire:click.prevent="removeItem({{ $key }})" class="px-2 py-1 text-white bg-red-500 rounded-xl">
                                                            <x-icon.times class="w-4" />
                                                        </button>
                                                    </x-table.cell>
                                                </x-table.row>

                                                @empty
                                                {{-- <x-table.row wire:loading.class.delay="opacity-50">
                                                    <x-table.cell colspan="10">
                                                        <div class="flex items-center justify-center">
                                                        <x-icon.box-empty class="w-8 h-8 text-slate-400" />
                                                            <span class="px-2 py-8 text-xl font-medium text-slate-400">No Records
                                                                found...</span>
                                                        </div>
                                                    </x-table.cell>
                                                </x-table.row> --}}
                                                @endforelse
                                                <x-table.row>
                                                    <td colspan="2">
                                                        <div class="flex justify-center">
                                                            <button wire:click.prevent="addItem()" class="flex px-2 py-1 m-2 text-white bg-blue-500 rounded-xl">
                                                                <x-icon.plus class="w-4" />
                                                                <span class="text-sm italic">Add items</span>
                                                            </button>
                                                        </div>
                                                    </td>
                                                    @if (count($charge_slip_items) > 0)
                                                        <td colspan="2" class="text-right">
                                                            <span class="text-sm italic font-medium">Grand Total:</span>
                                                        </td>
                                                        <td colspan="2">
                                                            <span class="pl-2 text-lg font-medium">P {{ number_format($grand_total, 2,'.',',') }}</span>
                                                        </td>
                                                    @endif

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
    <x-modal.dialog wire:ignore.self wire:model="add_charge_slip_item" maxWidth="md">
        <x-slot name="title">
            CHARGE SLIP ITEMS
        </x-slot>

        <x-slot name="content">
            <div class="grid font-medium gap-y-1 gap-x-2 sm:grid-cols-4 sm:gap-x-8">
            <div class="col-span-4">
                <label for="particular" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">PARTICULAR :</label>
                <x-input wire:model.lazy="items.particular" id="particular" type="text" autocomplete="off" placeholder="Enter Particular"/>
                @error('items.particular')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            <div class="col-span-2">
                <label for="qty" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">QTY :</label>
                <x-input wire:model.lazy="items.qty" id="qty" type="number" autocomplete="off" placeholder="Enter Quantity"/>
                @error('items.qty')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            <div class="col-span-2">
                <label for="unit" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">UNIT :</label>
                <x-input wire:model.lazy="items.unit" id="unit" type="text" autocomplete="off" placeholder="Enter Unit"/>
                @error('items.unit')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            <div class="col-span-2">
                <label for="unit_price" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">UNIT PRICE :</label>
                <x-input wire:model.lazy="items.unit_price" id="unit_price" type="number" autocomplete="off" placeholder="Enter Price"/>
                @error('items.unit_price')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            <div class="col-span-2">
                <label for="total_price" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">TOTAL PRICE :</label>
                <label class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    {{ number_format($items['total_price'],2,'.',',') }}
                </label>
            </div>

            <div class="col-span-4 space-y-1">
                <label for="cover-photo" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Actual photo(Optional) : </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                    <div class="flex justify-center max-w-lg px-6 pt-2 pb-3 border-2 border-gray-300 border-dashed rounded-md">
                    @if (!is_null($temp_image))

                    <div class="space-y-1 text-center">
                        <img src="{{ $temp_image->temporaryUrl() }}" class="max-h-16" alt="actual_image">
                    </div>

                    @else

                    <div class="space-y-1 text-center">
                        <svg class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex justify-center text-sm text-gray-600">
                        <label for="file-upload" class="relative font-medium text-indigo-600 bg-white rounded-md cursor-pointer hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                            <span>Click here to upload file</span>
                            <input wire:model.debounce.500="temp_image" id="file-upload" type="file" class="sr-only">
                        </label>
                        </div>
                        <p class="text-xs text-gray-500">JPG or JPEG file type and up to 10MB</p>
                    </div>
                    @endif

                    </div>
                </div>
                @error('temp_image')<x-comment class="text-red-500">*{{ $message }}</x-comment>@enderror
            </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-button wire:click="closeChargeSlipItem()" type="button" class="text-white bg-gray-400 hover:bg-gray-500">
                {{ __('Cancel') }}
            </x-button>
            <x-button wire:click="saveChargeSlipItem()" type="button" class="hover:bg-blue-500 hover:text-white">
                {{ __('Save') }}
            </x-button>
        </x-slot>
    </x-modal.dialog>

</div>
