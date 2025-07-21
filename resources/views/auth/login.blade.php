<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-4xl font-bold text-gray-900 text-center">Lorem</h1>
    <hr class="border-t-1 border-gray-300 mt-3" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="px-6 py-4">
            <div class="mb-3">
                <p class="text-xl text-center text-gray-600">Log in to your account</p>
            </div>
            <div>
                <x-input-label for="email" :value="__('Email Address')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" placeholder="Enter Your Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" placeholder="Enter Password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>


            <div class="my-4 flex justify-between">
                <label for="remember_me" class="inline-flex items-center gap-2">
                    <input id="remember_me" type="checkbox"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="text-sm text-gray-600 leading-none">Remember me</span>
                </label>


                <div class="">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </div>
            <!-- Remember Me -->
            <x-primary-button class="w-full text-center">
                {{ __('Log in') }}
            </x-primary-button>
            <p class="text-sm text-center mt-4 ">
                No account yet?
                <a href="{{ route('register') }}" class="font-semibold underline hover:text-gray-700">
                    Sign Up
                </a>
            </p>
        </div>




    </form>
</x-guest-layout>
