<div>
    <div class="max-w-screen-lg mx-auto pb-10 max-[600px]:px-9">
        <img src="/storage/{{ $promo->thumbnail }}" class="mx-auto">
    </div>
    <div class="max-w-screen-lg mx-auto pb-10 max-[600px]:px-9 text-left">
        <h1 class="text-5xl text-gray-600 space-y-2 mb-2">{{ $promo->title }}</h1>
        <p class="text-sm text-gray-600 space-y-2">{{ $promo->created_at }}</p>
        <p class="text-sm text-gray-600 space-y-2 mt-4 mb-4">
            {!! $promo->content !!}
        </p>
        <a href="{{ route('landing.area') }}"
            class="bg-brands-primary relative hover:text-white text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 mb-4"
            type="button">Cek Coverage</a>
        <p class="text-sm text-gray-600 space-y-2 mt-4 mb-2 font-bold">
            Syarat & Ketentuan
        </p>
        <div class="text-sm text-gray-600 space-y-2 ml-2">
            {!! $promo->notes !!}
        </div>
    </div>
</div>
