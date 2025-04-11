{{-- <div>
    <div class="border px-10 py-10 rounded-lg">
        <div class="pb-8">
          <img src="/storage/{{$addons->thumbnail}}" class="w-full max-h-20 object- mx-auto" >
        </div>
        <h3 id="tier-basic" class="text-2xl font-semibold text-brands-primary">{{$addons->name}}</h3>
        <p class="mt-3 flex items-baseline gap-x-1">
          <span class="text-5xl font-bold tracking-tight text-gray-900">{{ number_format($addons?->price, 0, '.', ',') }}</span>
          <br>
          <p class="text-sm font-semibold leading-6 text-gray-400">/Bulan</p>
        </p>
        <p class="mt-10 text-sm font-semibold leading-6 text-gray-900">{{ isset($addons?->meta['note']) ? $addons?->meta['note'] : '' }}</p>
        <ul role="list" class="mt-6 space-y-3 text-sm leading-6 text-gray-600">
          @foreach (Arr::except($addons->meta, ['note', 'btn_label']) as $key => $meta)
            <li class="flex gap-x-3">
              <svg class="h-6 w-5 flex-none text-brands-secondary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
              </svg>
              {{$meta}}
            </li>
          @endforeach
        </ul>
        <a href="{{route('product.registration', $addons->id)}}" aria-describedby="tier-basic" class="mt-10 block rounded-md bg-brands-secondary px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-brands-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brands-secondary">{{ isset($addons?->meta['btn_label']) ? $addons?->meta['btn_label'] : 'Pesan Sekarang' }}</a>
      </div>
</div> --}}

<div>
    <div class="{{ $addons->is_best_deal ? 'hover:animate-shake' : 'hover:scale-105' }}">
        <div class="border rounded-3xl shadow-xl" data-aos="fade-up" data-aos-delay="200">
            <div
                class="bg-cover bg-[conic-gradient(at_bottom_right,_var(--tw-gradient-stops))] from-blue-700 via-blue-800 to-gray-900 rounded-t-3xl">
                <div class="pb-8 px-10 py-8">
                    <img src="/storage/{{ $addons->thumbnail }}" class="w-full max-h-20 object- mx-auto">
                </div>
                <h3 id="tier-basic" class="px-10 text-2xl font-semibold text-white">{{ $addons->name }}</h3>
                <p class="mt-3 flex items-baseline gap-x-1 px-10">
                    <span
                        class="text-5xl font-bold tracking-tight text-white ">{{ number_format($addons?->price, 0, '.', ',') }}</span>
                    <br>
                <p class="text-sm font-semibold leading-6 text-white px-10 pb-4">/Bulan</p>
                </p>
            </div>
            <div class="px-10">
                <p class="mt-10 text-sm font-semibold leading-6 text-gray-900">
                    {{ isset($addons?->meta['note']) ? $addons?->meta['note'] : '' }}</p>
                <ul role="list" class="mt-6 space-y-3 text-sm leading-6 text-gray-600">
                    @foreach (Arr::except($addons->meta, ['note', 'btn_label']) as $key => $meta)
                        <li class="flex gap-x-3">
                            <svg class="h-6 w-5 flex-none text-brands-secondary" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            <p class="text-lg">{{ $meta }}</p>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('product.registration', $addons->id) }}" aria-describedby="tier-basic"
                    class="mt-10 mb-10 block rounded-md bg-brands-secondary px-3 py-2 text-center text-sm font-semibold leading-6 text-white shadow-sm hover:bg-brands-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brands-secondary">{{ isset($addons?->meta['btn_label']) ? $addons?->meta['btn_label'] : 'Pesan Sekarang' }}</a>
            </div>
        </div>
    </div>
</div>
