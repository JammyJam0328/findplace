@php
$navigations = [
    [
        'name' => 'Home',
        'url' => '/',
    ],
    [
        'name' => 'Bookmarks',
        'url' => route('bookmarks'),
    ],
    [
        'name' => 'About',
        'url' => route('about'),
    ],
];
@endphp

<div class="sticky top-0">
    <nav id="navigation"
        x-data="{ mobileNav: false, y: null }"
        x-init="y = window.scrollY"
        x-on:scroll.window="y = window.scrollY"
        class="bg-white "
        :class="{ ' bg-opacity-75 backdrop-blur-sm shadow-sm': y > 0 }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 justify-between">
                <div class="flex">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-8 w-auto lg:hidden"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        @foreach ($navigations as $navigation)
                            <a href="{{ $navigation['url'] }}"
                                class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                                {{ $navigation['name'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center">
                    @auth
                        <x-main.profile-dropdown />
                    @endauth
                    @guest
                        <div class="flex space-x-2 items-center">
                            <a href="{{ route('login') }}"
                                type="button"
                                class="inline-flex items-center rounded-xl duration-150 ease-in-out border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Login
                            </a>
                            <a href="{{ route('register') }}"
                                type="button"
                                class="inline-flex items-center rounded-xl duration-150 ease-in-out border border-transparent bg-indigo-600 px-3 py-2 text-sm font-medium leading-4 text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Sign up
                            </a>
                        </div>
                    @endguest
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button"
                        x-on:click="mobileNav = true"
                        class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>

                        <svg class="block h-6 w-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="sm:hidden"
            id="mobile-menu">
            <div x-cloak
                x-show="mobileNav"
                class="relative z-10"
                aria-labelledby="slide-over-title"
                role="dialog"
                aria-modal="true">
                <div class="fixed inset-0"
                    x-cloak
                    x-show="mobileNav"></div>
                <div class="fixed inset-0 overflow-hidden">
                    <div class="absolute inset-0 overflow-hidden">
                        <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                            <div x-cloak
                                x-show="mobileNav"
                                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:enter-start="translate-x-full"
                                x-transition:enter-end="translate-x-0"
                                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                                x-transition:leave-start="translate-x-0"
                                x-transition:leave-end="translate-x-full"
                                class="pointer-events-auto w-screen max-w-md">
                                <div class="flex h-full flex-col overflow-y-scroll bg-white py-6 shadow-xl">
                                    <div class="px-4 sm:px-6">
                                        <div class="flex items-start justify-between">
                                            <h2 class="text-lg font-medium text-gray-900"
                                                id="slide-over-title">
                                                Find Place
                                            </h2>
                                            <div class="ml-3 flex h-7 items-center">
                                                <button type="button"
                                                    x-on:click="mobileNav = false"
                                                    class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                    <span class="sr-only">Close panel</span>
                                                    <!-- Heroicon name: outline/x-mark -->
                                                    <svg class="h-6 w-6"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        fill="none"
                                                        viewBox="0 0 24 24"
                                                        stroke-width="1.5"
                                                        stroke="currentColor"
                                                        aria-hidden="true">
                                                        <path stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative mt-6 flex-1 px-4 sm:px-6">
                                        <div class="absolute inset-0 px-4 sm:px-6">
                                            <!-- This example requires Tailwind CSS v2.0+ -->
                                            <nav class="space-y-1"
                                                aria-label="Sidebar">

                                                @foreach ($navigations as $navigation)
                                                    <a href="{{ $navigation['url'] }}"
                                                        class="text-gray-600 hover:bg-gray-50 hover:text-gray-900 flex items-center px-3 py-2 text-sm font-medium rounded-md">
                                                        <span class="truncate">
                                                            {{ $navigation['name'] }}
                                                        </span>
                                                    </a>
                                                @endforeach
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</div>
