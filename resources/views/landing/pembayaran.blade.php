@extends('landing.layouts.default')
@section('content')
    <div class="w-full h-[20rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white" data-aos="fade-down">METODE PEMBAYARAN</h1>
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
            <div class="w-full flex flex-row items-stretch justify-center  space-x-12">
                <div class="hidden lg:flex flex-col justify-start w-1/3 space-y-4">
                    @foreach ($payment as $item)
                        <a class="px-4 py-2 text-sm"
                            :class="{
                                'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                                    {{ $item->id }},
                                ' transform -translate-x-2': tab !== {{ $item->id }}
                            }"
                            href="#" @click.prevent="tab = {{ $item->id }}">
                            {{ $item->name }}
                        </a>
                    @endforeach
                </div>
                <div class="w-full pt-10 lg:pt-0 lg:w-2/3">
                    @foreach ($payment as $item)
                        <div class="space-y-6" x-show="tab === {{ $item->id }}">
                            <h3 class="text-xl font-bold leading-tight" x-show="tab === {{ $item->id }}"
                                x-transition:enter="transition duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                {{ $item->name }}
                            </h3>
                            <p class="text-base text-gray-600 space-y-2" x-show="tab === {{ $item->id }}"
                                x-transition:enter="transition delay-100 duration-500 transform ease-in"
                                x-transition:enter-start="opacity-0">
                                {!! $item->detail?->description !!}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
