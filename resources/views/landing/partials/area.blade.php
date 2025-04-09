<div class="flex grid grid-cols-1 md:grid-cols-2 gap-10 py-10">
    <div class="py-10  max-w-4xl mx-auto text-left space-y-4 border-b-2 border-dotted">
        <p class="text-brands-secondary text-lg" data-aos="fade-right" data-aos-delay="300">Internet Untuk Semua</p>
        <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl mt-10" data-aos="fade-right"
            data-aos-delay="500">Jangkauan Internet Wifi Iconnet
        </h1>
        <p class="text-gray-600 leading-8 text-sm text-left text-ellipsis overflow-hidden w-96 space-y-4"
            data-aos="fade-right" data-aos-delay="700">
            @foreach ($areaKota as $item)
                {{ $item->name }}
            @endforeach
        </p>
        <div class="mt-20" data-aos="fade-right" data-aos-delay="900">
            <a href="/area" aria-describedby="tier-basic"
                class="mt-10 mb-10 rounded-md bg-brands-secondary px-5 py-3  text-center text-sm font-semibold leading-6 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brands-secondary">Daftar
                Segera -> </a>
        </div>
    </div>
    <img src="storage/{{ $map->file }}" alt="" data-aos="fade-up" data-aos-delay="500"
        data-aos-anchor-placement="top-bottom" data-aos-delay="500">
</div>
