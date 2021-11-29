@push('title','EAPPOC PIZZA | Welcome Page')
<x-guest-layout>

    <img src="{{ __('/img/BG.png') }}" alt="bg image row1" class="h-2/3 object-bottom object-cover w-full">

    <livewire:welcome.row1 />

    {{-- <livewire:welcome.row2 />

    <livewire:welcome.row3 />

    <livewire:welcome.row4 /> --}}

</x-guest-layout>