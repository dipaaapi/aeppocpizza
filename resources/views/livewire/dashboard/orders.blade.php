@push('title','EAPPOC PIZZA | Orders Page')
<x-app-layout>
    {{-- <p class="">search page here...</p> --}}
    <div class="flex shadow gap-2 p-3 w-full">
        <a href="{{ __('/dashboard') }}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-pinkg h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <p class="font-thin text-pinkg text-base">Orders</p>
    </div>

    <div class="w-full p-5 my-2">
        <p class="text-base font-semibold text-left">Recent Orders</p>
        <div class="my-2 rounded shadow p-5 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="bg-pinkg fill-current h-10 px-1 py-2 rounded-full text-white w-10" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <div class="my-auto inline-block">
                <p class="text-blue-900 text-sm font-semibold">Order No. 3421</p>
                <p class="text-gray-600 text-sm my-auto">Delivered</p>
            </div>
            <div class="ml-auto text-right my-auto">
                <p class="text-sm text-gray-600">View 2 items</p>
                <p class="text-sm text-gray-600">8:15AM</p>
            </div>
        </div>
    </div>

    <div class="w-full p-5 my-2">
        <div class="flex w-full">
            <p class="text-base font-semibold text-left">Past Orders</p>
            <a href="#" class="h-auto ml-auto my-auto">
                <p class="text-xs font-semibold my-auto">See All</p>
            </a>
        </div>
        <div class="my-2 rounded shadow p-5 flex gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="bg-pinkg fill-current h-10 px-1 py-2 rounded-full text-white w-10" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <div class="my-auto inline-block">
                <p class="text-blue-900 text-sm font-semibold">Order No. 3421</p>
                <p class="text-gray-600 text-sm my-auto">Delivered</p>
            </div>
            <div class="ml-auto text-right my-auto">
                <p class="text-sm text-gray-600">View 2 items</p>
                <p class="text-sm text-gray-600">8:15AM</p>
            </div>
        </div>
    </div>
</x-app-layout>