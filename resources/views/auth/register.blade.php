<x-guest-layout>

    <h1 class="text-4xl font-bold text-gray-900 text-center">Lorem</h1>
    <hr class="border-t-1 border-gray-300 mt-3" />

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="px-6 py-4">
            <div class="mb-3">
                <p class="text-xl text-center text-gray-600">Create your account</p>
            </div>
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" placeholder="Enter Your Name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" placeholder="Enter Your Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="Enter Your Password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password"
                    placeholder="Confirm Your Password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>


            <x-primary-button class="mt-4 w-full text-center">
                {{ __('Register') }}
            </x-primary-button>

            <p class="text-sm text-center mt-4 ">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold underline hover:text-gray-700">
                    Log In
                </a>
            </p>
        </div>
        <!-- Name -->

    </form>
</x-guest-layout>
