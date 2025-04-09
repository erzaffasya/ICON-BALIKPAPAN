@extends('landing.layouts.default')
@section('content')
    <div class="w-full h-[20rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white" data-aos="fade-down">PRIVACY AND POLICY</h1>
                <div class="max-w-4xl mx-auto px-5 mt-4" data-aos="fade-up">
                    <p class="text-white mg:text-lg">ICONNET adalah sebuah internet provider baru yang dulunya bernama
                        Stroomnet. ICONNET Bangkit Bersatu Untuk Indonesia, dengan menjunjung tinggi nilai-nilai
                        Nasionalisme, ICONNET berniat memberikan yang terbaik untuk masyarakat Indonesia</p>
                </div>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
            alt="" class="h-full w-full object-cover">
    </div>
    <div data-aos="fade-right" data-aos-delay="300" class="max-w-7xl mx-auto py-10">
        <div class="max-w-7xl mx-auto py-10">
            <div class="isolate w-full" x-data="{ tab: 1 }">
                <div class="grid grid-cols-1 lg:hidden py-5 px-7 bg-gray-100">
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                1,
                            ' transform -translate-x-2': tab !== 1
                        }"
                        href="#" @click.prevent="tab = 1">
                        Pengertian
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                2,
                            ' transform -translate-x-2': tab !== 2
                        }"
                        href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                        File Log
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                3,
                            ' transform -translate-x-2': tab !== 3
                        }"
                        href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                        Cookies
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                4,
                            ' transform -translate-x-2': tab !== 4
                        }"
                        href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                        Data Pengguna
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                5,
                            ' transform -translate-x-2': tab !== 5
                        }"
                        href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                        Penggunaan Informasi
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                6,
                            ' transform -translate-x-2': tab !== 6
                        }"
                        href="#" @click.prevent="tab = 6" @click.prevent="tab = 6">
                        Perubahan
                    </a>
                </div>
                <div class="w-full flex flex-row items-stretch justify-center  space-x-12">
                    <div class="hidden lg:flex flex-col justify-start w-1/3 space-y-4">
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    1,
                                ' transform -translate-x-2': tab !== 1
                            }"
                            href="#" @click.prevent="tab = 1">
                            Pengertian
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    2,
                                ' transform -translate-x-2': tab !== 2
                            }"
                            href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                            File Log
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    3,
                                ' transform -translate-x-2': tab !== 3
                            }"
                            href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                            Cookies
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    4,
                                ' transform -translate-x-2': tab !== 4
                            }"
                            href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                            Data Pengguna
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    5,
                                ' transform -translate-x-2': tab !== 5
                            }"
                            href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                            Penggunaan Informasi
                        </a>
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    6,
                                ' transform -translate-x-2': tab !== 6
                            }"
                            href="#" @click.prevent="tab = 6" @click.prevent="tab = 6">
                            Perubahan
                        </a>
                    </div>
                    <div class="w-full pt-10 lg:pt-0 lg:w-2/3">
                        <div class="space-y-6" x-show="tab === 1">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Pengertian
                            </h3>
                            <p class="text-base text-gray-600 space-y-2" x-show="tab === 1"
                                x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Sebagai penyedia jasa layanan internet rumah, kami IconNet sangat menjunjung tinggi privasi
                                pelanggan. Hal ini karena informasi pribadi merupakan hal yang sangat krusial dan tidak
                                boleh diketahui siapapun. Berikut akan kami jelaskan mengenai informasi apa saja yang kami
                                terima dan kami kumpulkan pada saat Anda mengunjungi situs IconNet. Serta, tentang bagaimana
                                kami menyimpan dan menjaga informasi tersebut. Kami tegaskan bahwa kami tidak akan pernah
                                memberikan informasi tersebut kepada siapapun termasuk pihak ketiga.
                            </p>
                        </div>

                        <div class="space-y-6" x-show="tab === 2">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 2"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                File Log
                            </h3>
                            <p class="text-base text-gray-600 space-y-2" x-show="tab === 2"
                                x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Seperti situs lain pada umumnya, kami mengumpulkan dan menggunakan data yang terdapat pada
                                file log. Informasi yang terdapat pada file log termasuk alamat IP (Internet Protocol) Anda,
                                ISP (Internet Service Provider), browser yang Anda gunakan, waktu pada saat Anda berkunjung
                                serta halaman mana saja yang Anda buka selama berkunjung di IconNet.
                            </p>
                        </div>

                        <div class="space-y-6" x-show="tab === 3">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Cookies
                            </h3>
                            <p class="text-base text-gray-600 space-y-2" x-show="tab === 3"
                                x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Situs kami menggunakan cookies untuk menyimpan berbagai informasi seperti preferensi pribadi
                                pada saat mengunjungi situs IconNet serta informasi login. IconNet juga menggunakan layanan
                                tracking dari pihak ketiga untuk mendukung situs kami. Beberapa layanan tersebut mungkin
                                menggunakan cookies ketika melakukan tracking di situs kami. IconNet bekerja sama dengan
                                layanan tracker seperti Google AdWords, Google Analytics, AdRoll serta CrazyEgg. Dimana
                                informasi yang dikirim dapat berupa alamat IP, ISP, browser, sistem operasi yang Anda pakai,
                                dan sebagainya.
                            </p>
                        </div>

                        <div class="space-y-6" x-show="tab === 4">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Data Pengguna
                            </h3>
                            <p class="text-base text-gray-600 space-y-2" x-show="tab === 4"
                                x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Data pengguna meliputi: Nama; Informasi ID Pelanggan PLN atau Nomor Meter PLN; Informasi
                                Nomor KTP; Informasi kontak, termasuk alamat email; Data demografi seperti kode pos,
                                preferensi, dan minat; Informasi lain yang berhubungan dengan survei pelanggan
                                dan/penawaran.
                            </p>
                        </div>

                        <div class="space-y-6" x-show="tab === 5">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 5"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Penggunaan Informasi
                            </h3>
                            <p class="text-base text-gray-600 space-y-2" x-show="tab === 5"
                                x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Kami menggunakan informasi yang dikumpulkan di situs kami untuk melakukan pendaftaran
                                pemasangan internet ke sistem dan upgrade/downgrade kapasitas layanan internet; Memberikan
                                pengalaman yang lebih baik kepada Anda dalam bentuk maintenance service, peningkatan layanan
                                akses internet survey; Mengirimkan informasi terkait pembayaran dan tagihan kepada anda
                                dalam bentuk whatsapp, email atau sms maupun telepon; Meningkatkan pelayanan kami dalam
                                bentuk perbaikan dalam situs.
                            </p>
                        </div>

                        <div class="space-y-6" x-show="tab === 6">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === 6"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Perubahan
                            </h3>
                            <p class="text-base text-gray-600 space-y-2" x-show="tab === 6"
                                x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                Dengan mengakses situs IconNet, maka Anda setuju bahwa kebijakan privasi ini dapat diubah
                                dalam hal apa saja dan kapan saja oleh IconNet. Penggunaan Layanan yang tetap Anda lakukan
                                secara berkelanjutan akan dianggap setuju terhadap perubahan tersebut. Jika Anda tidak ingin
                                melanjutkan menggunakan Layanan kami karena perubahan tersebut, Anda dapat memberitahukan
                                keinginan Anda untuk menghentikan penggunaan layanan internet ke IconNet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
