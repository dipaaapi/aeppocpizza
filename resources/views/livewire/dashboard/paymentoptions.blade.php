@push('title','EAPPOC PIZZA | Payment Options Page')
<x-app-layout>
    {{-- <p class="">search page here...</p> --}}
    <div class="flex shadow gap-2 p-3 w-full">
        <a href="{{ __('/dashboard') }}" class="">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-pinkg h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <p class="font-thin text-pinkg text-base">Payment Options</p>
    </div>

    <form action="/action_page.php" class="grid grid-cols-2 gap-2 w-full p-5">
        <div class="flex gap-2 p-2 bg-gray-200 rounded">
            <label class="my-auto" for="visa">
                <img src="{{ __('/img/visa.png') }}" alt="visa" class="object-cover ">
            </label>
            <p class="my-auto text-sm">Visa</p>
            <input class="ml-auto my-auto" type="radio" id="visa" name="fav_language" value="visa">
        </div>
        <div class="flex gap-2 p-2 bg-gray-200 rounded">
            <label for="master">
                <img src="{{ __('/img/master.png') }}" alt="master" class="object-cover ">
            </label>
            <p class="my-auto text-sm">Master</p>
            <input class="ml-auto my-auto" type="radio" id="master" name="fav_language" value="master">
        </div>
        <div class="flex gap-2 p-2 bg-gray-200 rounded">
            <label class="my-auto" for="bdopay">
                <img src="{{ __('/img/bdopay.png') }}" alt="bdopay" class="object-cover ">
            </label>
            <p class="my-auto text-sm">BDOPay</p>
            <input class="ml-auto my-auto" type="radio" id="bdopay" name="fav_language" value="bdopay">
        </div>
        <div class="flex gap-2 p-2 bg-gray-200 rounded">
            <label for="gcash">
                <img src="{{ __('/img/gcash.png') }}" alt="gcash" class="object-cover ">
            </label>
            <p class="my-auto text-sm">GCash</p>
            <input class="ml-auto my-auto" type="radio" id="gcash" name="fav_language" value="gcash">
        </div>
        <div class="flex gap-2 p-2 bg-gray-200 rounded">
            <label for="paymaya">
                <img src="{{ __('/img/paymaya.png') }}" alt="paymaya" class="object-cover ">
            </label>
            <p class="my-auto text-sm">PayMaya</p>
            <input class="ml-auto my-auto" type="radio" id="paymaya" name="fav_language" value="paymaya">
        </div>
        <div class="flex gap-2 p-2 bg-gray-200 rounded">
            <label for="cash">
                <svg class="fill-current text-pinkg w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.667 13.984c1.782 0 3.333-.671 3.333-1.5s-1.552-1.5-3.333-1.5c-1.781 0-3.333.671-3.333 1.5s1.551 1.5 3.333 1.5zm.062-1.339c-.199-.06-.81-.111-.81-.45 0-.189.223-.358.639-.396v-.148h.214v.141c.156.004.33.021.523.06l-.078.229c-.147-.034-.311-.066-.472-.066l-.048.001c-.321.013-.347.191-.125.267.364.112.844.195.844.493 0 .238-.289.366-.645.397v.146h-.214v-.139c-.22-.002-.451-.038-.642-.102l.098-.229c.163.042.367.084.552.084l.139-.01c.247-.034.296-.2.025-.278zm-.062 5.339c1.261 0 2.57-.323 3.333-.934v.434c0 .829-1.552 1.516-3.333 1.516-1.781 0-3.333-.687-3.333-1.516v-.434c.763.612 2.071.934 3.333.934zm0-3.333c1.261 0 2.57-.323 3.333-.934v.434c0 .829-1.552 1.5-3.333 1.5-1.781 0-3.333-.671-3.333-1.5v-.434c.763.611 2.071.934 3.333.934zm0 1.667c1.261 0 2.57-.323 3.333-.935v.435c0 .828-1.552 1.5-3.333 1.5-1.781 0-3.333-.672-3.333-1.5v-.435c.763.612 2.071.935 3.333.935zm-8.441-3.089c0 .601-.47.922-1.05 1.002v.369h-.351v-.35c-.362-.006-.737-.092-1.05-.254l.16-.575c.334.129.78.267 1.128.189.402-.091.485-.505.041-.705-.326-.15-1.323-.281-1.323-1.134 0-.477.363-.904 1.044-.998v-.373h.351v.356c.253.006.538.051.855.147l-.127.576c-.269-.094-.566-.18-.855-.162-.521.031-.567.482-.204.671.599.282 1.381.491 1.381 1.241zm5.774-7.229h-17v10h-1v-11h18v1zm-16 1v11h14v-5.516c0-1.792 1.985-2.71 4-2.875v-2.609h-18zm9 9c-1.933 0-3.5-1.567-3.5-3.5s1.567-3.5 3.5-3.5 3.5 1.567 3.5 3.5-1.567 3.5-3.5 3.5z"/></svg>
            </label>
            <p class="my-auto text-sm">Cash</p>
            <input class="ml-auto my-auto" type="radio" id="cash" name="fav_language" value="cash">
        </div>
    </form>
</x-app-layout>