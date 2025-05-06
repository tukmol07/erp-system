<x-guest-layout>
    <!-- Main Container with Logo as Background -->
    <div class="relative h-[400px]  bg-cover bg-center py-10 px-10" style="background-image: url('{{ asset('images/smart.png') }}');">

        <!-- Overlay for readability -->
        <div class="absolute bg-white opacity-50 inset-1"></div>

        <!-- Form Container with Transparent Background -->
        <div class="relative z-10 flex items-center justify-center h-full px-2 py-4">
            <div class="w-full p-2 bg-transparent rounded-lg sm:max-w-md">

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 border-green-300 rounded shadow-sm">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block w-full mt-1"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-10">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="text-green-600 border-green-300 rounded shadow-sm focus:ring-green-500" name="remember">
                            <span class="text-sm text-black ms-2 ">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="inline-block px-3 py-1 text-sm font-semibold text-white bg-indigo-600 rounded-md hover:bg-green-800">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
