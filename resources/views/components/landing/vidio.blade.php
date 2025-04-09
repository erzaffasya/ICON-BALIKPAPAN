<div class="bg-white pt-5 sm:py-5">
    <div class="mx-auto max-w-7xl px-6 lg:px-8" data-aos="fade-down">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto mt-16 max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            @foreach ($vidio as $item)
                <div class="rounded-lg overflow-hidden" data-aos="fade-right">
                    <div>
                        <iframe class="w-full h-96" src="{{ $item->link }}" alt frameborder="0"></iframe>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
