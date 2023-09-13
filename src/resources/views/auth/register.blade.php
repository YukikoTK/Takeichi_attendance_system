<x-guest-layout>
    <x-slot name="header">
        <p class="font-semibold text-xl text-gray-800 leading-tight">
            Atte
        </p>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <P class="text-black font-semibold">
                {{ __('REGISTER') }}
             </P>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="{{ __('Name') }}" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-6">
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" required />
            </div>

            <!-- Password -->
            <div class="mt-6">
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                placeholder="{{ __('Password') }}"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-6">
                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation"
                                placeholder="{{ __('Confirm Password') }}" required />
            </div>

            <!-- 会員登録 -->
            <div class="items-center mt-6 w-full">
                <x-button>
                     {{ __('REGISTER') }}
                </x-button>
            </div>

            <!-- ログインへ -->
            <div class="flex justify-center items-center mt-6">
                <span class="ml-2 text-sm text-gray-600">アカウントをお持ちの方はこちらから</span>
            </div>

            <div class="flex justify-center items-center mt-1">
                <a class="text-sm text-blue-600 hover:text-gray-900" href="{{ route('login') }}">
                 {{ __('LOGIN') }}
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
