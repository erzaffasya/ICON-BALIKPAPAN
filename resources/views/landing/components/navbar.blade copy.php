<nav class="w-full bg-brands-primary z-50 fixed top-0" x-data="{ menuToggle: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex-1 flex items-center justify-between">
                <a href="/" class="flex-shrink-0">
                    <img class="block h-8 w-auto" src="/assets/icon-logo.png" alt="Your Company">
                </a>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4 items-center">
                        <a href="/"
                            class="rounded-md px-3 py-2 text-sm font-medium  hover:text-brands-secondary {{ request()->routeIs('landing') ? 'text-brands-secondary' : 'text-white' }}">Home</a>
                        <a href="/products"
                            class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('landing.product') ? 'text-brands-secondary' : 'text-white' }} hover:text-brands-secondary">Produk
                            & Add Ons </a>
                        <a href="/promo"
                            class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('landing.promo') ? 'text-brands-secondary' : 'text-white' }} hover:text-brands-secondary">Promo
                        </a>
                        <a href="/area"
                            class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('landing.area') ? 'text-brands-secondary' : 'text-white' }} hover:text-brands-secondary">Cakupan
                            Area</a>
                        <a href="/contact"
                            class="rounded-md px-3 py-2 text-sm font-medium {{ request()->routeIs('landing.contact') ? 'text-brands-secondary' : 'text-white' }} hover:text-brands-secondary">Hubungi
                            kami</a>
                        {{-- <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white bg-brands-secondary  hover:bg-sky-100 hover:text-brands-secondary hover:transition hover:duration-300 hover:ease-in">Mitra Penjualan</a> --}}
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex sm:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="menuToggle = !menuToggle "
                    class="inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-brands-secondary hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="menuToggle">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a href="/"
                class="block rounded-md px-3 py-2 text-base font-medium text-white {{ request()->routeIs('landing') ? 'bg-gray-900' : '' }} hover:bg-gray-700">Home</a>
            <a href="/products"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 {{ request()->routeIs('landing.product') ? 'bg-gray-900' : '' }} hover:bg-gray-700 hover:text-white">Produk
                & Add Ons</a>
            <a href="/promo"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 {{ request()->routeIs('landing.promo') ? 'bg-gray-900' : '' }} hover:bg-gray-700 hover:text-white">Promo</a>
            <a href="/area"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 {{ request()->routeIs('landing.area') ? 'bg-gray-900' : '' }} hover:bg-gray-700 hover:text-white">Cakupan
                Area</a>
            <a href="/contact"
                class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 {{ request()->routeIs('landing.contact') ? 'bg-gray-900' : '' }} hover:bg-gray-700 hover:text-white">Hubungi
                kami</a>
            {{-- <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-white bg-brands-secondary  hover:bg-sky-100 hover:text-brands-secondary hover:transition hover:duration-300 hover:ease-in">Mitra Penjualan</a> --}}
        </div>
    </div>
</nav>
