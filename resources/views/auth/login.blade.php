<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
          <div class="login-form">
        <div class="text">
            LOGIN
        </div>
        <form method="POST" action="{{ route('login') }}">
        @csrf

            <div class="field">
                <div class="fas fa-envelope"></div>
                <input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">

                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="current-password">

                <x-input-error :messages="$errors->get('password')" class="mt-2" />

            </div>
            <button type="submit">LOGIN</button>
            <div class="forgotpasswd">
                <a  class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">Forgot password</a>

            </div>
            <div class="link">
                Not a member?
                <a href="{{ route('register')}}">Signup now</a>
            </div>
        </form>
    </div>

</x-guest-layout>
