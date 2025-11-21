<x-guest-layout>
    <!-- Logo -->
    <div class="login-logo-container animate-fade-in">
        <a href="/">
            <x-application-logo class="login-logo" />
        </a>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4 login-status" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <!-- Email Address -->
        <div class="login-field-group animate-slide-up" style="animation-delay: 0.1s;">
            <label for="email" class="login-label">{{ __('Email') }}</label>
            <input 
                id="email" 
                class="login-input" 
                type="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus 
                autocomplete="username"
                placeholder="admin@example.com"
            />
            <x-input-error :messages="$errors->get('email')" class="login-error" />
        </div>

        <!-- Password -->
        <div class="login-field-group animate-slide-up" style="animation-delay: 0.2s;">
            <label for="password" class="login-label">{{ __('Password') }}</label>
            <input 
                id="password" 
                class="login-input"
                type="password"
                name="password"
                required 
                autocomplete="current-password"
                placeholder="••••••••"
            />
            <x-input-error :messages="$errors->get('password')" class="login-error" />
        </div>

        <!-- Remember Me and Forgot Password -->
        <div class="login-options animate-slide-up" style="animation-delay: 0.3s;">
            <label for="remember_me" class="login-checkbox-label">
                <input 
                    id="remember_me" 
                    type="checkbox" 
                    class="login-checkbox" 
                    name="remember"
                />
                <span>{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="login-forgot-link" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="login-submit-container animate-slide-up" style="animation-delay: 0.4s;">
            <button type="submit" class="login-button">
                {{ __('LOG IN') }}
            </button>
        </div>
    </form>
</x-guest-layout>
