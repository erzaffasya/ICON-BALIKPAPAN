@extends('landing.layouts.default')
@section('content')
    <!-- ads -->
    @include('landing.partials.ads')

    <x-carousel />

    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>

    <!-- about -->
    @include('landing.partials.about')

    <!-- product -->
    @include('landing.partials.product')


    <!-- Free Installation -->
    <div class="flex justify-between p-0 scale-75 ">
        <img src="/assets/banner_biaya_installasi.png" alt="" data-aos="fade-up" data-aos-delay="500"
            data-aos-anchor-placement="top-bottom">
    </div>

    <!-- Why -->
    @include('landing.partials.why')

    <!-- Cakupan Area -->
    @include('landing.partials.area')

    <!-- testimonial -->
    <x-landing.testimonial :testimoni="$testimoni" />

    <!-- vidio -->
    <x-landing.vidio :vidio="$vidio" />

    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }

        let buttonClose = document.getElementById('button-close');
        buttonClose.addEventListener('click', function() {
            let flyout = document.getElementById('hide-modal');
            flyout.classList.add('hidden');
        });
    </script>
@endsection
