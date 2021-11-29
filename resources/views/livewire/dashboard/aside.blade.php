<aside class="fixed top-0 left-0 z-20 flex-shrink-0 w-2/3 flex flex-col border-r transition-all duration-300 h-full" :class="{ '-ml-64': !sidebarOpen }" x-transition>
    <div class="bg-pinkg h-1/4 p-5 relative">
        <button class="absolute top-3 left-5" @click="sidebarOpen = !sidebarOpen">
            <svg class="h-6 w-6 fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>
        </button>
        <div class="flex gap-2 mt-6">
            <p class="w-1/3 bg-white font-semibold px-5 py-2 rounded-full text-5xl text-center text-pinkg">{{ Auth::user()->name[0] }}</p>
            <div class="my-auto w-2/3">
                <p class="text-white text-base font-semibold text-left truncate">{{ Auth::user()->name }}</p>
                <p class="text-white text-sm text-left truncate">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>
    <nav class="flex-1 flex flex-col bg-white">
        <a href="{{ __('/dashboard/paymentoptions') }}" class="p-2 flex gap-2 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-pinkg h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
            </svg>
            <p class="text-xs my-auto">Payment Options</p>
        </a>
        <a href="{{ __('/dashboard/favourites') }}" class="p-2 flex gap-2 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-pinkg h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
            </svg>
            <p class="text-xs my-auto">Favourites</p>
        </a>
        <a href="{{ __('/dashboard/orders') }}" class="p-2 flex gap-2 w-full">
            <svg class="fill-current text-pinkg h-6 w-6" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M13.403 24h-13.403v-22h3c1.231 0 2.181-1.084 3-2h8c.821.916 1.772 2 3 2h3v9.15c-.485-.098-.987-.15-1.5-.15l-.5.016v-7.016h-4l-2 2h-3.897l-2.103-2h-4v18h9.866c.397.751.919 1.427 1.537 2zm5.097-11c3.035 0 5.5 2.464 5.5 5.5s-2.465 5.5-5.5 5.5c-3.036 0-5.5-2.464-5.5-5.5s2.464-5.5 5.5-5.5zm0 2c1.931 0 3.5 1.568 3.5 3.5s-1.569 3.5-3.5 3.5c-1.932 0-3.5-1.568-3.5-3.5s1.568-3.5 3.5-3.5zm2.5 4h-3v-3h1v2h2v1zm-15.151-4.052l-1.049-.984-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.385zm6.151 1.052h-2v-1h2v1zm2-2h-4v-1h4v1zm-8.151-4.025l-1.049-.983-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.384zm8.151 1.025h-4v-1h4v1zm0-2h-4v-1h4v1zm-5-6c0 .552.449 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.551 0-1 .448-1 1z"/></svg>
            <p class="text-xs my-auto">Orders</p>
        </a>
        <a href="{{ __('/dashboard/deliverytracking') }}" class="p-2 flex gap-2 w-full">
            <svg class="fill-current text-pinkg h-6 w-6" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M5 11v1h8v-7h-10v-1c0-.552.448-1 1-1h10c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.089-.743 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-1c-.552 0-1-.448-1-1v-6h-2v-2h7v2h-3zm3 5.8c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-3-2.8h-10v2h.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6zm1-5v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-16-3h8v2h-8v-2z"/></svg>
            <p class="text-xs my-auto">Delivery Tracking</p>
        </a>
        <a href="{{ __('/dashboard/profile') }}" class="p-2 flex gap-2 w-full">
            <svg class="fill-current text-pinkg h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/></svg>
            <p class="text-xs my-auto">Profile</p>
        </a>
        <a href="{{ __('/dashboard/addresses') }}" class="p-2 flex gap-2 w-full">
            <svg class="fill-current text-pinkg h-6 w-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z"/></svg>
            <p class="text-xs my-auto">Addresses</p>
        </a>
        <a href="{{ __('/dashboard/helpcentre') }}" class="p-2 flex gap-2 w-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current text-pinkg h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-xs my-auto">Help Centre</p>
        </a>
        <a href="{{ __('/dashboard/settings') }}" class="p-2 flex gap-2 w-full">
            <p class="text-xs my-auto">Settings</p>
        </a>
        <a href="{{ __('/dashboard/terms') }}" class="p-2 flex gap-2 w-full">
            <p class="text-xs my-auto">Terms & Condition / Privacy</p>
        </a>
        @livewire('navigation-menu')
    </nav>
</aside>