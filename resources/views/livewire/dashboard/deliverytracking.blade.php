@push('title','EAPPOC PIZZA | Delivery Tracking Page')
<x-app-layout>
    {{-- <p class="">search page here...</p> --}}
    <div class="flex shadow gap-2 p-3 w-full">
        <a href="{{ __('/dashboard') }}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-pinkg h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <p class="font-thin text-pinkg text-base">Delivery Tracking</p>
    </div>

    <div class="w-full p-2">
        <div class="grid grid-cols-2 w-full border-b my-3 pb-3">
            <div class="w-full block">
                <p class="text-center text-base font-semibold uppercase">estimated time</p>
                <p class="text-sm text-center font-thin">30 Minutes</p>
            </div>
            <div class="w-full block">
                <p class="text-center text-base font-semibold uppercase">order number</p>
                <p class="text-sm text-center font-thin">1234</p>
            </div>
        </div>
    </div>

    <div class="w-full p-2">
        <div class="flex my-10 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <div class="w-ful inline-block">
                <p class="text-base font-semibold">Placed Order</p>
                <p class="text-sm font-thin">We have received your order.</p>
            </div>
            </div>
            <div class="flex my-10 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <div class="w-ful inline-block">
                <p class="text-base font-semibold">Order Confirmed</p>
                <p class="text-sm font-thin">Your order has been confirmed.</p>
            </div>
            </div>
            <div class="flex my-10 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <div class="w-ful inline-block">
                <p class="text-base font-semibold">Order Processed</p>
                <p class="text-sm font-thin">We are preparing your order</p>
            </div>
            </div>
            <div class="flex my-10 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
            </svg>
            <div class="w-ful inline-block">
                <p class="text-base font-semibold">Delivering your Order</p>
                <p class="text-sm font-thin">We are delivering your order</p>
            </div>
            </div>
        </div>

        <div class="grid grid-rows-2 col-span-1 w-full p-2">
            <a href="{{ __('/dashboard/yourorders') }}" class="bg-indigo-800 my-2 py-2 px-4 text-center text-white rounded-full w-full">View Your Orders</a>
            <a href="{{ __('/dashboard') }}" class="border-indigo-800 border rounded-full my-2 py-2 px-4 text-center text-indigo-800 w-full">Back To Home</a>
        </div>
</x-app-layout>