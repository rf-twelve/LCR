<div class="min-h-full">
    <div class="flex flex-col min-h-0">
        <!-- Top nav-->
        <x-header.navbar>
            <nav class="flex" aria-label="Breadcrumb">
                <ol role="list" class="flex items-center space-x-4">
                <li>
                    <div>
                    <a href="{{ route('dashboard',['user_id'=>Auth::user()->id]) }}" class="hover:text-blue-100">
                        <x-icon.home class="flex-shrink-0 w-5 h-5"/>
                        <span class="sr-only">Home</span>
                    </a>
                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                    <x-icon.chevron-right class="flex-shrink-0 w-5 h-5"/>
                    <a href="{{ route('maintenance-request-forms',['user_id'=>Auth::user()->id]) }}" class="ml-4 text-sm font-medium hover:text-blue-100" aria-current="page">Maintenance Request Form</a>
                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                    <x-icon.chevron-right class="flex-shrink-0 w-5 h-5"/>
                    <a href="#" class="ml-4 text-sm font-medium hover:text-blue-100" aria-current="page">View</a>
                    </div>
                </li>
                </ol>
            </nav>

        </x-header.navbar>

        <!-- Bottom section -->
        <div class="flex-1 min-h-0 overflow-hidden">
            <!-- Main area -->
            <main class="flex-1 min-w-0 border-t border-gray-200 xl:flex">

                <div class="order-first xl:block xl:flex-shrink-0">
                    <div class="relative flex flex-col h-full bg-gray-100 border-r border-gray-200 w-96">
                        <div class="flex-shrink-0">
                            <div class="flex justify-between px-6 py-2 text-sm font-medium text-gray-700 bg-blue-300 border-t border-b border-gray-200">
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                    </svg>
                                    <span class="pl-2">MAINTENANCE REQUEST INFO</span>
                                    @if ($author_id == auth()->user()->id)
                                        <a href="{{ route('maintenance-request-form.edit',['user_id'=>auth()->user()->id, 'id'=> $mrf_id]) }}" class="flex ml-3 text-indigo-600 hover:text-indigo-900">
                                            <x-icon.edit class="w-4 h-4" /><span class="text-xs">Edit</span>
                                        </a>
                                    @endif
                                        <a target="__blank" href="{{ route('maintenance-request-form.print',['user_id'=>auth()->user()->id, 'id'=> $mrf_id]) }}" class="flex ml-3 text-indigo-600 hover:text-indigo-900">
                                            <x-icon.printer class="w-4 h-4" /><span class="text-xs">Print</span>
                                        </a>
                                </div>
                            </div>
                        </div>
                        <nav class="flex-1 min-h-0 overflow-y-auto">
                            <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                                    <!-- ACCOUNT DETAILS -->
                                <div class="px-2 border-t border-gray-200 text-md sm:p-0">
                                    <dl class="sm:divide-y sm:divide-gray-200">
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                TRACKING #:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $tn }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                PRIORITY TYPE:</dt>
                                            <dd class="mt-1 text-gray-900 uppercase sm:mt-0 sm:col-span-2">
                                                {{ $priority_type }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                DEFECTS:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $defects }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                REQUESTED DATE:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $requested_date }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                REQUESTED BY:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $requested_by }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                RECEIVED DATE:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $received_date }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                RECEIVED BY:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $received_by }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                INSPECTED DATE:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $inspected_date }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                INSPECTED BY:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $inspected_by }}
                                            </dd>
                                        </div>

                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                COMMENTS:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $comments }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                PARTS NEEDED:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $parts_needed }}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                WORK COMPLETED ON:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $work_completed_on}}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                STATUS:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $status}}
                                            </dd>
                                        </div>
                                        <div class="py-2 sm:py-1 sm:grid sm:grid-cols-3 sm:gap-2 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500 uppercase">
                                                ENCODED BY:</dt>
                                            <dd class="mt-1 text-gray-900 sm:mt-0 sm:col-span-2">
                                                {{ $encoded_by }}
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </section>
                        </nav>
                    </div>
                </div>

                <section aria-labelledby="message-heading" class="flex flex-col flex-1 h-full min-w-0 overflow-hidden xl:order-last">

                    <!-- RIGTH SIDE SPACE -->
                    <div class="flex-1 overflow-y-auto lg:block">
                        <div class="min-h-screen pb-6 bg-white shadow">
                            <div class="sm:items-baseline sm:justify-between">

                                 {{--MAINTENANCE LOG--}}
                                <div class="flex justify-between px-6 py-2 text-sm font-medium text-gray-700 bg-blue-300 border-t border-b border-gray-200">
                                    <div class="flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                        <span class="pl-2">WORK ORDER SLIP(S)</span>
                                        <a href="{{ route('work-order-slip.create',['user_id'=>auth()->user()->id, 'id'=> $mrf_id]) }}" class="flex ml-3 text-indigo-600 hover:text-indigo-900">
                                            <x-icon.document class="w-4 h-4" /><span class="text-xs">Create</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex flex-col">
                                    <div class="min-w-full overflow-hidden overflow-x-scroll align-middle shadow">
                                        <x-table>
                                            <x-slot name="head">
                                                <thead class="px-3 text-sm text-center text-gray-900 bg-gray-300 border border-gray-50">
                                                    <tr class="font-semibold">
                                                        <th class="text-center uppercase border">work order no</th>
                                                        <th class="text-center uppercase border">Assign Worker</th>
                                                        <th class="text-center uppercase border">Date Started</th>
                                                        <th class="text-center uppercase border">Date Finished</th>
                                                        <th class="text-center uppercase border">Suppervised By</th>
                                                        <th class="text-center uppercase border">Suppervised Date</th>
                                                        <th class="text-center uppercase border">Approved By</th>
                                                        <th class="text-center uppercase border">Approved Date</th>
                                                        <th class="text-center uppercase border">Received By</th>
                                                        <th class="text-center uppercase border">Received Date</th>
                                                        <th class="text-center uppercase border">Status</th>
                                                    </tr>
                                                </thead>
                                            </x-slot>
                                            <?php $num = 1; ?>

                                            <x-slot name="body">
                                                @forelse ($work_orders as $key => $item)
                                                    <tr class="px-3 py-2 text-gray-500 border whitespace-nowrap">
                                                        <td class="px-3 py-2 border">{{ $num++.'.' }}</td>
                                                        <td class="px-3 py-2 border">
                                                            {{ $item['work_order_no'] }}
                                                          {{-- <img src="{{ Storage::disk('images')->url($item['image']) ?? '' }}" class="max-h-10" alt="actual_image"> --}}
                                                        </td>
                                                        <td class="px-3 py-2 border">{{ $item['assigned_worker'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['date_started'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['date_finished'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['supervised_by'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['supervised_date'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['approved_by'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['approved_date'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['received_by'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['received_date'] }}</td>
                                                        <td class="px-3 py-2 border">{{ $item['status'] }}</td>
                                                    </tr>
                                                @empty
                                                @endforelse
                                            </x-slot>
                                        </x-table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </section>


            </main>
        </div>
    </div>
</div>
