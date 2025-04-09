<footer>
    @php
        $iPod = stripos($_SERVER['HTTP_USER_AGENT'], 'iPod');
        $iPhone = stripos($_SERVER['HTTP_USER_AGENT'], 'iPhone');
        $iPad = stripos($_SERVER['HTTP_USER_AGENT'], 'iPad');
        $mac = stripos($_SERVER['HTTP_USER_AGENT'], 'Mac');
    @endphp
    <div class="bg-[conic-gradient(at_bottom_right,_var(--tw-gradient-stops))] from-blue-700 via-blue-800 to-gray-900">
        <div
            class="bg-[conic-gradient(at_bottom_right,_var(--tw-gradient-stops))] from-blue-700 via-blue-800 to-gray-900 border-t border-gray-200 mt-10">
            <div class="mx-auto w-full px-6 py-12 md:flex md:items-center md:justify-around lg:px-8">
                <div class="grid grid-cols-1 gap-10 md:order-2 md:grid-cols-3 md:gap-x-20 md:gap-y-4">
                    <div>
                        <h1 class="text-xl text-gray-300" data-aos="fade-right">Alamat</h1>
                        <ul role="list" class="mt-6 space-y-4 relative z-10">
                            <li data-aos="fade-right" data-aos-delay="100">
                                <a href="#" class="flex items-bottom space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 lg:w-10 text-gray-300 ">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Jl. KH Abdul Rochim No. 1, <br>
                                            Desa/Kelurahan Kuningan Barat, <br>
                                            Kec. Mampang Prapatan, <br>
                                            Kota Adm. Jakarta Selatan, <br>
                                            Provinsi DKI Jakarta, 12710
                                        </h1>
                                    </div>
                                    {{-- <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Jl. Sungai Ampal No.168, <br>
                                            RT. 54, Sumber Rejo, <br>
                                            Kec. Balikpapan Tengah, <br>
                                            Kota Balikpapan, <br>
                                            Kalimantan Timur 76114
                                        </h1>
                                    </div> --}}
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="300">
                                <a href="https://wa.me/62811599292" target="_blank"
                                    class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 lg:w-10 text-gray-300 flex-shrink-0" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.78.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31-.22.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z" />
                                    </svg>
                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            0811 599 292
                                        </h1>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="500">
                                <a href="mailto:cc.iconnet@iconpln.co.id" target="_blank"
                                    class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 lg:w-10 text-gray-300 flex-shrink-0" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h10.1q-.1.5-.1 1t.1 1H4l8 5 3.65-2.275q.35.325.763.563t.862.412L12 13 4 8v10h16V9.9q.575-.125 1.075-.35T22 9v9q0 .825-.588 1.413T20 20H4ZM4 6v12V6Zm15 2q-1.25 0-2.125-.875T16 5q0-1.25.875-2.125T19 2q1.25 0 2.125.875T22 5q0 1.25-.875 2.125T19 8Z" />
                                    </svg>
                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            cc.iconnet@iconpln.co.id
                                        </h1>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-xl text-gray-300" data-aos="fade-right">Tentang</h1>
                        <ul role="list" class="mt-6 space-y-4 relative z-10">
                            <li data-aos="fade-right" data-aos-delay="100">
                                <a href="/contact" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Kontak
                                        </h1>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="300">
                                <a href="/galery" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Galeri
                                        </h1>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="500">
                                <a href="/syaratketentuan" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Syarat & Ketentuan
                                        </h1>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="700">
                                <a href="/kebijakanprivasi" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Kebijakan Privasi
                                        </h1>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="900">
                                <a href="/payment" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Metode Pembayaran
                                        </h1>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h1 class="text-xl text-gray-300" data-aos="fade-right">Layanan Kami</h1>
                        <ul role="list" class="mt-6 space-y-4 relative z-10">
                            <li data-aos="fade-right" data-aos-delay="100">
                                <a href="/products" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Produk
                                        </h1>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="300">
                                <a href="/promo" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Promo
                                        </h1>
                                    </div>
                                </a>
                            </li>
                            <li data-aos="fade-right" data-aos-delay="500">
                                <a href="/area" class="flex items-center space-x-2 overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor"
                                        class="w-4 lg:w-4 text-gray-300 flex-shrink-0">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                    </svg>

                                    <div>
                                        <h1 class="text-sm font-medium text-gray-300">
                                            Cakupan Area
                                        </h1>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mt-8 md:order-1 md:mt-0 ">
                    <a data-aos="fade-down" data-aos-delay="100" href="#" class="flex-shrink-0">
                        <img class="block w-[10rem] mb-4" src="/assets/ICONNET-PUTIH.png">
                    </a>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-1">
                        <a data-aos="fade-right" data-aos-delay="300" target="_blank"
                            href="{{ $iPod || $iPhone || $iPad || $mac ? 'https://apps.apple.com/id/app/myicon/id1662266337' : 'https://play.google.com/store/apps/details?id=id.co.iconpln.icrm.customer' }}"
                            class="flex-shrink-0">
                            <img class="block mb-4" src="/assets/Logo-MyIcon+.png">
                        </a>
                        <a data-aos="fade-left" data-aos-delay="300" target="_blank"
                            href="{{ $iPod || $iPhone || $iPad || $mac ? 'https://apps.apple.com/us/app/pln-mobile/id1299581030' : 'https://play.google.com/store/apps/details?id=com.icon.pln123' }}"
                            class="flex-shrink-0">
                            <img class="block mb-4" src="/assets/Logo-PLN-Mobile.png">
                        </a>
                    </div>
                    <a data-aos="fade-up" data-aos-delay="500" href="#" class="flex-shrink-0 text-gray-300">
                        Semua Makin Mudah
                    </a>
                </div>
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 py-6 md:flex md:items-center md:justify-between lg:px-8">
            <div class="mt-8 md:order-1 md:mt-0">
                <p class="text-center text-xs leading-5 text-white">ICONNET Kalimantan &copy; 2024. All rights
                    reserved. <b>ICONNET</b>
                    powered by PT Indonesia Comnets Plus
                </p>
            </div>
        </div>
    </div>
</footer>
