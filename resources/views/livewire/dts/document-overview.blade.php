<div class="flex h-full flex-col">
    <!-- Top nav-->

    <!-- Bottom section -->
    <div class="flex min-h-0 flex-1 overflow-hidden">
        <!-- Main area -->
        <main class="min-w-0 flex-1 border-t border-gray-200 xl:flex">
            <section aria-labelledby="message-heading"
                class="flex h-full min-w-0 flex-1 flex-col overflow-hidden xl:order-last">
                <!-- Top section -->
                <div class="flex-shrink-0 border-b border-gray-200 bg-white">
                    <!-- Toolbar-->
                    <div class="flex h-16 flex-col justify-center">
                        <div class="px-4 sm:px-6 lg:px-8">
                            <div class="flex justify-between py-3">
                                <!-- Left buttons -->
                                <div>
                                    <span
                                        class="relative z-0 inline-flex rounded-md shadow-sm sm:space-x-3 sm:shadow-none">
                                        <span class="inline-flex space-x-2">
                                            <button type="button"
                                                class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600">
                                                <x-icon.arrow-curve-left class="mr-2.5 h-5 w-5 text-gray-400" />
                                                <span>Back</span>
                                            </button>

                                            <button type="button"
                                                class="relative -ml-px hidden rounded-md items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 sm:inline-flex">
                                                <x-icon.unlock class="mr-2.5 h-5 w-5 text-gray-400" />
                                                <span>Unlock</span>
                                            </button>

                                            <button type="button"
                                                class="relative -ml-px hidden rounded-md items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 sm:inline-flex">
                                                <x-icon.arrows-right-left class="mr-2.5 h-5 w-5 text-gray-400" />
                                                <span>Transfer</span>
                                            </button>

                                            <button type="button"
                                                class="relative -ml-px hidden rounded-md items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 sm:inline-flex">
                                                <x-icon.terminal class="mr-2.5 h-5 w-5 text-gray-400" />
                                                <span>Terminal</span>
                                            </button>

                                            <button type="button"
                                                class="relative -ml-px hidden rounded-md items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 sm:inline-flex">
                                                <x-icon.arrow-up-on-square class="mr-2.5 h-5 w-5 text-gray-400" />
                                                <span>Release</span>
                                            </button>


                                            <button type="button"
                                                class="relative hidden items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600 sm:inline-flex">
                                                <!-- Heroicon name: solid/folder-download -->
                                                <svg class="mr-2.5 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path
                                                        d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z">
                                                    </path>
                                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M10 9v4m0 0l-2-2m2 2l2-2"></path>
                                                </svg>
                                                <span>Move</span>
                                            </button>

                                        </span>

                                    </span>
                                </div>

                                <!-- Right buttons -->
                                <nav aria-label="Pagination">
                                    <span class="relative z-0 inline-flex rounded-md shadow-sm">
                                        <a href="#"
                                            class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600">
                                            <span class="sr-only">Next</span>
                                            <!-- Heroicon name: solid/chevron-up -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#"
                                            class="relative -ml-px inline-flex items-center rounded-r-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600">
                                            <span class="sr-only">Previous</span>
                                            <!-- Heroicon name: solid/chevron-down -->
                                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content -->
                <div class="min-h-0 flex-1 overflow-y-auto">
                    <div class="bg-white pt-5 pb-6 shadow">
                        <div class="px-4 sm:flex sm:items-baseline sm:justify-between sm:px-6 lg:px-8">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                <div class="px-4 py-5 sm:px-6">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900">Document Title</h3>
                                    <p class="mt-1 max-w-2xl text-sm text-gray-500">Document Type</p>
                                </div>
                                <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                                    <dl class="sm:divide-y sm:divide-gray-200">
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Tracking Number :</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                2022-215-5254-521</dd>
                                        </div>
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Title :</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Title of the
                                                document</dd>
                                        </div>
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Type :</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Type of
                                                document</dd>
                                        </div>
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">For :</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Your
                                                Infprmation</dd>
                                        </div>
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Remarks</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Fugiat ipsum
                                                ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa
                                                consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit
                                                nulla mollit nostrud in ea officia proident. Irure nostrud pariatur
                                                mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                                        </div>
                                        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                            <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                                <ul role="list"
                                                    class="border border-gray-200 rounded-md divide-y divide-gray-200">
                                                    <li
                                                        class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <!-- Heroicon name: solid/paper-clip -->
                                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                resume_back_end_developer.pdf </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <a href="#"
                                                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                                                Download </a>
                                                        </div>
                                                    </li>
                                                    <li
                                                        class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
                                                        <div class="w-0 flex-1 flex items-center">
                                                            <!-- Heroicon name: solid/paper-clip -->
                                                            <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            <span class="ml-2 flex-1 w-0 truncate">
                                                                coverletter_back_end_developer.pdf </span>
                                                        </div>
                                                        <div class="ml-4 flex-shrink-0">
                                                            <a href="#"
                                                                class="font-medium text-indigo-600 hover:text-indigo-500">
                                                                Download </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>


                            <div
                                class="mt-4 flex items-center justify-between sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:justify-start">
                                <div x-data="{open:false}" class="relative ml-3 inline-block text-left">
                                    <div>
                                        <button x-on:click="open = !open" type="button"
                                            class="-my-2 flex items-center rounded-full bg-white p-2 text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-600">
                                            <x-icon.dots-vertical class="h-5 w-5" />
                                        </button>
                                    </div>

                                    <div x-show="open" x-transition.duration.500ms
                                        class="absolute right-0 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                        <div class="py-1" role="none">
                                            <button type="button"
                                                class="flex w-full justify-between px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="menu-3-item-0">
                                                <span>Option 1</span>
                                            </button>
                                            <a href="#" class="flex justify-between px-4 py-2 text-sm text-gray-700"
                                                role="menuitem" tabindex="-1" id="menu-3-item-1">
                                                <span>Option 2</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Message list-->
            <aside class="xl:order-first xl:block xl:flex-shrink-0">
                <div class="relative flex h-full w-96 flex-col border-r border-gray-200 bg-gray-100">
                    <div class="flex-shrink-0">
                        <div class="flex h-16 flex-col justify-center bg-white px-6">
                            <div class="flex items-baseline space-x-3">
                                <h2 class="text-lg font-medium text-gray-900">Tracking Number:</h2>
                                <p class="text-sm font-medium text-gray-500">2022-254-254-5524</p>
                            </div>
                        </div>
                        <div
                            class="border-t border-b border-gray-200 bg-gray-50 px-6 py-2 text-sm font-medium text-gray-500 flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-5 w-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                            <span class="pl-2">PAPER TRAIL</span>
                        </div>
                    </div>
                    <nav class="min-h-0 flex-1 overflow-y-auto">
                        <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                            <div class="px-4 py-5 sm:px-6">
                                <!-- Activity Feed -->
                                <div class="mt-6 flow-root">
                                    <ul role="list" class="-mb-8">
                                        <li>
                                            <div class="relative pb-8">
                                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                    aria-hidden="true"></span>
                                                <div class="relative flex space-x-3">
                                                    <div>
                                                        <span
                                                            class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
                                                            <!-- Heroicon name: solid/user -->
                                                            <svg class="w-5 h-5 text-white"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                        <div>
                                                            <p class="text-sm text-gray-500">Applied to <a href="#"
                                                                    class="font-medium text-gray-900">Front End
                                                                    Developer</a></p>
                                                        </div>
                                                        <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                            <time datetime="2020-09-20">Sep 20</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="relative pb-8">
                                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                    aria-hidden="true"></span>
                                                <div class="relative flex space-x-3">
                                                    <div>
                                                        <span
                                                            class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                            <!-- Heroicon name: solid/thumb-up -->
                                                            <svg class="w-5 h-5 text-white"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                        <div>
                                                            <p class="text-sm text-gray-500">Advanced to phone screening
                                                                by <a href="#" class="font-medium text-gray-900">Bethany
                                                                    Blake</a></p>
                                                        </div>
                                                        <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                            <time datetime="2020-09-22">Sep 22</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="relative pb-8">
                                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                    aria-hidden="true"></span>
                                                <div class="relative flex space-x-3">
                                                    <div>
                                                        <span
                                                            class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                            <!-- Heroicon name: solid/check -->
                                                            <svg class="w-5 h-5 text-white"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                        <div>
                                                            <p class="text-sm text-gray-500">Completed phone screening
                                                                with <a href="#"
                                                                    class="font-medium text-gray-900">Martha Gardner</a>
                                                            </p>
                                                        </div>
                                                        <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                            <time datetime="2020-09-28">Sep 28</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="relative pb-8">
                                                <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                                    aria-hidden="true"></span>
                                                <div class="relative flex space-x-3">
                                                    <div>
                                                        <span
                                                            class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                            <!-- Heroicon name: solid/thumb-up -->
                                                            <svg class="w-5 h-5 text-white"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                        <div>
                                                            <p class="text-sm text-gray-500">Advanced to interview by <a
                                                                    href="#" class="font-medium text-gray-900">Bethany
                                                                    Blake</a></p>
                                                        </div>
                                                        <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                            <time datetime="2020-09-30">Sep 30</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="relative pb-8">
                                                <div class="relative flex space-x-3">
                                                    <div>
                                                        <span
                                                            class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                            <!-- Heroicon name: solid/check -->
                                                            <svg class="w-5 h-5 text-white"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                        <div>
                                                            <p class="text-sm text-gray-500">Completed interview with <a
                                                                    href="#" class="font-medium text-gray-900">Katherine
                                                                    Snyder</a></p>
                                                        </div>
                                                        <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                            <time datetime="2020-10-04">Oct 4</time>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-6 flex flex-col justify-stretch">
                                    <button type="button"
                                        class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Advance
                                        to offer</button>
                                </div>
                            </div>
                        </section>
                    </nav>
                </div>
            </aside>
        </main>
    </div>
</div>
