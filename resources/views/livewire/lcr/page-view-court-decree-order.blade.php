<div class="min-h-full">
    <div class="flex flex-col min-h-0">
        <!-- Top nav-->
        <x-topbar-desktop>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="{{ route('user-dashboard',['user_id'=> auth()->user()->id]) }}"
                        class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                        Dashboard
                    </a>
                </div>
            </li>
            <li class="flex">
                <div class="flex items-center">
                    <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
                    </svg>
                    <a href="{{ route('court-decree-order/list',['user_id'=>auth()->user()->id]) }}" class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                        Court Decree/Order
                    </a>
                </div>
            </li>
        </x-topbar-desktop>

        <!-- Bottom section -->
        <div class="flex-1 min-h-0 overflow-hidden">
            <!-- Main area -->
            <main class="flex-1 min-w-0 border-t border-gray-200 xl:flex">

                <div class="order-first xl:block xl:flex-shrink-0">
                    <div class="relative flex flex-col h-full bg-gray-100 border-r border-gray-200 w-96">
                        <div class="p-4 space-y-6 divide-y divide-gray-200 sm:space-y-5">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Detailed Information</h3>
                                {{-- Details Here --}}
                            <div class="border-t border-gray-200">
                                <ul role="list" class="divide-y divide-gray-200">
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">LCR NUMBER :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['lcr_no'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">REGISTERED DATE :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['register_date'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">TYPE OF DOOCUMENT :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['document_type'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">SUBJECT PARTY/PARTIES :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['subject_name'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">CITIZENSHIP :</</h3>
                                                <p class="text-sm text-gray-500">{{ $data['subject_citizenship'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">PETITIONER :</</h3>
                                                <p class="text-sm text-gray-500">{{ $data['petitioner_name'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">PETITIONER CITIZENSHIP :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['petitioner_citizenship'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">NAME OF COURT :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['court_name'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">SPECIAL PROCEEDING NO. :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['special_proceeding_no'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">DATE ISSUED :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['date_issued'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">NAME OF JUDGE :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['judge_name'] }}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">REMARKS :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['remarks'] }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- More items... -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <section aria-labelledby="message-heading"
                    class="flex flex-col flex-1 h-full min-w-0 overflow-hidden xl:order-last">

                    <!-- RIGTH SIDE SPACE -->
                    <div class="flex-1 overflow-y-auto lg:block">
                        <div class="min-h-screen pb-6 bg-white shadow">
                            <div class="sm:items-baseline sm:justify-between">

                                <div class="p-4 space-y-6 divide-y divide-gray-200 sm:space-y-5">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">
                                            Image/Scanned Document
                                        </h3>
                                         {{--IMAGE/SCANNED DOCUMENTS--}}
                                        <img src="{{ asset('img/users/ijs_history.jpg') }}" alt="An image file"
                                    class="object-cover object-center w-full p-2">
                                </div>
                            </div>
                        </div>
                    </div>


                </section>

            </main>
        </div>
    </div>
</div>
