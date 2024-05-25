<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="col-12">
            <x-input-label for="Name" :value="__('Name')" class="form-label" />
            <x-text-input id="Name" class="form-control" type="Name" name="Name" :value="old('Name')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('Name')" class="invalid-feedback" />
        </div>

        <!-- Email Address -->
       
       <div class="col-12">
            <x-input-label for="email" :value="__('Email')" class="form-label" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
        </div>

        <!-- Password -->
        <div class="col-12">
            <x-input-label for="password" :value="__('Password')" class="form-label" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
        </div>

        <!-- Confirm Password -->
        <div class="col-12">
            <x-input-label for="ConfirmPassword" :value="__('ConfirmPassword')" class="form-label" />

            <x-text-input id="ConfirmPassword" class="form-control"
                            type="password"
                            name="ConfirmPassword"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <br></br>

            <div class="col-12">
            <x-primary-button class="btn btn-primary w-100">
                {{ __('Register') }}
            </x-primary-button>
        </div>
        
    </form>
</x-guest-layout>
