{{-- search kunware pero button --}}
<div class="w-full">
    <a href="{{ __('/search') }}" class="">
        <img src="{{ __('/img/search.png') }}" alt="menu icon" class="mt-2 mx-auto w-max">
    </a>
</div>

<div class="w-full">
    <div class="w-max mx-auto flex gap-2">
        <a href="{{ __('/category/pizza') }}" class="">
            <img src="{{ __('/img/pizza.png') }}" alt="pizza icon" class="mt-2 mx-auto w-max">
        </a>
        <a href="{{ __('/category/pasta') }}" class="">
            <img src="{{ __('/img/pasta.png') }}" alt="pasta icon" class="mt-2 mx-auto w-max">
        </a>
        <a href="{{ __('/category/cookies') }}" class="">
            <img src="{{ __('/img/cookies.png') }}" alt="cookies icon" class="mt-2 mx-auto w-max">
        </a>
        <a href="{{ __('/category/merch') }}" class="">
            <img src="{{ __('/img/merch.png') }}" alt="merch icon" class="mt-2 mx-auto w-max">
        </a>
    </div>
</div>