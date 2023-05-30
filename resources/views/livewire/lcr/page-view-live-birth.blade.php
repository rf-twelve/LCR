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
                    <a href="{{ route('live-birth/list',['user_id'=>auth()->user()->id]) }}" class="ml-4 text-sm font-medium text-white hover:text-blue-200">
                        Live Birth
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
                                                <h3 class="text-sm font-medium">CHILD FIRST NAME :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['child_first_name'] }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">CHILD MIDDLE NAME :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['child_middle_name'] }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">CHILD LAST NAME :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['child_last_name'] }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">SEX/BIRTH DATE/TIME :</h3>
                                                <p class="text-sm text-gray-500">
                                                    {{ $data['sex'].'/'.$data['birth_date'].'/'.$data['birth_date_time_time'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">PLACE OF BIRTH :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['birth_place'] }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">TYPE OF BIRTH/BIRTH ORDER :</h3>
                                                <p class="text-sm text-gray-500">
                                                    {{ $data['birth_type'].'/'.$data['birth_order'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">MOTHER'S NAME :</h3>
                                                <p class="text-sm text-gray-500">
                                                    {{ $data['mother_first_name'].'/'.$data['mother_middle_name'].'/'.$data['mother_last_name'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">AGE/NATIONALITY/RELIGION :</h3>
                                                <p class="text-sm text-gray-500">
                                                    {{ $data['mother_age'].'/'.$data['mother_nationality'].'/'.$data['mother_religion'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">FATHER'S NAME :</h3>
                                                <p class="text-sm text-gray-500">
                                                    {{ $data['father_first_name'].'/'.$data['father_middle_name'].'/'.$data['father_last_name'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">AGE/NATIONALITY/RELIGION :</h3>
                                                <p class="text-sm text-gray-500">
                                                    {{ $data['father_age'].'/'.$data['father_nationality'].'/'.$data['father_religion'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">PARENTS MARRIAGE DATE :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['parents_marriage_date'] }}</p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1 space-y-1">
                                                <h3 class="text-sm font-medium">PARENTS MARRIAGE PLACE :</h3>
                                                <p class="text-sm text-gray-500">{{ $data['parents_marriage_place'] }}</p>
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
