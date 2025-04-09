@extends('landing.layouts.default')
@section('content')
    <div class="w-full h-[20rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white" data-aos="fade-down">HUBUNGI KAMI</h1>
                <div class="max-w-4xl mx-auto px-5 mt-4" data-aos="fade-up">
                    <p class="text-white mg:text-lg">ICONNET adalah sebuah internet provider baru yang dulunya bernama
                        Stroomnet. ICONNET Bangkit Bersatu Untuk Indonesia, dengan menjunjung tinggi nilai-nilai
                        Nasionalisme, ICONNET berniat memberikan yang terbaik untuk masyarakat Indonesia</p>
                </div>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1560264418-c4445382edbc?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
            alt="" class="h-full w-full object-cover object-center">
    </div>
    <div class="max-w-7xl mx-auto py-10 px-5">
        <div class="grid grid-cols-1 gap-2 md:grid-cols-2 place-content-center">
            <!-- call center -->
            <a data-aos="fade-up" data-aos-delay="100" href="tel:150678"
                class="p-4 bg-gray-100 rounded-xl flex items-center space-x-4 group hover:bg-gradient-to-l from-blue-700 via-blue-800 to-gray-900 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M5.5 7a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0ZM8 3a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm7.5 5a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM17 5a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM4.25 13A2.25 2.25 0 0 0 2 15.25v.278a2.073 2.073 0 0 0 .014.208 4.487 4.487 0 0 0 .778 2.07C3.61 18.974 5.172 20 8 20c2.828 0 4.39-1.025 5.208-2.195a4.484 4.484 0 0 0 .778-2.07 2.992 2.992 0 0 0 .014-.207v-.278A2.25 2.25 0 0 0 11.75 13h-7.5Zm-.75 2.507v-.257a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 .75.75v.257l-.007.08a2.986 2.986 0 0 1-.514 1.358C11.486 17.65 10.422 18.5 8 18.5s-3.486-.85-3.98-1.555a2.986 2.986 0 0 1-.513-1.359 1.527 1.527 0 0 1-.007-.079Zm14.692-1.512.476-1.205c.242-.614.92-.933 1.548-.728l.431.141c.724.237 1.326.806 1.35 1.569.1 3.11-2.476 7.583-5.213 9.055-.673.362-1.468.123-2.035-.391l-.337-.305a1.253 1.253 0 0 1-.142-1.706l.8-1.01c.29-.367.767-.53 1.22-.42l1.292.313c1.103-.73 1.694-1.756 1.774-3.079l-.917-.964a1.203 1.203 0 0 1-.247-1.27Z" />
                </svg>
                <div>
                    <p class="text-gray-700 group-hover:text-white">Call Center</p>
                    <h1 class="text-lg lg:text-2xl font-medium text-gray-900 group-hover:text-white">150678</h1>
                </div>
            </a>
            <!-- Whatsapp -->
            <a data-aos="fade-up" data-aos-delay="300" href="https://wa.me/62811599292" target="_blank"
                class="p-4 bg-gray-100 rounded-xl flex items-center space-x-4 group hover:bg-gradient-to-l from-green-200 to-green-500 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M19.05 4.91A9.816 9.816 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-2.65-1.03-5.14-2.9-7.01zm-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31a8.264 8.264 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24 2.2 0 4.27.86 5.82 2.42a8.183 8.183 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23zm4.52-6.16c-.25-.12-1.47-.72-1.69-.81-.23-.08-.39-.12-.56.12-.17.25-.64.81-.78.97-.14.17-.29.19-.54.06-.25-.12-1.05-.39-1.99-1.23-.74-.66-1.23-1.47-1.38-1.72-.14-.25-.02-.38.11-.51.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31-.22.25-.86.85-.86 2.07 0 1.22.89 2.4 1.01 2.56.12.17 1.75 2.67 4.23 3.74.59.26 1.05.41 1.41.52.59.19 1.13.16 1.56.1.48-.07 1.47-.6 1.67-1.18.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28z" />
                </svg>
                <div>
                    <p class="text-gray-700 group-hover:text-white">Whatsapp</p>
                    <h1 class="text-lg lg:text-2xl font-medium text-gray-900 group-hover:text-white">0811 599 292
                    </h1>
                </div>
            </a>
            <!-- Instagram -->
            <a data-aos="fade-up" data-aos-delay="500" href="https://www.instagram.com/iconnet.kalimantan/" target="_blank"
                class="p-4 bg-gray-100 rounded-xl flex items-center space-x-4 group hover:bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3Z" />
                </svg>
                <div>
                    <p class="text-gray-700 group-hover:text-white">Instagram</p>
                    <h1 class="text-lg lg:text-2xl font-medium text-gray-900 group-hover:text-white">@iconnet.kalimantan
                    </h1>
                </div>
            </a>
            <!-- Email -->
            <a data-aos="fade-up" data-aos-delay="700" href="mailto:cc.iconnet@iconpln.co.id"
                class="p-4 bg-gray-100 rounded-xl flex items-center space-x-4 group hover:bg-gradient-to-l from-blue-700 via-blue-800 to-gray-900 overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M4 20q-.825 0-1.413-.588T2 18V6q0-.825.588-1.413T4 4h10.1q-.1.5-.1 1t.1 1H4l8 5 3.65-2.275q.35.325.763.563t.862.412L12 13 4 8v10h16V9.9q.575-.125 1.075-.35T22 9v9q0 .825-.588 1.413T20 20H4ZM4 6v12V6Zm15 2q-1.25 0-2.125-.875T16 5q0-1.25.875-2.125T19 2q1.25 0 2.125.875T22 5q0 1.25-.875 2.125T19 8Z" />
                </svg>
                <div>
                    <p class="text-gray-700 group-hover:text-white">Email</p>
                    <h1 class="text-lg lg:text-2xl font-medium text-gray-900 group-hover:text-white">
                        cc.iconnet@iconpln.co.id</h1>
                </div>
            </a>
            <div>
                <div class="grid grid-cols-1 gap-10 md:grid-cols-1 place-content-center">
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-10 px-5">
        <!-- alamat kantor -->
        <h1 class="flex justify-center text-center text-2xl mb-4">Alamat Kantor</h1>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-1 place-content-center">
            <!-- SBU Kalimantan -->
            <a data-aos="fade-right" data-aos-delay="100" href="https://goo.gl/maps/Q1VDzmYyMiLbNr4W7" target="_blank"
                class="p-4 bg-white shadow-2xl rounded-xl flex items-center space-x-4 group hover:bg-brands-primary overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <div>
                    <h1 class="text-lg lg:text-xl font-medium text-gray-900 group-hover:text-white">SBU Kalimantan
                    </h1>
                    <p class="text-gray-700 group-hover:text-white">
                        Jl. Sungai Ampal No.168, RT. 54, Sumber Rejo, Kec. Balikpapan Tengah, Kota Balikpapan, Kalimantan
                        Timur 76114
                    </p>

                </div>
            </a>
            <!-- Kantor Perwakilan Kalimantan Timur -->
            <a data-aos="fade-left" data-aos-delay="100" href="https://goo.gl/maps/fhFjioS7eqwPutSh6" target="_blank"
                class="p-4 bg-white shadow-2xl rounded-xl flex items-center space-x-4 group hover:bg-brands-primary overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <div>
                    <h1 class="text-lg lg:text-xl font-medium text-gray-900 group-hover:text-white">Kantor Perwakilan
                        Kalimantan
                        Timur</h1>
                    <p class="text-gray-700 group-hover:text-white">
                        Sungai Pinang Dalam, Kec. Sungai Pinang, Kota
                        Samarinda, Kalimantan Timur
                        75243 SUNGAI
                        PINANG DALAM SUNGAI PINANG KOTA SAMARINDA KALIMANTAN TIMUR 75243
                    </p>
                </div>
            </a>
            <!-- Kantor Perwakilan Kalimantan Selatan -->
            <a data-aos="fade-right" data-aos-delay="100" href="https://goo.gl/maps/aRPFxYE8V6zjWDzJ9" target="_blank"
                class="p-4 bg-white shadow-2xl rounded-xl flex items-center space-x-4 group hover:bg-brands-primary overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <div>
                    <h1 class="text-lg lg:text-xl font-medium text-gray-900 group-hover:text-white">Kantor Perwakilan
                        Kalimantan
                        Selatan</h1>
                    <p class="text-gray-700 group-hover:text-white">
                        Guntungmanggis, Kec. Landasan Ulin, Kota Banjar Baru, Kalimantan Selatan
                        70731 GUNTUNG
                        MANGGIS LANDASAN ULIN KOTA BANJARBARU KALIMANTAN SELATAN 70731
                    </p>
                </div>
            </a>
            <!-- Kantor Perwakilan Kalimantan Tengah -->
            <a data-aos="fade-left" data-aos-delay="100" href="https://goo.gl/maps/DXjtdubSChbh9W5PA" target="_blank"
                class="p-4 bg-white shadow-2xl rounded-xl flex items-center space-x-4 group hover:bg-brands-primary overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <div>
                    <h1 class="text-lg lg:text-xl font-medium text-gray-900 group-hover:text-white">Kantor Perwakilan
                        Kalimantan
                        Tengah</h1>
                    <p class="text-gray-700 group-hover:text-white">
                        Jl. Diponegoro No.07, Langkai, Kec. Pahandut, Kota Palangka Raya, Kalimantan
                        Tengah 74874
                        LANGKAI PAHANDUT KOTA PALANGKARAYA KALIMANTAN TENGAH 74874
                    </p>
                </div>
            </a>
            <!-- Kantor Perwakilan Kalimantan Barat -->
            <a data-aos="fade-right" data-aos-delay="100" href="https://goo.gl/maps/z2HT86TJTrgvPF1T7" target="_blank"
                class="p-4 bg-white shadow-2xl rounded-xl flex items-center space-x-4 group hover:bg-brands-primary overflow-hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-10 lg:w-20 text-gray-500 group-hover:text-white flex-shrink-0"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                </svg>
                <div>
                    <h1 class="text-lg lg:text-xl font-medium text-gray-900 group-hover:text-white">Kantor Perwakilan
                        Kalimantan
                        Barat</h1>
                    <p class="text-gray-700 group-hover:text-white">
                        Jl. Gusti Sulung Lelanang No.3A, Benua Melayu Darat, Kec. Pontianak Selatan,
                        Kota Pontianak, Kalimantan Barat 78243
                        BENUA MELAYU DARAT PONTIANAK SELATAN KOTA PONTIANAK KALIMANTAN BARAT 78243
                    </p>
                </div>
            </a>
        </div>
    </div>
@endsection
