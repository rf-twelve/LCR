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
                        Maintenance Request Form
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
                                <label for="priority_type" class="w-40 py-2 text-sm">Priority Type :</label><br>
                                <x-select wire:model.lazy="priority_type" id="priority_type" class="w-full border">
                                    <option value="">-Select Type-</option>
                                    <option value="urgent">Urgent</option>
                                    <option value="normal">Normal</option>
                                </x-select>
                            </div>
                            <div class="w-40"></div>
                            @error('priority_type')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="vehicle_id" class="w-40 py-2 text-sm">For :</label><br>
                                <x-select wire:model.lazy="vehicle_id" id="vehicle_id" class="w-full border">
                                    <option value="">-Select Vehicle/Equipment-</option>
                                    @foreach (App\Models\Vehicle::get() as $index => $vehicle)
                                        <option value="{{ $vehicle['id'] }}">{{ $vehicle['brand'].'/'.$vehicle['model'] }}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div class="w-40"></div>
                            @error('vehicle_id')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="defects" class="w-40 py-2 text-sm">Defects / Complaints :</label>
                                <textarea wire:model.lazy="defects" rows="4" id="defects" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <div class="w-40"></div>
                            @error('defects')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="requested_date" class="w-40 py-2 text-sm">Requested Date :</label>
                                <x-input wire:model.lazy="requested_date" id="requested_date" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('requested_date')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="requested_by" class="w-40 py-2 text-sm">Requested By :</label>
                                <x-input wire:model.lazy="requested_by" id="requested_by" type="text"/>
                            </div>
                            <div class="w-40"></div>
                            @error('requested_by')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="received_date" class="w-40 py-2 text-sm">Received Date :</label>
                                <x-input wire:model.lazy="received_date" id="received_date" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('received_date')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="received_by" class="w-40 py-2 text-sm">Received By :</label>
                                <x-input wire:model.lazy="received_by" id="received_by" type="text"/>
                            </div>
                            <div class="w-40"></div>
                            @error('received_by')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="inspected_date" class="w-40 py-2 text-sm">Inspected Date :</label>
                                <x-input wire:model.lazy="inspected_date" id="inspected_date" type="date"/>
                            </div>
                            <div class="w-40"></div>
                            @error('inspected_date')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="inspected_by" class="w-40 py-2 text-sm">Inspected By :</label>
                                <x-input wire:model.lazy="inspected_by" id="inspected_by" type="text"/>
                            </div>
                            <div class="w-40"></div>
                            @error('inspected_by')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <div class="flex space-y-1 sm:col-span-4">
                                <label for="comments" class="w-40 py-2 text-sm">Comments :</label>
                                <textarea wire:model.lazy="comments" rows="4" id="comments" class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 shadow-sm appearance-none rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <div class="w-40"></div>
                            @error('comments')<x-comment class="text-red-500 w-max">*{{ $message }}</x-comment>@enderror

                            <span class="sr-only">Buttons</span>
                            <div class="flex justify-end space-x-2 sm:col-span-4">
                                <div class="flex justify-end space-x-3">
                                    <a href="{{ route('maintenance-request-forms',['user_id',auth()->user()->id]) }}" class="px-3 py-1 bg-gray-300 rounded-md hover:bg-gray-500 hover:text-white">
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

</div>
