<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="mt-8 text-blue-950">
        @csrf
        

        <!-- Email Address -->
        <div class="rounded-sm">
            <x-input-label for="email" :value="__('Email')" class="text-blue-950" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-blue-950" />
        </div>

        <!-- Password -->
        <div class="mt-4 rounded-sm">
            <x-input-label for="password" :value="__('Password')" class="text-blue-950" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-blue-950" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 rounded-sm">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-blue-950">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Submit + Forgot Password -->
        <div class="flex items-center justify-end mt-4 rounded-sm">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-blue-950 hover:text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 ">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>