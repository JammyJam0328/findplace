<x-main-layout>
    <div class="">
        <div class="sm:flex sm:justify-between ">
            <div class="pt-4 sm:pt-20  sm:w-1/2">
                <div class="space-y-2">
                    <h1 class="text-5xl font-bold">
                        Find Place
                    </h1>
                    <x-main.categories-carousel />
                    <p class="text-gray-500">
                        Find place to eat, drink, and everything else near you. Get started and discover the best places
                        around you.
                    </p>
                </div>
                <div class="mt-7">
                    <div class="flex space-x-2 items-end">
                        <input type="text"
                            placeholder="Search for place"
                            class="rounded-xl  w-full border placeholder:text-gray-400 border-gray-400 focus:ring-0 focus:outline-none focus:border-gray-400"
                            name="search"
                            id="search">
                        <button type="button"
                            class="inline-flex duration-150 ease-in-out items-center rounded-xl border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div>
                <x-undraw.find-place />
            </div>
        </div>
        <div class="my-10">
            <x-main.categories-list />
        </div>
    </div>
</x-main-layout>
