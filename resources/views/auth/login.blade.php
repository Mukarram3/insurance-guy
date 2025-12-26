<x-guest-layout>
    <div class="auth-header">
        <h1>Welcome Back</h1>
        <p>Enter your credentials to access your account</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="success-message">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input
                id="email"
                class="form-input {{ $errors->has('email') ? 'error' : '' }}"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
                autocomplete="username"
                placeholder="you@example.com"
            />
            @if ($errors->has('email'))
                <div class="field-error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input
                id="password"
                class="form-input {{ $errors->has('password') ? 'error' : '' }}"
                type="password"
                name="password"
                required
                autocomplete="current-password"
                placeholder="Enter your password"
            />
            @if ($errors->has('password'))
                <div class="field-error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Remember Me -->
        <div class="checkbox-group">
            <input
                id="remember_me"
                type="checkbox"
                class="checkbox-input"
                name="remember"
            />
            <label for="remember_me" class="checkbox-label">
                {{ __('Remember me') }}
            </label>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                {{ __('Log in') }}
            </button>

            @if (Route::has('password.request'))
                <div style="text-align: center;">
                    <a class="text-link" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </div>
            @endif
        </div>
    </form>
</x-guest-layout>
