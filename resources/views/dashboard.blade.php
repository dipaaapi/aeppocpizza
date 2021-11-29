@push('title','EAPPOC PIZZA | Dashboard Page')
<x-guest-layout>
    <div x-data="{ sidebarOpen: false }" class="h-full w-full">
        <button class="flex" @click="sidebarOpen = !sidebarOpen">
            <div class="fixed top-0 left-0 w-0 h-0 z-10" :class="{ 'bg-black opacity-50 w-full h-full': sidebarOpen }"></div>
        </button>
        <livewire:dashboard.aside />
        <div class="flex-1">
            <livewire:dashboard.header />
            <livewire:dashboard.main />
        </div>
    </div>
</x-guest-layout>
