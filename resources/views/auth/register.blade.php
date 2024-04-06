<x-guest-layout>


    <div class="login-form">
        <div class="text">
            SIGN UP
        </div>

        <form method="POST" action="{{ route('register') }}">
        @csrf

            <div class="field">
                <div class="fas fa-user"></div>
                <input id="name" placeholder="Username" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="field">
                <div class="fas fa-envelope"></div>
                <input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            placeholder="Password"
                            required autocomplete="new-password">

                 <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            </div>
            <button type="submit" name="register">SignUp</button>
            <div class="link">
                Already have an account?
                <a href="{{ route('login')}}">Login</a>
            </div>
        </form>
    </div>
</x-guest-layout>
