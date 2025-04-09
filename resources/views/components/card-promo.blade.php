<div>
    {{-- <div class="isolate w-full mb-24">
        <div class="w-full flex flex-row items-stretch justify-center space-x-12">
            <div data-aos="fade-right" data-aos-delay="300" class="w-full pt-10 ml-4 mr-4 lg:pt-0 lg:w-2/3">
                <div class="space-y-6">
                    <h1 class="text-3xl font-bold leading-tight">
                        {{ $promo->title }}
                    </h1>
                    <button class="bg-black text-white font-bold py-1 px-10 mt-2"></button>
                    <div class=" text-base text-gray-600 space-y-2">
                        <p class="leading-relaxed">{!! $promo->content !!}</p>
                        <a href="{{ route('landing.promodetail', $promo->id) }}"
                            class="bg-brands-primary relative hover:bg-brands-secondary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline "
                            type="button">Info Detail</a>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" data-aos-delay="700" class="hidden lg:flex flex-col justify-end w-full space-y-4">
                <div class="px-4 py-2" :class="{ 'z-20 border-l-2 transform translate-x-2 border-blue-500 font-bold' }">
                    <img src="/storage/{{ $promo->thumbnail }}" alt="/storage/{{ $promo->thumbnail }}">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="card lg:card-side mt-4 mb-4">
        <div class="card-body" data-aos="fade-right" data-aos-delay="300">
            <h2 class="card-title text-3xl">{{ $promo->title }}</h2>
            <button class="bg-black text-white font-bold w-10 py-1 px-10 mt-2"></button>
            <div class="text-ellipsis overflow-hidden w-full">
                <p>{!! $promo->content !!}</p>
            </div>
            <div class="card-actions justify-start">
                <a href="{{ route('landing.promodetail', $promo->id) }}"
                    class="bg-brands-primary relative hover:bg-brands-secondary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline "
                    type="button">Info Detail</a>
            </div>
        </div>
        <div class="justify-start pt-10 pr-8">
            <figure data-aos="fade-left" data-aos-delay="700" class="rounded-xl"><img
                    src="/storage/{{ $promo->thumbnail }}" alt="Album" />
            </figure>
        </div>
    </div>
</div>
