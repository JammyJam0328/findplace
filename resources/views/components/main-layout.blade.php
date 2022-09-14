<x-app>
    <x-main.nav-bar />
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 mt-5">
        <div class="mx-auto max-w-5xl">
            {{ $slot }}
        </div>
    </div>
    <x-main.footer />
</x-app>
