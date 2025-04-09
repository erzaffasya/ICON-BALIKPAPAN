@extends('landing.layouts.default')
@section('content')
    <div class="w-full h-[20rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white" data-aos="fade-down">SYARAT & KETENTUAN</h1>
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
        <div class="isolate w-full" x-data="{ tab: 1 }">
            <div class="grid grid-cols-1 lg:hidden py-5 px-7 bg-gray-100">
                <a class="px-4 py-2 text-sm"
                    :class="{
                        'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            1,
                        ' transform -translate-x-2': tab !== 1
                    }"
                    href="#" @click.prevent="tab = 1">
                    Syarat Layanan ICONNET
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{
                        'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            2,
                        ' transform -translate-x-2': tab !== 2
                    }"
                    href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                    Ketentuan Layanan ICONNET
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{
                        'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            6,
                        ' transform -translate-x-2': tab !== 6
                    }"
                    href="#" @click.prevent="tab = 6">
                    Syarat Layanan OTT (Over The Top) TV
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{
                        'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            3,
                        ' transform -translate-x-2': tab !== 3
                    }"
                    href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                    Ketentuan Layanan OTT (Over The Top) TV
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{
                        'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            7,
                        ' transform -translate-x-2': tab !== 7
                    }"
                    href="#" @click.prevent="tab = 7" @click.prevent="tab = 7">
                    Syarat Layanan Access Point WiFi
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{
                        'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            4,
                        ' transform -translate-x-2': tab !== 4
                    }"
                    href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                    Ketentuan Layanan Access Point WiFi
                </a>
                <a class="px-4 py-2 text-sm"
                    :class="{
                        'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            5,
                        ' transform -translate-x-2': tab !== 5
                    }"
                    href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                    Informasi Umum
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
                        Syarat Layanan ICONNET
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                2,
                            ' transform -translate-x-2': tab !== 2
                        }"
                        href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                        Ketentuan Layanan ICONNET
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                6,
                            ' transform -translate-x-2': tab !== 6
                        }"
                        href="#" @click.prevent="tab = 6">
                        Syarat Layanan OTT (Over The Top) TV
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                3,
                            ' transform -translate-x-2': tab !== 3
                        }"
                        href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                        Ketentuan Layanan OTT (On The Top) TV
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                7,
                            ' transform -translate-x-2': tab !== 7
                        }"
                        href="#" @click.prevent="tab = 7" @click.prevent="tab = 7">
                        Syarat Layanan Access Point WiFi
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                4,
                            ' transform -translate-x-2': tab !== 4
                        }"
                        href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                        Ketentuan Layanan Access Point WiFi
                    </a>
                    <a class="px-4 py-2 text-sm"
                        :class="{
                            'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                5,
                            ' transform -translate-x-2': tab !== 5
                        }"
                        href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                        Informasi Umum
                    </a>
                </div>
                <div class="w-full pt-10 lg:pt-0 lg:w-2/3">
                    {{-- Syarat Layanan ICONNET --}}
                    <div class="space-y-6" x-show="tab === 1">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 1"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Syarat Layanan ICONNET
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 1"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">
                                Pelanggan menyatakan bahwa informasi yang telah diberikan kepada PLN
                                Icon Plus adalah benar dan sepakat untuk terikat dengan Syarat dan Ketentuan Layanan. Setiap
                                perubahan terhadap informasi yang telah diberikan wajib disampaikan kepada PLN Icon Plus
                                selama berlangganan ICONNET.
                            </li>
                            <li class="leading-relaxed">Layanan ICONNET diberikan kepada Pelanggan sebagai layanan dengan
                                teknologi kecepatan dan bandwidth “up to” sehingga ICON+ tidak memberikan jaminan tertentu
                                kepada Pelanggan atas layanan tersebut.
                            </li>
                            <li class="leading-relaxed">
                                Pelanggan mengetahui bahwa Pelanggan harus melakukan pembayaran di
                                setiap bulan untuk memperpanjang masa aktif bulanan sesuai paket Layanan yang dipilih.
                            </li>
                            <li class="leading-relaxed">
                                Pelanggan mengetahui bahwa 1 (satu) akun Layanan ICONNET terdiri
                                dari 1 (satu) akses Broadband Internet.
                            </li>
                            <li class="leading-relaxed">
                                Pelanggan mengetahui bahwa kualitas Layanan yang diterima tergantung
                                pada perangkat Layanan dengan perangkat penerima, baik secara langsung dan/atau tidak
                                langsung. Layanan diberikan tanpa jaminan tertentu, tanpa jaminan gangguan Layanan dan tanpa
                                jaminan ketersedian Layanan dimana Layanan dapat diakses secara bersamaan oleh semua
                                Pelanggan tanpa pengaturan, alokasi dan/atau prioritas tertentu. Pelanggan berhak memperoleh
                                dukungan teknis dan/atau non-teknis dari ICON+ yang dapat dihubungi 24 x 7 terkait dengan
                                Layanan melalui contact center 150678.
                            </li>
                            <li class="leading-relaxed">
                                Pelanggan akan memberi izin kepada pegawai atau tenaga teknis
                                Layanan dari ICON+ memasuki wilayah milik Pelanggan untuk melakukan instalasi, aktivasi,
                                konfigurasi, pemeliharaan Layanan dan atau dismantle pada saat yang telah disepakati
                                Pelanggan.
                            </li>
                            <li class="leading-relaxed">
                                Pelanggan tidak diperkenankan untuk menjual, memanfaatkan atau
                                membagi kembali seluruh atau sebagian Layanan untuk keperluan Pihak Ketiga selain Pelanggan.
                            </li>
                            <li class="leading-relaxed">
                                Syarat dan Ketentuan berlaku efektif setelah Pelanggan melakukan
                                pembayaran paket Layanan yang dipilih.
                            </li>
                            <li class="leading-relaxed">
                                Pelanggan menyatakan bahwa informasi yang telah diberikan kepada
                                ICON+ adalah benar dan sepakat untuk terikat dengan Syarat dan Ketentuan Layanan. Setiap
                                perubahan terhadap informasi yang telah diberikan wajib disampaikan kepada PLN Icon Plus
                                selama berlangganan ICONNET.
                            </li>
                        </ul>
                    </div>

                    {{-- Ketentuan Layanan ICONNET --}}
                    <div class="space-y-6" x-show="tab === 2">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 2"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Ketentuan Layanan ICONNET
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 2"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">Pelanggan ICONNET adalah Pelanggan yang lokasi terminasi layanannya
                                berada pada cakupan Fiber Optik FTTH milik ICON+ untuk area redential (Rumah).</li>
                            <li class="leading-relaxed">Pelanggan ICONNET dan ICONNET+TV akan dikenakan biaya instalasi
                                (One
                                Time Charge) sebesar Rp 250.000,-/titik.</li>
                            <li class="leading-relaxed">Perangkat ONT dari ICON+ adalah perangkat yang mendukung untuk
                                dapat
                                digunakan sebagai Access Point WIFI (standard).</li>
                            <li class="leading-relaxed">Masa berlangganan (sewa) layanan adalah minimal 1 tahun.</li>
                            <li class="leading-relaxed">Pelanggan yang sudah dinyatakan melakukan terminasi dan berkenan
                                untuk berlangganan kembali tidak akan dikenakan biaya dengan ketentuan jika kabel jaringan
                                ICON+ masih tersedia dan layak digunakan di lokasi Pelanggan. Apabila kondisi kabel jaringan
                                ICON+ yang terdapat di lokasi pelanggan sudah tidak layak digunakan, Pelanggan diharuskan
                                untuk melakukan pembayaran ulang yang terdiri dari biaya instalasi.
                            </li>
                            <li class="leading-relaxed">Layanan memiliki masa tenggang selama 1 (satu) hari berlaku setelah
                                jatuh tempo masa aktif. Apabila Pelanggan telah melewati masa tenggang dan tidak melakukan
                                pembayaran, Pelanggan dinyatakan telah melakukan terminasi.</li>
                            <li class="leading-relaxed">ICON+ memberikan garansi untuk perangkat ICON+ Modem dan perangkat
                                ICON+ TV STB (set-top box) dengan jangka waktu selama masa/periode berlangganan dan berlaku
                                setelah status Layanan Pelanggan aktif. Garansi ini tidak berlaku jika kerusakan pada
                                perangkat terjadi akibat kecelakaan dan/atau kelalaian yang disebabkan oleh Pelanggan.</li>
                            <li class="leading-relaxed">Harga sudah termasuk pajak (PPN).</li>
                            <li class="leading-relaxed">Biaya bulanan yang telah dibayarkan tidak dapat dikembalikan atau
                                diuangkan.
                            </li>
                            <li class="leading-relaxed">Biaya bulanan dan biaya perangkat adalah biaya yang menjadi
                                kewajiban Pelanggan dalam bentuk paket dalam masa aktif selama 30 (tiga puluh) hari termasuk
                                namun tidak terbatas pada biaya materai, biaya tunggakan, biaya mutasi, denda keterlambatan
                                pembayaran, atau biaya lainnya sesuai dengan peraturan perundang-undangan yang berlaku</li>
                            <li class="leading-relaxed">Permohonan berhenti berlangganan TV dan atau penurunan Bandwith
                                internet dapat diajukan setelah minimal berlangganan selama 3 (Tiga) bulan dari layanan
                                aktif atau sejak BAIA ini di tanda tangan.li>
                            <li class="leading-relaxed">Apabila pelanggan melakukan pembatalan layanan sebelum masa kontrak
                                berakhir (yaitu 12 bulan), maka akan dikenakan biaya pembatalan berlangganan sekali bayar
                                sebesar (Rp 100.000,- x sisa bulan dari minimal masa sewa) + Rp 200.000,-</li>
                        </ul>
                    </div>

                    {{-- Syarat Layanan OTT (Over The Top) TV --}}
                    <div class="space-y-6" x-show="tab === 6">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 6"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Syarat Layanan OTT (Over The Top) TV
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 6"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">Syarat dan Ketentuan berikut berlaku untuk pengguna perseorangan
                                maupun korporasi (Pelanggan).
                            </li>
                            <li class="leading-relaxed">Layanan OTT diberikan kepada Pelanggan sebagai layanan dengan
                                teknologi kecepatan TV berbasis Internet. Kualitas layanan ditentukan oleh bandwidth
                                internet yang digunakan Pelanggan.</li>
                            <li class="leading-relaxed">Pelanggan mengetahui bahwa untuk memperpanjang masa aktif konten
                                Layanan OTT diwajibkan untuk melakukan pembayaran paket setiap bulan.</li>
                            <li class="leading-relaxed">Pelanggan mengetahui bahwa 1 (satu) akun Layanan OTT terdiri dari 1
                                (satu) STB (Set Up Box) beserta kelengkapan.</li>
                            <li class="leading-relaxed">Pelanggan akan memberi izin kepada pegawai atau tenaga teknis
                                layanan dari PLN Icon Plus memasuki wilayah milik Pelanggan untuk melakukan instalasi,
                                aktivasi, konfigurasi, dan/atau pemeliharaan Layanan pada saat yang telah disepakati
                                Pelanggan.</li>
                            <li class="leading-relaxed">Pelanggan tidak diperkenankan untuk menjual, memanfaatkan atau
                                membagi kembali seluruh atau sebagian Layanan untuk keperluan Pihak Ketiga selain Pelanggan.
                            </li>
                            <li class="leading-relaxed">Syarat dan Ketentuan berlaku efektif setelah Pelanggan melakukan
                                pembayaran permohonan Layanan OTT.</li>
                            <li class="leading-relaxed">Pelanggan menyatakan bahwa informasi yang telah diberikan kepada
                                PLN Icon Plus adalah benar dan sepakat untuk terikat dengan Syarat dan Ketentuan Layanan.
                                Setiap perubahan terhadap informasi yang telah diberikan wajib disampaikan kepada PLN Icon
                                Plus selama berlangganan Layanan OTT.</li>
                        </ul>
                    </div>

                    {{-- Ketentuan Layanan OTT (Over The Top) TV --}}
                    <div class="space-y-6" x-show="tab === 3">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 3"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Ketentuan Layanan OTT (Over The Top) TV
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 3"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">Syarat dan Ketentuan berikut berlaku untuk pengguna perseorangan
                                maupun korporasi (Pelanggan).</li>
                            <li class="leading-relaxed">Layanan OTT diberikan kepada Pelanggan sebagai layanan dengan
                                teknologi kecepatan TV berbasis Internet. Kualitas layanan ditentukan oleh bandwidth
                                internet yang digunakan Pelanggan.
                            </li>
                            <li class="leading-relaxed">Pelanggan mengetahui bahwa untuk memperpanjang masa aktif konten
                                Layanan OTT diwajibkan untuk melakukan pembayaran paket setiap bulan.
                            </li>
                            <li class="leading-relaxed">Pelanggan mengetahui bahwa 1 (satu) akun Layanan OTT terdiri dari 1
                                (satu) STB (Set Up Box) beserta kelengkapan.</li>
                            <li class="leading-relaxed">Pelanggan akan memberi izin kepada pegawai atau tenaga teknis
                                layanan dari PLN Icon Plus memasuki wilayah milik Pelanggan untuk melakukan instalasi,
                                aktivasi, konfigurasi, dan/atau pemeliharaan Layanan pada saat yang telah disepakati
                                Pelanggan.
                            </li>
                            <li class="leading-relaxed">Pelanggan tidak diperkenankan untuk menjual, memanfaatkan atau
                                membagi kembali seluruh atau sebagian Layanan untuk keperluan Pihak Ketiga selain Pelanggan.
                            </li>
                            <li class="leading-relaxed">Syarat dan Ketentuan berlaku efektif setelah Pelanggan melakukan
                                pembayaran permohonan Layanan OTT.</li>
                            <li class="leading-relaxed">Pelanggan menyatakan bahwa informasi yang telah diberikan kepada
                                PLN Icon Plus adalah benar dan sepakat untuk terikat dengan Syarat dan Ketentuan Layanan.
                                Setiap perubahan terhadap informasi yang telah diberikan wajib disampaikan kepada PLN Icon
                                Plus selama berlangganan Layanan OTT.</li>
                        </ul>
                    </div>

                    {{-- Syarat Layanan Access Point WiFi --}}
                    <div class="space-y-6" x-show="tab === 7">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 7"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Syarat Layanan Access Point WiFi
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 7"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">Syarat dan Ketentuan berikut berlaku untuk pengguna perseorangan
                                (‘Pelanggan’) di layanan ICONNET (‘Layanan’).</li>
                            <li class="leading-relaxed">Pelanggan mengetahui bahwa 1 (satu) akun Layanan Access Point WiFi
                                mendapatkan 1 set perangkat sesuai paket yang dibeli.</li>
                            <li class="leading-relaxed">Pelanggan akan memberi izin kepada pegawai atau tenaga teknis
                                Layanan dari PLN Icon Plus memasuki wilayah milik Pelanggan untuk melakukan instalasi,
                                aktivasi, konfigurasi, dan/atau pemeliharaan Layanan pada saat yang telah disepakati
                                Pelanggan.</li>
                            <li class="leading-relaxed">Pelanggan mendapatkan garansi pemasangan perangkat Add-On Access
                                Point WiFi selama 7 hari semenjak tanggal pemasangan perangkat. Apabila terjadi perubahan
                                pemasangan maka garansi pemasangan perangkat Add-On Access Point WiFi tidak berlaku.</li>
                            <li class="leading-relaxed">Garansi perangkat Add-On Access Point WiFi mengikuti ketentuan yang
                                tercantum pada kartu garansi yang terdapat dalam kardus perangkat. Apabila terdapat kendala
                                dan atau kerusakan selama pemakaian perangkat Add-On Access Point WiFi, maka pelanggan
                                menghubungi service center yang tertera pada kartu garansi.</li>
                            <li class="leading-relaxed">Syarat dan Ketentuan berlaku efektif setelah Pelanggan melakukan
                                pembayaran Layanan.</li>
                            <li class="leading-relaxed">Pelanggan menyatakan bahwa informasi yang telah diberikan kepada
                                PLN Icon Plus adalah benar dan sepakat untuk terikat dengan Syarat dan Ketentuan Layanan.
                                Setiap perubahan terhadap informasi yang telah diberikan wajib disampaikan kepada PLN Icon
                                Plus selama berlangganan ICONNET.</li>
                        </ul>
                    </div>

                    {{-- Ketentuan Layanan Access Point WiFi --}}
                    <div class="space-y-6" x-show="tab === 4">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Ketentuan Layanan Access Point WiFi
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 4"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">Pelanggan Add-On Access Point WiFi adalah Pelanggan yang sudah
                                memiliki layanan ICONNET.</li>
                            <li class="leading-relaxed">Spesifikasi perangkat Add-On Access Point WiFi sesuai dengan
                                spesifikasi Add-On pada paket yang dipilih.</li>
                            <li class="leading-relaxed">Add-On Access Point WiFi bersifat OTC (One Time Charge) dengan
                                kepemilikan perangkat menjadi hak milik dan sepenuhnya menjadi tanggung jawab Pelanggan.
                            </li>
                            <li class="leading-relaxed">Biaya pembelian Add-On Access Point WiFi yang telah dibayarkan
                                tidak dapat dikembalikan atau diuangkan.</li>
                            <li class="leading-relaxed">Detil Syarat & Ketentuan ini dapat diakses di iconnet.id atau
                                melalui e-mail yang dikirimkan pada saat konfirmasi pembayaran biaya pemasangan dan efektif
                                berlaku setelah pelanggan melakukan pelunasan biaya tersebut.</li>
                            <li class="leading-relaxed">Biaya pembelian Add-On Access Point WiFi terdiri atas biaya
                                pemasangan dan biaya perangkat.</li>
                            <li class="leading-relaxed">Pemasangan Add-On Access Point WiFi maksimal 50 meter dari posisi
                                ONT.</li>
                            <li class="leading-relaxed">Pelanggan menyediakan sumber catu daya pada titik pemasangan Add-On
                                Access Point WiFi.</li>
                        </ul>
                    </div>

                    {{-- Wifi Extender --}}
                    {{-- <div class="space-y-6" x-show="tab === 4">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 4"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Ketentuan Layanan Access Point WiFi
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 4"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">Pengajuan paket OTT dapat dilakukan selama layanan ICONNET aktif.
                            </li>
                            <li class="leading-relaxed">Biaya add-on bersifat OTC (One Time Charge).</li>
                            <li class="leading-relaxed">Perangkat WiFi Extender menjadi hak milik & tanggung jawab
                                pelanggan.</li>
                            <li class="leading-relaxed">PLN Icon Plus tidak memberikan garansi apabila terjadi kerusakan
                                perangkat, pelanggan dapat
                                langsung menghubungi layanan purnajual merk WiFi Extender selama masa garansi.</li>
                            <li class="leading-relaxed">Detil Syarat & Ketentuan ini dapat diakses di iconnet.id atau
                                melalui e-mail yang dikirimkan
                                pada saat konfirmasi pembayaran biaya pemasangan dan efektif berlaku setelah pelanggan
                                melakukan pelunasan biaya tersebut.</li>
                        </ul>
                    </div> --}}

                    {{-- Informasi Umum --}}
                    <div class="space-y-6" x-show="tab === 5">
                        <h3 class="text-xl font-bold leading-tight" x-show="tab === 5"
                            x-transition:enter="transition duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            Informasi Umum
                        </h3>
                        <ul class="list-decimal text-base text-gray-600 space-y-2" x-show="tab === 5"
                            x-transition:enter="transition delay-100 duration-500 transform ease-in"
                            x-transition:enter-start="opacity-0">
                            <li class="leading-relaxed">eseluruhan Syarat dan Ketentuan ini tunduk pada ketentuan hukum
                                yang berlaku di wilayah Republik Indonesia. Apabila ada perselisihan antara ICON+ dan
                                Pelanggan terkait dengan Syarat dan Ketentuan, akan diutamakan penyelesaian melalui
                                musyawarah untuk mufakat. Apabila tidak tercapai kata mufakat maka ICON+ berhak untuk
                                mengajukan tuntutan atau gugatan melalui Pengadilan Negeri Jakarta Pusat.</li>
                            <li class="leading-relaxed">PLN Icon Plus dan Pelanggan sepakat untuk mengesampingkan ketentuan
                                Pasal 1266 Kitab Undang undang Hukum Perdata Indonesia, sehingga atas setiap penghentian
                                Layanan ini bersifat final berdasarkan permohonan tertulis dari Pihak yang melakukan
                                pengentian Layanan sesuai dengan Syarat dan Ketentuan Layanan ini.
                            </li>
                            <li class="leading-relaxed">Bilamana dalam menjalankan kewajiban yang tertera dalam Keseluruhan
                                Syarat dan Ketentuan ini tidak dapat terlaksana, terhambat atau terganggu oleh sebab, akibat
                                atau kondisi yang berada diluar kendali (force majeure), ICON+ akan memberitahukan keadaan
                                tersebut secepatnya kepada Pelanggan dan dapat dibebaskan dari seluruh atau sebagian
                                kewajiban yang harus dilakukan, sepanjang hal tersebut diakibatkan oleh hambatan atau
                                gangguan tersebut. Dalam masa tidak terlaksananya kewajiban tersebut, seluruh biaya dan
                                tagihan yang berkaitan dengan layanan yang diberikan dapat ditangguhkan.</li>
                            <li class="leading-relaxed">Syarat dan Ketentuan Layanan dapat berubah sewaktu-waktu dan akan
                                diinformasikan melalui situs resmi ICON+.</li>
                            <li class="leading-relaxed">Syarat dan Ketentuan ini dibuat dalam Bahasa Indonesia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
