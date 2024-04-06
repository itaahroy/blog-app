<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


        <div class="login-form">
        <div class="text">
            Forgot Password
        </div>

         <form method="POST" action="{{ route('password.email') }}">

        @csrf

            <div class="field">
                <div class="fas fa-envelope"></div>
                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus >

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>

            <button type="submit" name="reset-password" >Email Password Reset</button>

        </form>
    </div>
</x-guest-layout>
