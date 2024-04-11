<!-- Navigation bar -->
<div
    class="xl:pl-[calc(100vw-100%)] w-full border-b-2 border-gray-200 bg-gray-50 dark:bg-gray-800 dark:border-b-2 dark:border-gray-700">
    <div class="flex flex-col max-w-screen-xl px-4 mx-auto xl:justify-between xl:flex-row xl:px-6 xl:px-8">

        <div class="xl:hidden p-4 flex flex-row justify-end">
            <!-- Hamburger menu button -->
            <button class="xl:hidden rounded-lg text-gray-900 dark:text-white">
                <x-icon name="bars-3-bottom-right" id="hamburger-open-icon" class="w-6 h-6" />
                <x-icon name="x-mark" id="hamburger-close-icon" class="w-6 h-6 hidden" />
            </button>
        </div>

        <!-- Navigation links -->
        <nav id="navigation" class="flex-col flex-grow pt-0 pb-3 xl:py-3 hidden xl:flex xl:flex-row">
            <!-- Generate menu items for each year -->
            @foreach($editions as $edition)
            <div class="dropdown-container relative">
                <div class="toggle-dropdown">
                    <button
                        class="dropdown flex flex-row w-full px-4 py-2 mt-2 text-sm font-medium rounded-lg xl:w-auto xl:inline xl:mt-0 xl:ml-4 text-gray-900 xl:hover:text-blue-700 dark:text-white xl:dark:hover:text-blue-500">
                        <a href="/{{ $edition->year }}/final">{{ $edition->city }} {{ $edition->year }}</a>
                        <x-icon name="chevron-down" class="dropdown-icon inline xl:w-4 xl:h-4 w-6 w-6 mt-0 ml-1 transition-transform duration-200 transform xl:-mt-1" />
                    </button>
                </div>
                <div
                    class="dropdown-menu-items hidden relative xl:absolute w-full xl:origin-top-left xl:left-1/2 xl:transform xl:-translate-x-1/2 rounded-md xl:w-36">
                    <div
                        class="px-4 py-2 xl:bg-gray-50 bg-gray-200 rounded-md xl:shadow-lg z-10 divide-y divide-gray-200 xl:dark:bg-gray-800 dark:bg-gray-700 dark:divide-gray-700">
                        <a class="block py-3 xl:mt-0 text-sm font-medium text-gray-800 hover:text-blue-700 dark:text-gray-200 dark:hover:text-blue-500"
                            href="/{{ $edition->year }}/final">Finale</a>
                        <a class="block py-3 xl:mt-0 text-sm font-medium text-gray-800 hover:text-blue-700 dark:text-gray-200 dark:hover:text-blue-500"
                            href="/{{ $edition->year }}/semi-final/1">Halve Finale 1</a>
                        <a class="block py-3 xl:mt-0 text-sm font-medium text-gray-800 hover:text-blue-700 dark:text-gray-200 dark:hover:text-blue-500"
                            href="/{{ $edition->year }}/semi-final/2">Halve Finale 2</a>
                        <a class="block py-3 xl:mt-0 text-sm font-medium text-gray-800 hover:text-blue-700 dark:text-gray-200 dark:hover:text-blue-500"
                            href="/{{ $edition->year }}/stats">Statistieken</a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="xl:ml-auto flex flex-col xl:flex-row">
                <!-- Logout button -->
                <span class="flex flex-row w-full px-4 py-2 mt-2 text-sm font-medium text-left text-gray-900 dark:text-white xl:w-auto xl:inline xl:mt-0">Ingelogd als {{ $username }}</span>
                <a class="flex flex-row w-full px-4 py-2 mt-2 text-sm font-medium text-left text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500 xl:w-auto xl:inline xl:mt-0"
                    href="/logout">Uitloggen</a>
                <!-- Dark/Light mode button -->
                <button id="toggle-mode" type="button"
                    class="flex text-gray-500 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-lg text-sm py-2 px-4 xl:px-2 mt-2 xl:mt-0">
                    <x-icon name="moon" solid id="toggle-dark-icon" class="w-5 h-5 hidden" />
                    <x-icon name="sun" solid id="toggle-light-icon" class="w-5 h-5" />
                </button>
            </div>

        </nav>
    </div>
</div>