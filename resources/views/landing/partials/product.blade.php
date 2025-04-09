<div class="max-w-7xl mx-auto py-10">
    <div class="isolate w-full" x-data="{ tab: 1 }">
        <div class="text-center">
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        1,
                    ' transform -translate-x-2': tab !== 1
                }"
                href="#" @click.prevent="tab = 1">
                Paket Internet
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        2,
                    ' transform -translate-x-2': tab !== 2
                }"
                href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                Add Ons
            </a>
        </div>
        <div class="hidden">
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        1,
                    ' transform -translate-x-2': tab !== 1
                }"
                href="#" @click.prevent="tab = 1">
                Paket Internet
            </a>
            <a class="px-4 py-2 text-lg"
                :class="{
                    'z-20 border-b-2 transform translate-x-2 border-blue-500 font-bold': tab ===
                        2,
                    ' transform -translate-x-2': tab !== 2
                }"
                href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                Add Ons
            </a>
        </div>
        <div class="w-full mt-10">
            <div class="space-y-6" x-show="tab === 1">
                <div class="text-base text-gray-600 space-y-2" x-show="tab === 1" data-aos="fade-down">
                    <div class="mx-auto max-w-4xl text-center">
                        <p class="mt-2 text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">Paket ICONNET</p>
                    </div>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600 text-center">
                        Berbagai paket yang dapat sesuai dengan layanan kebutuhan internet dan multimedia anda.
                    </p>
                    <div
                        class="isolate grid max-w-sm grid-cols-1 gap-5 divide-y divide-gray-100 mx-auto lg:-mx-8 lg:mt-0 lg:max-w-none {{ count($products) <= 4 ? 'lg:grid-cols-4' : 'lg:grid-cols-5' }} lg:divide-x lg:divide-y-0 xl:-mx-4">
                        @foreach ($products as $product)
                            <x-CardProduct :product="$product" />
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="space-y-6" x-show="tab === 2">
                <div class="text-base text-gray-600 space-y-2" x-show="tab === 2" data-aos="fade-down">
                    <div class="mx-auto max-w-4xl text-center">
                        <p class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">ADD ON ICONNET</p>
                    </div>
                    <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-600 text-center">
                        Berbagai add on yang dapat sesuai dengan layanan kebutuhan multimedia anda.
                    </p>
                    <div
                        class="isolate grid max-w-sm grid-cols-1 gap-5 divide-y divide-gray-100 sm:mx-auto lg:-mx-8 lg:mt-0 lg:max-w-none lg:grid-cols-3 lg:divide-x lg:divide-y-0 xl:-mx-4 mt-4 ">
                        @foreach ($addons as $addons)
                            <x-CardAddons :addons="$addons" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
