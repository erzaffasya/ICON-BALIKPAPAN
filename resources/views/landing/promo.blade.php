@extends('landing.layouts.default')
@section('content')
    <div class="w-full h-[20rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white" data-aos="fade-down">Promo</h1>
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
        @foreach ($promo as $promo)
            <x-CardPromo :promo="$promo" />
        @endforeach
    </div>
@endsection
