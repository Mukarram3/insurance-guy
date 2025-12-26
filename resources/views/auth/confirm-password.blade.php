<x-guest-layout>
    <div class="auth-header">
        <h1>Confirm Password</h1>
        <p>This is a secure area - please verify your identity</p>
    </div>

    <div style="background: rgba(34, 211, 238, 0.05); border: 1px solid rgba(34, 211, 238, 0.2); border-radius: 8px; padding: 14px 16px; margin-bottom: 28px; color: var(--color-text-muted); font-size: 14px; line-height: 1.6;">
        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input
                id="password"
                class="form-input {{ $errors->has('password') ? 'error' : '' }}"
                type="password"
                name="password"
                required
                autofocus
                autocomplete="current-password"
                placeholder="Enter your password to confirm"
            />
            @if ($errors->has('password'))
                <div class="field-error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                {{ __('Confirm') }}
            </button>
        </div>
    </form>
</x-guest-layout>
