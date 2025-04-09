@extends('landing.layouts.default')
@section('content')
    <div class="w-full h-[24rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white" data-aos="fade-down">PRODUK KAMI</h1>
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
    {{-- <div class="max-w-7xl mx-auto py-10">
        <div class="isolate w-full" x-data="{ tab: 1 }">
            <div class="text-center">
                <a class="px-4 py-2 text-lg"
                    :class="{
                        'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            1,
                        ' transform -translate-x-2': tab !== 1
                    }"
                    href="#" @click.prevent="tab = 1">
                    Paket Internet
                </a>
                <a class="px-4 py-2 text-lg"
                    :class="{
                        'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            2,
                        ' transform -translate-x-2': tab !== 2
                    }"
                    href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                    Paket Promo
                </a>
                <a class="px-4 py-2 text-lg"
                    :class="{
                        'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            3,
                        ' transform -translate-x-2': tab !== 3
                    }"
                    href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                    Add Ons
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
                    Paket Internet
                </a>
                <a class="px-4 py-2 text-lg"
                    :class="{
                        'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            2,
                        ' transform -translate-x-2': tab !== 2
                    }"
                    href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                    Paket Promo
                </a>
                <a class="px-4 py-2 text-lg"
                    :class="{
                        'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                            3,
                        ' transform -translate-x-2': tab !== 3
                    }"
                    href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                    Add Ons
                </a>
            </div>
            <div class="w-full mt-10">
                <div class="space-y-6" x-show="tab === 1">
                    <div class="text-base text-gray-600 space-y-2" x-show="tab === 1" data-aos="fade-down">
                        <div class="mx-auto max-w-4xl text-center">
                            <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">Paket ICONNET</p>
                        </div>
                        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600 text-center">
                            Berbagai paket yang dapat sesuai dengan layanan kebutuhan internet dan multimedia anda.
                        </p>
                        <div
                            class="isolate grid max-w-sm grid-cols-1 gap-5 divide-y divide-gray-100 mx-auto lg:-mx-8 lg:mt-0 lg:max-w-none {{ count($products) <= 4 ? 'lg:grid-cols-4' : 'lg:grid-cols-5' }} lg:divide-x lg:divide-y-0 xl:-mx-4">
                            @foreach ($products as $product)
                                <x-CardProduct :product="$product" />
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="space-y-6" x-show="tab === 2">
                    <div class="text-base text-gray-600 space-y-2" x-show="tab === 2" data-aos="fade-down">
                        <div class="mx-auto max-w-4xl text-center">
                            <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">Paket Promo</p>
                        </div>
                        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600 text-center">
                            Berbagai paket yang dapat sesuai dengan layanan kebutuhan internet dan multimedia anda.
                        </p>
                        <div
                            class="isolate grid max-w-sm grid-cols-1 gap-5 divide-y divide-gray-100 mx-auto lg:-mx-8 lg:mt-0 lg:max-w-none {{ count($products) <= 4 ? 'lg:grid-cols-4' : 'lg:grid-cols-5' }} lg:divide-x lg:divide-y-0 xl:-mx-4">
                            @foreach ($products as $product)
                                <x-CardProductPromo :product="$product" />
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="space-y-6" x-show="tab === 3">
                    <div class="text-base text-gray-600 space-y-2" x-show="tab === 3" data-aos="fade-down">
                        <div class="mx-auto max-w-4xl text-center">
                            <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">ADD ON ICONNET</p>
                        </div>
                        <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600 text-center">
                            Berbagai add on yang dapat sesuai dengan layanan kebutuhan multimedia anda.
                        </p>
                        <div
                            class="isolate grid max-w-sm grid-cols-1 gap-5 divide-y divide-gray-100 sm:mx-auto lg:-mx-8 lg:mt-0 lg:max-w-none lg:grid-cols-3 lg:divide-x lg:divide-y-0 xl:-mx-4 mt-4 ">
                            @foreach ($addons as $addons)
                                <x-CardAddons :addons="$addons" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @include('landing.partials.product')
    <div class="flex justify-between p-0 scale-75 ">
        <img src="/assets/banner_biaya_installasi.png" alt="" data-aos="fade-up" data-aos-delay="500"
            data-aos-anchor-placement="top-bottom">
    </div>
@endsection
