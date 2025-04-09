@extends('landing.layouts.default')
@section('content')
    @php
        use App\Models\Galery;

        $galeries = Galery::orderBy('created_at', 'DESC')->get();
    @endphp
    <div class="w-full h-[20rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white" data-aos="fade-down">Galeri Kegiatan</h1>
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
    <div class="max-w-7xl mx-auto py-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @foreach ($galeries as $item)
                <button type="button" data-hs-overlay="#hs-large-modal{{ $item->id }}">
                    <div data-hs-carousel='{
                        "loadingClasses": "opacity-0",
                        "isAutoPlay": true
                      }'
                        class="relative">
                        <div class="hs-carousel relative overflow-hidden w-full min-h-[350px] bg-white rounded-lg">
                            <div
                                class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                                @foreach ($item->image as $image)
                                    <div class="hs-carousel-slide">
                                        <div class="flex justify-center h-full bg-gray-100 p-6">
                                            <img src="storage/{{ $image }}" alt=""
                                                class="self-center text-4xl transition duration-700">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="hs-carousel-pagination flex justify-center absolute bottom-8 start-0 end-0 space-x-2">
                            @foreach ($item->image as $image)
                                <span
                                    class="hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 w-3 h-3 border border-gray-400 rounded-full cursor-pointer"></span>
                            @endforeach
                        </div>
                        <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                            <p class="truncate">{{ $item->title }}</p>
                        </div>
                    </div>
                </button>

                <div id="hs-large-modal{{ $item->id }}"
                    class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none">
                    <div
                        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-6xl lg:w-full lg:h-full lg:max-h-96 m-3 lg:mx-auto">
                        <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto ">
                            <div class="flex justify-between items-center py-3 px-4 border-b ">
                                <div>
                                    {{ $item->title }}
                                </div>
                                <button type="button"
                                    class="flex justify-center items-center w-7 h-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none "
                                    data-hs-overlay="#hs-large-modal{{ $item->id }}">
                                    <span class="sr-only">Close</span>
                                    <svg class="flex-shrink-0 w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M18 6 6 18" />
                                        <path d="m6 6 12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="p-4 overflow-y-auto">
                                <div class="w-full m-auto">
                                    <div id="default-carousel" class="relative mb-4 mt-4 ml-4" data-carousel="static">
                                        <!-- Carousel wrapper -->
                                        <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                                            <!-- Item 1 -->
                                            @foreach ($item->image as $image)
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <span
                                                        class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl ">First
                                                        Slide</span>
                                                    <img src="storage/{{ $image }}"
                                                        class="object-contain h-full w-full block absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                                                        alt="...">
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- Slider indicators -->
                                        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                                            @foreach ($item->image as $image)
                                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                                    aria-label="Slide 1"
                                                    data-carousel-slide-to="{{ $image }}"></button>
                                            @endforeach

                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-600">
                                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 19l-7-7 7-7"></path>
                                                </svg>
                                                <span class="hidden">Previous</span>
                                            </span>
                                        </button>
                                        <button type="button"
                                            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                                            data-carousel-next>
                                            <span
                                                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-600">
                                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 5l7 7-7 7"></path>
                                                </svg>
                                                <span class="hidden">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center py-3 px-4 border-b ">
                                <h3 class="font-bold text-gray-800">
                                    {{ $item->caption }}
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- vidio -->
    <x-landing.vidio :vidio="$vidio" />
@endsection
<script src="preline/dist/preline.js"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
