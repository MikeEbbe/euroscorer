<!-- Navigation bar -->
<div class="w-full border-b-2 border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-b-2 dark:border-gray-700">
    <div class="flex flex-col max-w-screen-xl px-4 mx-auto lg:justify-between lg:flex-row lg:px-6 lg:px-8">

        <div class="lg:hidden p-4 flex flex-row justify-end">
            <!-- Hamburger menu button -->
            <button class="lg:hidden rounded-lg text-gray-900 dark:text-white">
                <svg id="hamburger-icon" fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 ">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                    <path class="hidden" fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation links -->
        <nav id="navigation" class="flex-col flex-grow pt-0 pb-3 lg:py-3 hidden lg:flex lg:flex-row">
            <!-- Generate menu items for each year -->
            @foreach($editions as $edition)
            <div class="dropdown-container relative">
                <div class="toggle-dropdown">
                    <button
                        class="dropdown flex flex-row w-full px-4 py-2 mt-2 text-sm font-medium rounded-lg lg:w-auto lg:inline lg:mt-0 lg:ml-4 text-gray-900 lg:hover:text-blue-700 dark:text-white lg:dark:hover:text-blue-500">
                        <a href="/{{ $edition->year }}/final">{{ $edition->city }} {{ $edition->year }}</a>
                        <svg fill="currentColor" viewBox="0 0 20 20"
                            class="dropdown-icon inline lg:w-4 lg:h-4 w-6 w-6 mt-0 ml-1 transition-transform duration-200 transform lg:-mt-1">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div
                    class="dropdown-menu-items hidden relative lg:absolute w-full lg:origin-top-left lg:left-1/2 lg:transform lg:-translate-x-1/2 rounded-md lg:w-36">
                    <div
                        class="px-4 py-2 lg:bg-gray-50 bg-gray-200 rounded-md lg:shadow-lg z-10 divide-y divide-gray-200 lg:dark:bg-gray-800 dark:bg-gray-700 dark:divide-gray-700">
                        <a class="block py-3 lg:mt-0 text-sm font-medium text-gray-800 hover:text-blue-700 dark:text-gray-200 dark:hover:text-blue-500"
                            href="/{{ $edition->year }}/final">Finale</a>
                        <a class="block py-3 lg:mt-0 text-sm font-medium text-gray-800 hover:text-blue-700 dark:text-gray-200 dark:hover:text-blue-500"
                            href="/{{ $edition->year }}/semi-final/1">Halve Finale 1</a>
                        <a class="block py-3 lg:mt-0 text-sm font-medium text-gray-800 hover:text-blue-700 dark:text-gray-200 dark:hover:text-blue-500"
                            href="/{{ $edition->year }}/semi-final/2">Halve Finale 2</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="lg:ml-auto flex flex-col lg:flex-row">
                <!-- Logout button -->
                <a class="flex flex-row w-full px-4 py-2 mt-2 text-sm font-medium text-left text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500 lg:w-auto lg:inline lg:mt-0 lg:ml-4"
                    href="/logout">Uitloggen</a>
                <!-- Dark/Light mode button -->
                <button id="toggle-mode" type="button"
                    class="flex text-gray-500 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-lg text-sm py-2 px-4 lg:px-2 mt-2 lg:mt-0">
                    <svg id="toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="toggle-light-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

        </nav>
    </div>
</div>