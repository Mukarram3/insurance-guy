<x-guest-layout>
    <div class="auth-header">
        <h1>Create Account</h1>
        <p>Join us and start your journey</p>
    </div>

    <form method="POST" action="{{ url('/laravel/register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <label for="name" class="form-label">{{ __('Name') }}</label>
            <input
                id="name"
                class="form-input {{ $errors->has('name') ? 'error' : '' }}"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
                placeholder="Your full name"
            />
            @if ($errors->has('name'))
                <div class="field-error">{{ $errors->first('name') }}</div>
            @endif
        </div>

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
                autocomplete="new-password"
                placeholder="Create a strong password"
            />
            @if ($errors->has('password'))
                <div class="field-error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input
                id="password_confirmation"
                class="form-input {{ $errors->has('password_confirmation') ? 'error' : '' }}"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                placeholder="Confirm your password"
            />
            @if ($errors->has('password_confirmation'))
                <div class="field-error">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                {{ __('Register') }}
            </button>

            <div style="text-align: center;">
                <a class="text-link" href="{{ url('/laravel/login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
