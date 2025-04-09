@extends('landing.layouts.default')
@section('content')
    <div class="w-full h-[20rem] bg-brands-primary relative">
        <div
            class="absolute top-0 w-full h-full grid place-items-center bg-gradient-to-b from-brands-primary to-brands-primary/40 backdrop-blur-sm z-10">
            <div class=" text-center">
                <h1 class="font-bold text-4xl text-white">Detail Promo</h1>
            </div>
        </div>
        <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2340&q=80"
            alt="" class="h-full w-full object-cover">
    </div>
    <div class="max-w-7xl mx-auto py-10">
        @foreach ($promo as $promo)
            <x-CardPromodetail :promo="$promo"/>
        @endforeach
    </div>
@endsection
