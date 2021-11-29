<div class="w-full">
    @auth
        <a href="{{ url('/dashboard') }}" class="bg-indigo-800 border p-3 rounded-full text-sm text-white w-full">Dashboard</a>
    @else
        <div class="grid grid-rows-2 mx-auto w-1/2 mt-10">
            <a href="{{ route('login') }}" class="">
                <p class="bg-indigo-800 border my-2 p-3 rounded-full text-center text-sm text-white">Log in</p>
            </a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="">
                    <p class="border border-indigo-800 my-2 p-3 rounded-full text-center text-sm text-indigo-800">Register</p>
                </a>
            @endif
        </div>
    @endauth
</div>