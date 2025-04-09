@if (Route::current()->getName() == 'landing' || Route::current()->getName() == 'landing.area')
    <header class="w-full fixed top-0 z-40  transition duration-500 ease-in-out" x-data="navbar"
        :class="{ 'bg-white/40 backdrop-blur': !atTop, 'bg-white shadow-lg ': atTop }">
    @else
        <header class="w-full fixed top-0 z-50  transition duration-500 ease-in-out" x-data="navbar"
            :class="{ 'bg-opacity-0 backdrop-blur': !atTop, 'bg-brands-primary shadow-lg ': atTop }">
@endif
<div class="max-w-7xl mx-auto">
    <nav class="flex items-center justify-between py-4 px-3 md:p-6 lg:px-8"
        @scroll.window="atTop = (window.pageYOffset < 50) ? false: true" aria-label="Global">
        <div class="flex relative lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <img class="h-12 w-auto"
                    src="{{ Route::current()->getName() == 'landing' || Route::current()->getName() == 'landing.area' ? '/assets/iconnet-logo.png' : '/assets/ICONNET-PUTIH.png' }}"
                    alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <ul class="flex space-x-5 items-center">
                <li class="group px-4 relative">
                    <a href="/"
                        class="text-sm flex space-x-3 items-center {{ Route::current()->getName() == 'landing' || Route::current()->getName() == 'landing.area' ? 'text-gray-900' : 'text-white' }} hover:text-brands-secondary font-medium">
                        <span>Beranda</span>
                    </a>
                </li>
                <li class="group px-4 relative">
                    <a href="#"
                        class="text-sm flex space-x-3 items-center {{ Route::current()->getName() == 'landing' || Route::current()->getName() == 'landing.area' ? 'text-gray-900' : 'text-white' }} hover:text-brands-secondary font-medium">
                        <span>Produk & Promo</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </a>
                    <div
                        class="invisible group-hover:visible absolute min-w-[12rem] bg-white border border-gray-300 overflow-hidden top-5 -left-6 rounded-lg shadow-xl z-10">
                        <ul>
                            <a href="/products">
                                <li class="py-2 px-3 group hover:bg-gray-100">
                                    Produk
                                </li>
                            </a>
                            <a href="/promo">
                                <li class="py-2 px-3 group hover:bg-gray-100">
                                    Promo
                                </li>
                            </a>
                        </ul>
                    </div>
                </li>
                <li class="group px-4 relative">
                    <a href="/area"
                        class="text-sm flex space-x-3 items-center {{ Route::current()->getName() == 'landing' || Route::current()->getName() == 'landing.area' ? 'text-gray-900' : 'text-white' }} hover:text-brands-secondary font-medium">
                        <span>Cakupan Area</span>
                    </a>
                </li>
                <li class="group px-4 relative">
                    <a href="/contact"
                        class="text-sm flex space-x-3 items-center {{ Route::current()->getName() == 'landing' || Route::current()->getName() == 'landing.area' ? 'text-gray-900' : 'text-white' }} hover:text-brands-secondary font-medium">
                        <span>Hubungi Kami</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="pr-4 lg:hidden">
            <button type="button" @click="modal = true">
                <x-icon name="bars-3-bottom-right"
                    class="{{ Route::current()->getName() == 'landing' || Route::current()->getName() == 'landing.area' ? '' : 'text-white' }}" />
            </button>
        </div>
    </nav>
</div>
<div x-show="modal" class="w-full absolute h-screen bg-black/50 backdrop-blur p-5  z-50">
    <div class="w-full bg-white p-4 rounded">
        <div class="flex justify-end">
            <button type="button" @click="modal = false">
                <x-icon name="x-circle" class="h-7 w-7 text-gray-400" />
            </button>
        </div>
        <div class="w-full p-t-5 flex flex-col">
            <a href="/" class="w-full flex-1 py-4 flex justify-between items-center">
                <span>Beranda</span>
                <x-icon name="chevron-right" class="text-gray-300" />
            </a>
            <a href="/products" class="w-full flex-1 py-4 flex justify-between items-center">
                <span>Produk</span>
                <x-icon name="chevron-right" class="text-gray-300" />
            </a>
            <a href="/promo" class="w-full flex-1 py-4 flex justify-between items-center">
                <span>Promo</span>
                <x-icon name="chevron-right" class="text-gray-300" />
            </a>
            <a href="/area" class="w-full flex-1 py-4 flex justify-between items-center">
                <span>Cakupan Area</span>
                <x-icon name="chevron-right" class="text-gray-300" />
            </a>
            <a href="/contact" class="w-full flex-1 py-4 flex justify-between items-center">
                <span>Hubungi Kami</span>
                <x-icon name="chevron-right" class="text-gray-300" />
            </a>
        </div>
    </div>
</div>
</header>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('navbar', () => ({
            open: false,
            atTop: false,
            modal: false,
            toggle() {
                this.open = !this.open
            },
            modalToggle() {
                this.modal = !this.modal
            }
        }))
    })
</script>
