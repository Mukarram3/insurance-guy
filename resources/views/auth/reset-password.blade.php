<x-guest-layout>
    <div class="auth-header">
        <h1>New Password</h1>
        <p>Create a new password for your account</p>
    </div>

    <form method="POST" action="{{ url('/laravel/reset-password') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input
                id="email"
                class="form-input {{ $errors->has('email') ? 'error' : '' }}"
                type="email"
                name="email"
                value="{{ old('email', $request->email) }}"
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
                autocomplete="new-password"
                placeholder="Create a new password"
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
                placeholder="Confirm your new password"
            />
            @if ($errors->has('password_confirmation'))
                <div class="field-error">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</x-guest-layout>
