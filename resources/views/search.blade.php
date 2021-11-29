@push('title','EAPPOC PIZZA | Search Page')
<x-app-layout>
    {{-- <p class="">search page here...</p> --}}
    <div class="flex shadow gap-2 p-3 w-full">
        <a href="{{ __('/dashboard') }}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-auto stroke-current text-pinkg w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </a>
        <input type="text" name="search" id="search" class="rounded-full py-2 px-4 bg-gray-200 border-0 text-sm w-full" placeholder="Search here...">
    </div>
</x-app-layout>