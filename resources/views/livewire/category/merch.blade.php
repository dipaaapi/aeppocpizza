@push('title','EAPPOC PIZZA | Merch Page')
<x-app-layout>
    {{-- <p class="">search page here...</p> --}}
    <div class="flex shadow gap-2 p-3 w-full">
        <a href="{{ __('/dashboard') }}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto stroke-current text-pinkg w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
        <p class="font-thin text-pinkg text-base">Merch</p>
        <a href="{{ __('/dashboard/mycart') }}" class="ml-auto">
            <svg class="fill-current text-pinkg h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
        </a>
    </div>
</x-app-layout>