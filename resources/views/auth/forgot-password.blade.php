<x-guest-layout>
    <div class="auth-header">
        <h1>Reset Password</h1>
        <p>Enter your email to receive a reset link</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="success-message">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ url('laravel/forgot-password') }}">
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
                placeholder="you@example.com"
            />
            @if ($errors->has('email'))
                <div class="field-error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                {{ __('Email Password Reset Link') }}
            </button>

            <div style="text-align: center;">
                <a class="text-link" href="{{ url('/laravel/login') }}">
                    {{ __('Back to login') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>
