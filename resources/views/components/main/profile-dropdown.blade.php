<div id="profileDropdown"
    x-data="{ open: false }"
    class="relative ml-3">
    <div>
        <button type="button"
            x-on:click="open =! open"
            class="flex rounded-full bg-white text-sm  space-x-1 items-center"
            id="user-menu-button"
            aria-expanded="false"
            aria-haspopup="true">
            <span>Account</span>
            <svg xmlns="http://www.w3.org/2000/svg"
                fill="none"
                :class="{ 'rotate-180 ': open }"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="w-4 h-4 text-gray-600 duration-150 ease-in-out">
                <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </div>
    <div x-cloak
        x-show="open"
        x-on:click.away="open = false"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="user-menu-button"
        tabindex="-1">
        <a href="#"
            class="block px-4 py-2 text-sm text-gray-700"
            role="menuitem"
            tabindex="-1"
            id="user-menu-item-0">Your Profile</a>
        <a href="#"
            class="block px-4 py-2 text-sm text-gray-700"
            role="menuitem"
            tabindex="-1"
            id="user-menu-item-1">Settings</a>
        <a href="#"
            class="block px-4 py-2 text-sm text-gray-700"
            role="menuitem"
            tabindex="-1"
            id="user-menu-item-2">Sign out</a>
    </div>
</div>
