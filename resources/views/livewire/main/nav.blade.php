<div class="w-full p-3 bg-transparent">
    <div class="md:w-3/4 w-full md:flex inline-block md:mx-auto p-0">

        <div class="w-max md:ml-0 ml-auto mr-auto">
            <a href="{{ __('/') }}" class="">
                <x-jet-application-logo class="h-3" />
            </a>
        </div>

        <div class="w-full">
            @if (Route::has('login'))
                <ul class="flex gap-0 h-full justify-between md:gap-5 md:justify-end md:px-0 my-auto px-10">
                    @auth
                        <li class="">
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        </li>
                    @else
                        <li class="my-auto">
                        @if (request()->routeIs('dashboard'))
                            <a href="{{ __('/') }}" class="py-2 px-3">
                                <p class="text-dirty-white text-sm font-semibold uppercase">home</p>
                            </a>
                        @endif
                    </li>
                    <li class="my-auto">
                        <a href="{{ __('/') }}" class="py-2 px-3">
                            <p class="text-dirty-white text-sm font-semibold uppercase">about us</p>
                        </a>
                    </li>
                    <li class="my-auto">
                        <a href="{{ __('/') }}" class="py-2 px-3">
                            <p class="text-dirty-white text-sm font-semibold uppercase">contact us</p>
                        </a>
                    </li>
                    <li class="my-auto">
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">
                                <p class="text-dirty-white text-sm font-semibold uppercase border-2 py-2 px-3 border-dirty-white">Sign in</p>
                            </a>
                        @endif
                    </li>
                    @endauth
                </ul>
            @endif
        </div>

    </div>
</div>