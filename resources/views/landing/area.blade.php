@extends('landing.layouts.default')
@section('header')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    @php
        use App\Models\Province;
        use App\Models\District;
        use App\Models\Regency;
        use App\Models\Village;

        $provinsi = Province::where('id', app('request')->input('province_id'))->first();
        $kabupaten = Regency::where('id', app('request')->input('regency_id'))->first();
        $kecamatan = District::where('id', app('request')->input('district_id'))->first();
        $kelurahan = Village::where('id', app('request')->input('village_id'))->first();
    @endphp
    <div class="max-w-fit mx-auto mt-20">
        <div class="py-10 px-10">
            <div class="lg:grid grid-cols-3 gap-24">
                <div class="col-span-1 max-[600px]:col-span-3">
                    <h1 class="font-bold text-3xl text-black">CAKUPAN AREA</h1>
                    <button class="bg-black text-white font-bold py-1 px-6 mt-6"></button>
                    <div class="max-w-4xl mx-auto  mt-2">
                        <p class="text-gray-400 mg:text-lg">ICONNET merupakan jaringan Fiber Optic, menggunakan teknologi
                            terkini sehingga dapat melayani Internet dan TV seamless pada kabel fiber optic yang sama tanpa
                            menurunkan kecepatan dan kualitas</p>
                    </div>
                    <div class="max-w-4xl mx-auto  mt-4">
                        @if ($condition)
                            @if ($areaCoverage->count() > 0)
                                <div class="bg-teal-100 border-l-4 border-teal-500 text-teal-900 p-4 mb-4" role="alert">
                                    <p class="font-bold">Tercover</p>
                                    <p>ICONNET tersedia dilokasi anda</p>
                                    <a href="{{ route('landing.product') }}"
                                        class="bg-teal-500 text-white font-bold py-1 px-6 rounded mt-2">
                                        Daftar Sekarang
                                    </a>
                                </div>
                            @else
                                <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mb-4"
                                    role="alert">
                                    <p class="font-bold">Tidak Tercover</p>
                                    <p>ICONNET belum tersedia saat ini</p>
                                    <a href="https://wa.me/6281112002123"
                                        class="bg-orange-500 text-white font-bold py-1 px-6 rounded mt-2">Beri tahu kami
                                        lokasi anda</a>
                                </div>
                            @endif
                        @endif
                        <div class="max-w-4xl mx-auto ">
                            <form action="{{ route('landing.area') }}" method="GET">
                                <div class="mb-8">
                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                        for="Provinsi">Provinsi</label>
                                    <select name="province_id" id="provinsi"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                        id="grid-state" required>
                                        @if ($provinsi)
                                            <option selected value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                        @else
                                            <option selected disabled>Pilih Provinsi</option>
                                        @endif
                                        @foreach ($dataProvinsi as $provinsi)
                                            <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-8">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="Kota">Kota</label>
                                    <select name="regency_id" id="kota"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                        id="grid-state" required>
                                        @if ($kabupaten)
                                            <option selected value="{{ $kabupaten->id }}">{{ $kabupaten->name }}</option>
                                        @else
                                            <option selected disabled>Pilih Kabupaten</option>
                                        @endif
                                        @foreach ($dataKota as $kota)
                                            <option value="{{ $kota->id }}">{{ $kota->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-8">
                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                        for="Kecamatan">Kecamatan</label>
                                    <select name="district_id" id="kecamatan"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                        id="grid-state" required>
                                        @if ($kecamatan)
                                            <option selected value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
                                        @else
                                            <option selected disabled>Pilih Kecamatan</option>
                                        @endif
                                        @foreach ($dataKecamatan as $kecamatan)
                                            <option value="{{ $kecamatan->id }}">{{ $kecamatan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-8">
                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                        for="Kelurahan">Kelurahan</label>
                                    <select name="village_id" id="kelurahan"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline "
                                        id="grid-state" required>
                                        @if ($kelurahan)
                                            <option selected value="{{ $kelurahan->id }}">{{ $kelurahan->name }}</option>
                                        @else
                                            <option selected disabled>Pilih Kelurahan</option>
                                        @endif
                                        @foreach ($dataKelurahan as $kelurahan)
                                            <option value="{{ $kelurahan->id }}">{{ $kelurahan->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex items-center justify-between">
                                    <button type="submit"
                                        class="w-full bg-brands-primary relative hover:text-white text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline "
                                        type="button">
                                        Cek Ketersediaan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 max-[600px]:col-span-3">
                    <img src="storage/{{ $map->file }}" class="scale-95">
                </div>
            </div>
        </div>
    </div>

    <div class="isolate w-full" x-data="{ tab: 1 }">
        <div class="text-center">
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        1,
                    ' transform -translate-x-2': tab !== 1
                }"
                href="#" @click.prevent="tab = 1">
                Kalimantan Timur
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        2,
                    ' transform -translate-x-2': tab !== 2
                }"
                href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                Kalimantan Selatan
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        3,
                    ' transform -translate-x-2': tab !== 3
                }"
                href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                Kalimantan Tengah
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        4,
                    ' transform -translate-x-2': tab !== 4
                }"
                href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                Kalimantan Barat
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        5,
                    ' transform -translate-x-2': tab !== 5
                }"
                href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                Kalimantan Utara
            </a>
        </div>
        <div class="hidden">
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        1,
                    ' transform -translate-x-2': tab !== 1
                }"
                href="#" @click.prevent="tab = 1">
                Kalimantan Timur
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        2,
                    ' transform -translate-x-2': tab !== 2
                }"
                href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                Kalimantan Selatan
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        3,
                    ' transform -translate-x-2': tab !== 3
                }"
                href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                Kalimantan Tengah
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        4,
                    ' transform -translate-x-2': tab !== 4
                }"
                href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                Kalimantan Barat
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        5,
                    ' transform -translate-x-2': tab !== 5
                }"
                href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                Kalimantan Utara
            </a>
        </div>
        <div class="w-full mt-10">
            {{-- KALTIM --}}
            <div class="space-y-6" x-show="tab === 1">
                <div class="text-base text-gray-600 space-y-2" x-show="tab === 1"
                    x-transition:enter="transition delay-100 duration-500 transform ease-in"
                    x-transition:enter-start="opacity-0">
                    {{-- KALTIM --}}
                    @if ($areaKaltim->count() > 0)
                        <div class="py-2 px-5">
                            <div class="md:grid grid-cols-1 gap-2">
                                {{-- satu --}}
                                @foreach ($areaKaltim as $kota)
                                    <div class="px-1 m-3 bg-gray-100 shadow-md text-black rounded-lg hover:rounded-lg ">
                                        <div class="container mx-auto p-4">
                                            <div class="hs-accordion-group">
                                                <div class="hs-accordion-group">
                                                    <div class="hs-accordion" id="hs-basic-heading-two">
                                                        <button
                                                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                                                            aria-controls="hs-basic-collapse-two">
                                                            <svg class="hs-accordion-active:hidden block w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                            <svg class="hs-accordion-active:block hidden w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                            </svg>
                                                            <h5 class="font-bold text-m text-left text-black">
                                                                {{ $kota->name }}
                                                            </h5>
                                                        </button>
                                                        <div id="hs-basic-collapse-two"
                                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-heading-two">
                                                            <ul class="list-disc p-4">
                                                                @foreach ($kota->districts as $kecamatan)
                                                                    @if ($kecamatan->area->count() > 0)
                                                                        <div class="row-span-3  ml-4">
                                                                            <li class="font-bold">{{ $kecamatan->name }}
                                                                            </li>
                                                                            <ul class="list-decimal p-4">
                                                                                @foreach ($kecamatan->villages as $kelurahan)
                                                                                    @if ($kelurahan->area->count() > 0)
                                                                                        <li class="font-bold">
                                                                                            {{ $kelurahan->name }}</li>
                                                                                        <ul class="list-disc p-6">
                                                                                            <div
                                                                                                class="md:grid grid-cols-5 gap-x-2 gap-y-2">
                                                                                                @foreach ($kelurahan->area as $area)
                                                                                                    <div
                                                                                                        class="max-[600px]:col-span-3">
                                                                                                        <li>{{ $area->name }}
                                                                                                        </li>
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </ul>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- KALSEL --}}
            <div class="space-y-6" x-show="tab === 2">
                <div class="text-base text-gray-600 space-y-2" x-show="tab === 2"
                    x-transition:enter="transition delay-100 duration-500 transform ease-in"
                    x-transition:enter-start="opacity-0">
                    {{-- KALSEL --}}
                    @if ($areaKalsel->count() > 0)
                        <div class="py-2 px-5">
                            <div class="md:grid grid-cols-1 gap-2">
                                {{-- satu --}}
                                @foreach ($areaKalsel as $kota)
                                    <div class="px-1 m-3 bg-gray-100 shadow-md text-black rounded-lg hover:rounded-lg">
                                        <div class="container mx-auto p-4">
                                            <div class="hs-accordion-group">
                                                <div class="hs-accordion-group">
                                                    <div class="hs-accordion" id="hs-basic-heading-two">
                                                        <button
                                                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                                                            aria-controls="hs-basic-collapse-two">
                                                            <svg class="hs-accordion-active:hidden block w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                            <svg class="hs-accordion-active:block hidden w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                            </svg>
                                                            <h5 class="font-bold text-m text-left text-black">
                                                                {{ $kota->name }}
                                                            </h5>
                                                        </button>
                                                        <div id="hs-basic-collapse-two"
                                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-heading-two">
                                                            <ul class="list-disc p-4">
                                                                @foreach ($kota->districts as $kecamatan)
                                                                    @if ($kecamatan->area->count() > 0)
                                                                        <div class="row-span-3  ml-4">
                                                                            <li class="font-bold">{{ $kecamatan->name }}
                                                                            </li>
                                                                            <ul class="list-decimal p-4">
                                                                                @foreach ($kecamatan->villages as $kelurahan)
                                                                                    @if ($kelurahan->area->count() > 0)
                                                                                        <li class="font-bold">
                                                                                            {{ $kelurahan->name }}</li>
                                                                                        <ul class="list-disc p-6">
                                                                                            <div
                                                                                                class="md:grid grid-cols-5 gap-x-2 gap-y-2">
                                                                                                @foreach ($kelurahan->area as $area)
                                                                                                    <div
                                                                                                        class="max-[600px]:col-span-3">
                                                                                                        <li>{{ $area->name }}
                                                                                                        </li>
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </ul>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- KALTENG --}}
            <div class="space-y-6" x-show="tab === 3">
                <div class="text-base text-gray-600 space-y-2" x-show="tab === 3"
                    x-transition:enter="transition delay-100 duration-500 transform ease-in"
                    x-transition:enter-start="opacity-0">
                    {{-- KALTENG --}}
                    @if ($areaKalteng->count() > 0)
                        <div class="py-2 px-5">
                            <div class="md:grid grid-cols-1 gap-2">
                                {{-- satu --}}
                                @foreach ($areaKalteng as $kota)
                                    <div class="px-1 m-3 bg-gray-100 shadow-md text-black rounded-lg hover:rounded-lg">
                                        <div class="container mx-auto p-4">
                                            <div class="hs-accordion-group">
                                                <div class="hs-accordion-group">
                                                    <div class="hs-accordion" id="hs-basic-heading-two">
                                                        <button
                                                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                                                            aria-controls="hs-basic-collapse-two">
                                                            <svg class="hs-accordion-active:hidden block w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                            <svg class="hs-accordion-active:block hidden w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                            </svg>
                                                            <h5 class="font-bold text-m text-left text-black">
                                                                {{ $kota->name }}
                                                            </h5>
                                                        </button>
                                                        <div id="hs-basic-collapse-two"
                                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-heading-two">
                                                            <ul class="list-disc p-4">
                                                                @foreach ($kota->districts as $kecamatan)
                                                                    @if ($kecamatan->area->count() > 0)
                                                                        <div class="row-span-3  ml-4">
                                                                            <li class="font-bold">{{ $kecamatan->name }}
                                                                            </li>
                                                                            <ul class="list-decimal p-4">
                                                                                @foreach ($kecamatan->villages as $kelurahan)
                                                                                    @if ($kelurahan->area->count() > 0)
                                                                                        <li class="font-bold">
                                                                                            {{ $kelurahan->name }}</li>
                                                                                        <ul class="list-disc p-6">
                                                                                            <div
                                                                                                class="md:grid grid-cols-5 gap-x-2 gap-y-2">
                                                                                                @foreach ($kelurahan->area as $area)
                                                                                                    <div
                                                                                                        class="max-[600px]:col-span-3">
                                                                                                        <li>{{ $area->name }}
                                                                                                        </li>
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </ul>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- KALBAR --}}
            <div class="space-y-6" x-show="tab === 4">
                <div class="text-base text-gray-600 space-y-2" x-show="tab === 4"
                    x-transition:enter="transition delay-100 duration-500 transform ease-in"
                    x-transition:enter-start="opacity-0">
                    {{-- KALBAR --}}
                    @if ($areaKalbar->count() > 0)
                        <div class="py-2 px-5">
                            <div class="md:grid grid-cols-1 gap-2">
                                {{-- satu --}}
                                @foreach ($areaKalbar as $kota)
                                    <div class="px-1 m-3 bg-gray-100 shadow-md text-black rounded-lg hover:rounded-lg">
                                        <div class="container mx-auto p-4">
                                            <div class="hs-accordion-group">
                                                <div class="hs-accordion-group">
                                                    <div class="hs-accordion" id="hs-basic-heading-two">
                                                        <button
                                                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                                                            aria-controls="hs-basic-collapse-two">
                                                            <svg class="hs-accordion-active:hidden block w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                            <svg class="hs-accordion-active:block hidden w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                            </svg>
                                                            <h5 class="font-bold text-m text-left text-black">
                                                                {{ $kota->name }}
                                                            </h5>
                                                        </button>
                                                        <div id="hs-basic-collapse-two"
                                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-heading-two">
                                                            <ul class="list-disc p-4">
                                                                @foreach ($kota->districts as $kecamatan)
                                                                    @if ($kecamatan->area->count() > 0)
                                                                        <div class="row-span-3  ml-4">
                                                                            <li class="font-bold">{{ $kecamatan->name }}
                                                                            </li>
                                                                            <ul class="list-decimal p-4">
                                                                                @foreach ($kecamatan->villages as $kelurahan)
                                                                                    @if ($kelurahan->area->count() > 0)
                                                                                        <li class="font-bold">
                                                                                            {{ $kelurahan->name }}</li>
                                                                                        <ul class="list-disc p-6">
                                                                                            <div
                                                                                                class="md:grid grid-cols-5 gap-x-2 gap-y-2">
                                                                                                @foreach ($kelurahan->area as $area)
                                                                                                    <div
                                                                                                        class="max-[600px]:col-span-3">
                                                                                                        <li>{{ $area->name }}
                                                                                                        </li>
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </ul>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- KALTARA --}}
            <div class="space-y-6" x-show="tab === 5">
                <div class="text-base text-gray-600 space-y-2" x-show="tab === 5"
                    x-transition:enter="transition delay-100 duration-500 transform ease-in"
                    x-transition:enter-start="opacity-0">
                    {{-- KALTARA --}}
                    @if ($areaKaltara->count() > 0)
                        <div class="py-2 px-5">
                            <div class="md:grid grid-cols-1 gap-2">
                                {{-- satu --}}
                                @foreach ($areaKaltara as $kota)
                                    <div class="px-1 m-3 bg-gray-100 shadow-md text-black rounded-lg hover:rounded-lg">
                                        <div class="container mx-auto p-4">
                                            <div class="hs-accordion-group">
                                                <div class="hs-accordion-group">
                                                    <div class="hs-accordion" id="hs-basic-heading-two">
                                                        <button
                                                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:outline-none dark:focus:text-gray-400"
                                                            aria-controls="hs-basic-collapse-two">
                                                            <svg class="hs-accordion-active:hidden block w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                                <path d="M12 5v14" />
                                                            </svg>
                                                            <svg class="hs-accordion-active:block hidden w-4 h-4"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M5 12h14" />
                                                            </svg>
                                                            <h5 class="font-bold text-m text-left text-black">
                                                                {{ $kota->name }}
                                                            </h5>
                                                        </button>
                                                        <div id="hs-basic-collapse-two"
                                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                                            aria-labelledby="hs-basic-heading-two">
                                                            <ul class="list-disc p-4">
                                                                @foreach ($kota->districts as $kecamatan)
                                                                    @if ($kecamatan->area->count() > 0)
                                                                        <div class="row-span-3  ml-4">
                                                                            <li class="font-bold">{{ $kecamatan->name }}
                                                                            </li>
                                                                            <ul class="list-decimal p-4">
                                                                                @foreach ($kecamatan->villages as $kelurahan)
                                                                                    @if ($kelurahan->area->count() > 0)
                                                                                        <li class="font-bold">
                                                                                            {{ $kelurahan->name }}</li>
                                                                                        <ul class="list-disc p-6">
                                                                                            <div
                                                                                                class="md:grid grid-cols-5 gap-x-2 gap-y-2">
                                                                                                @foreach ($kelurahan->area as $area)
                                                                                                    <div
                                                                                                        class="max-[600px]:col-span-3">
                                                                                                        <li>{{ $area->name }}
                                                                                                        </li>
                                                                                                    </div>
                                                                                                @endforeach
                                                                                            </div>
                                                                                        </ul>
                                                                                    @endif
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="preline/dist/preline.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#provinsi').select2();

        $('#provinsi').on('change', async function() {
            var provinsiID = $(this).val();
            console.log(provinsiID)
            if (provinsiID) {
                services('/fetch/data/kota/' + provinsiID).then(res => {
                    if (res) {
                        $('#kota').empty();
                        $('#kota').append('<option hidden>Pilih Kabupaten</option>');
                        $.each(res, function(key, kota) {
                            $('select[name="regency_id"]').append(
                                '<option value="' + kota.id + '">' + kota
                                .name + '</option>');
                        });
                    } else {
                        $('#kota').empty();
                    }
                })
            } else {
                $('#kota').empty();
            }
        });

        $('#kota').select2();

        $('#kota').on('change', async function() {
            var kotaID = $(this).val();
            console.log(kotaID)
            if (kotaID) {
                services('/fetch/data/kecamatan/' + kotaID).then(data => {
                    if (data) {
                        $('#kecamatan').empty();
                        $('#kecamatan').append(
                            '<option hidden>Pilih Kecamatan</option>');
                        $.each(data, function(key, kecamatan) {
                            $('select[name="district_id"]').append(
                                '<option value="' + kecamatan.id + '">' +
                                kecamatan.name + '</option>');
                        });
                    } else {
                        $('#kecamatan').empty();
                    }
                })
            } else {
                $('#kecamatan').empty();
            }
        });

        $('#kecamatan').select2();

        $('#kecamatan').on('change', function() {
            var kecamatanID = $(this).val();
            console.log(kecamatanID)
            if (kecamatanID) {
                services('/fetch/data/kelurahan/' + kecamatanID).then(data => {
                    if (data) {
                        $('#kelurahan').empty();
                        $('#kelurahan').append(
                            '<option hidden>Pilih Kelurahan</option>');
                        $.each(data, function(key, kelurahan) {
                            $('select[name="village_id"]').append(
                                '<option value="' + kelurahan.id + '">' +
                                kelurahan.name + '</option>');
                        });
                    } else {
                        $('#kelurahan').empty();
                    }
                })
            } else {
                $('#kelurahan').empty();
            }
        });

        $('#kelurahan').select2();
    });

    function services($url) {
        return $.ajax({
            url: $url,
            type: "GET",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json"
        })
    }
</script>
