<x-guest-layout>
    <x-slot name="header">
        <p class="font-semibold text-xl text-gray-800 leading-tight">
            Atte
        </p>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <P class="text-black font-semibold">
                {{ __('LOGIN') }}
             </P>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="{{ __('Email') }}" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                placeholder="{{ __('Password') }}" />
            </div>

            <!-- ログインボタン -->
            <div class="items-center mt-4 w-full">
                <x-button>
                    {{ __('LOGIN') }}
                </x-button>
            </div>

            <!-- 会員登録へ -->
            <div class="flex justify-center items-center mt-6">
                <span class="ml-2 text-sm text-gray-600">アカウントをお持ちでない方はこちらから</span>
            </div>

            <div class="flex justify-center items-center mt-1 text-blue-600">
                <a class="text-sm hover:text-gray-900" href="{{ route('register') }}">
                {{ __('REGISTER') }}
                </a>
            </div>


        </form>
    </x-auth-card>
    <x-slot name="footer">
        <p class="text-xs text-gray-800 leading-tight">
            Atte,&nbsp;inc.
        </p>
    </x-slot>
</x-guest-layout>
