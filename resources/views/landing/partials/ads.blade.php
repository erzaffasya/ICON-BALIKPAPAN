@php
    use App\Models\Ads;

    $ads = Ads::latest()->first();

@endphp
<!-- popup -->
@if ($ads)
    <div x-data="{ open: true }">
        <!-- Open modal button -->
        {{-- <button x-on:click="open = true" class="px-4 py-2 bg-indigo-500 text-white rounded-md"> Open Modal </button> --}}
        <!-- Modal Overlay -->
        <div x-show="open" class="fixed inset-0 px-2 z-50 overflow-hidden flex items-center justify-center">
            <div x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="transition-opacity ease-in duration-300" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0" class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
            </div>
            <!-- Modal Content -->
            <div x-show="open" x-transition:enter="transition-transform ease-out duration-300"
                x-transition:enter-start="transform scale-75" x-transition:enter-end="transform scale-100"
                x-transition:leave="transition-transform ease-in duration-300"
                x-transition:leave-start="transform scale-100" x-transition:leave-end="transform scale-75"
                class="bg-white rounded-md shadow-xl w-8/12 z-50 overflow-x-hidden overflow-y-auto fixed">
                <!-- Modal Header -->
                <div class="bg-white text-xl text-black font-semibold px-4 py-2 flex justify-center">
                    {{ $ads->title }}
                </div>
                <!-- Modal Body -->
                <div class="p-4">
                    <img src="storage/{{ $ads->image }}" class="w-full bg-cover bg-center">

                </div>
                <!-- Modal Footer -->
                <div class="border-t px-4 py-2 flex justify-end">
                    <button x-on:click="open = false"
                        class="px-3 py-1 bg-brands-secondary text-white  rounded-md w-full sm:w-auto"> Close </button>
                </div>
            </div>
        </div>
    </div>
@endif
