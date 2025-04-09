<div class="bg-white pt-5 sm:py-10">
    <div class="mx-auto max-w-7xl px-6 lg:px-8" data-aos="fade-down">
        <div class="mx-auto max-w-xl text-center">
            <h2 class="text-lg font-semibold leading-8 tracking-tight text-brands-secondary">Testimonials</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kami telah bekerja dengan
                Pelanggan luar biasa</p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="max-w-7xl mx-auto px-10 pb-10" data-aos="fade-down">
                <div class="carousel carousel-center w-full p-4 space-x-4 bg-white rounded-box">
                    <div class="carousel-item">
                        @foreach ($testimoni as $item)
                            <div
                                class="card card-side bg-base-100 shadow-xl border-2 border-brands-secondary ml-4 mr-4">
                                <div class="card-body">
                                    <h2 class="card-title">
                                        {{ $item->title }} <br>
                                        {{ $item->link }}
                                    </h2>
                                    <div class="text-ellipsis overflow-hidden w-40">
                                        <p>{!! $item->desc !!}</p>
                                    </div>
                                </div>
                                <div class="justify-start pt-10 pr-8">
                                    <img class="relative rounded-full overflow-hidden h-32 w-32"
                                        src="storage/{{ $item->image }}" alt="Testimoni" />
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
