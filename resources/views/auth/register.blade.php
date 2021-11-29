@push('title','EAPPOC PIZZA | Register Page')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            {{-- <x-jet-authentication-card-logo /> --}}
            <p class="text-4xl font-semibold">Sign Up</p>
            <p class="text-sm font-thin">Complete your Profile</p>
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                {{-- <x-jet-label for="name" value="{{ __('Name') }}" /> --}}
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                <x-jet-input id="password" class="block mt-1 w-full" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="items-center justify-end">
                <x-jet-button class="mt-2">
                    {{ __('Sign Up') }}
                </x-jet-button>
                
                @if (Route::has('password.request'))
                    <div class="w-full">
                        <div class="text-center mt-2">
                            <a class="text-sm text-gray-600" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                    </div>
                @endif

            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
