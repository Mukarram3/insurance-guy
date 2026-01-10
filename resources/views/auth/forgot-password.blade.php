<x-guest-layout>
    <div class="auth-header">
        <h1>Reset your password</h1>
        <p class="intro">Enter your email to receive a reset link.</p>
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
            <label for="email" class="form-label">Email</label>
            <input
                id="email"
                class="form-input {{ $errors->has('email') ? 'error' : '' }}"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            />
            @if ($errors->has('email'))
                <div class="field-error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <button type="submit" class="btn-primary">
            Send reset link
        </button>

        <div class="text-link">
            <a href="{{ url('/laravel/login') }}">Back to sign in</a>
        </div>
    </form>
</x-guest-layout>
