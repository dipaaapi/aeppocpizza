@push('title','EAPPOC PIZZA | Favourites Page')
<x-app-layout>
    {{-- <p class="">search page here...</p> --}}
    <div class="flex shadow gap-2 p-3 w-full">
        <a href="{{ __('/dashboard') }}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto stroke-current text-pinkg w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
        <p class="font-thin text-pinkg text-base">Favourites</p>
        <a href="{{ __('/dashboard/mycart') }}" class="ml-auto">
            <svg class="fill-current text-pinkg h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
        </a>
    </div>
    <div class="block p-5">
        <div class="my-2 block">
            <img src="{{ __('/img/buckethat.png') }}" alt="buckethat" class="w-full mb-2">
            <div class="flex w-full">
                <div class="inline-block">
                    <p class="font-semibold text-base">Reversible Bucket Hat</p>
                    <div class="flex gap-1">
                        <p class="text-pinkg text-xs my-auto">4.3</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-pinkg h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <p class="text-xs my-auto text-gray-500">(143 ratings)</p>
                    </div>
                    <p class="text-sm">Php 420</p>
                </div>
                <div class="h-auto ml-auto my-auto w-max">
                    <x-jet-button class="text-sm font-semibold">Add to Cart</x-jet-button>
                </div>
            </div>
        </div>
        <div class="my-2 block">
            <img src="{{ __('/img/favmeatball.png') }}" alt="meatball" class="w-full mb-2">
            <div class="flex w-full">
                <div class="inline-block">
                    <p class="font-semibold text-base">Meatball</p>
                    <div class="flex gap-1">
                        <p class="text-pinkg text-xs my-auto">4.0</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-pinkg h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <p class="text-xs my-auto text-gray-500">(143 ratings)</p>
                    </div>
                    <p class="text-sm">Php 1,100</p>
                </div>
                <div class="h-auto ml-auto my-auto w-max">
                    <x-jet-button class="text-sm font-semibold">Add to Cart</x-jet-button>
                </div>
            </div>
        </div>
        <div class="my-2 block">
            <img src="{{ __('/img/favsmokedgarden.png') }}" alt="smoked garden" class="w-full mb-2">
            <div class="flex w-full">
                <div class="inline-block">
                    <p class="font-semibold text-base">Smoked Garden</p>
                    <div class="flex gap-1">
                        <p class="text-pinkg text-xs my-auto">4.4</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-pinkg h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <p class="text-xs my-auto text-gray-500">(143 ratings)</p>
                    </div>
                    <p class="text-sm">Php 950</p>
                </div>
                <div class="h-auto ml-auto my-auto w-max">
                    <x-jet-button class="text-sm font-semibold">Add to Cart</x-jet-button>
                </div>
            </div>
        </div>
        <div class="my-2 block">
            <img src="{{ __('/img/favfacemask.png') }}" alt="Color Block Face Mask" class="w-full mb-2">
            <div class="flex w-full">
                <div class="inline-block">
                    <p class="font-semibold text-base">Color Block Face Mask</p>
                    <div class="flex gap-1">
                        <p class="text-pinkg text-xs my-auto">4.3</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-pinkg h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        <p class="text-xs my-auto text-gray-500">(143 ratings)</p>
                    </div>
                    <p class="text-sm">Php 300</p>
                </div>
                <div class="h-auto ml-auto my-auto w-max">
                    <x-jet-button class="text-sm font-semibold">Add to Cart</x-jet-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>