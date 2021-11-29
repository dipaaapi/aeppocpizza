@push('title','EAPPOC PIZZA | Login Page')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <p class="text-4xl font-semibold">Login</p>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                <x-jet-input id="email" class="block mt-2 w-full" type="email" name="email" placeholder="Your Email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                <x-jet-input id="password" class="block mt-2 w-full" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
            </div>

            {{-- <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            <div class="items-center justify-end">
                <x-jet-button class="mt-2">
                    {{ __('Log in') }}
                </x-jet-button>
                
                @if (Route::has('password.request'))
                <div class="w-full">
                    <div class="text-center mt-2">
                        <a class="text-sm text-gray-600" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                </div>
                @endif

                <div class="w-full">
                    <div class="text-center mt-2 text-sm text-gray-600">
                        {{ __('or Login With') }}
                    </div>
                </div>

                <div class="text-center mt-2">
                    <a class="" href="" onclick="return false;">
                        <p class="w-full rounded-full bg-blue-500 text-white text-center py-4 px-4">
                            {{ __('Login with Facebook') }}
                        </p>
                    </a>
                </div>

                <div class="text-center mt-2">
                    <a class="" href="" onclick="return false;">
                        <p class="w-full rounded-full bg-red-500 text-white text-center py-4 px-4">
                            {{ __('Login with Google') }}
                        </p>
                    </a>
                </div>

                <div class="w-full">
                    <div class="text-center mt-2">Don't have an Account? <a class="text-sm text-pinkg font-semibold" href="{{ route('register') }}">{{ __('Sign Up') }}</a>
                    </div>
                </div>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
