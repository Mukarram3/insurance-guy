<x-guest-layout>
    <div class="auth-header">
        <h1>Welcome back</h1>
        <p class="intro">Sign in to your private record.</p>
    </div>

    <!-- Session Status -->
    @if (session('status'))
        <div class="success-message">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ url('/laravel/login') }}">
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
                autocomplete="username"
            />
            @if ($errors->has('email'))
                <div class="field-error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input
                id="password"
                class="form-input {{ $errors->has('password') ? 'error' : '' }}"
                type="password"
                name="password"
                required
                autocomplete="current-password"
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
                Remember me
            </label>
        </div>

        <button type="submit" class="btn-primary">
            Sign in
        </button>

        @if (Route::has('password.request'))
            <div class="text-link">
                <a href="{{ url('/laravel/forgot-password') }}">Forgot your password?</a>
            </div>
        @endif

        <div class="text-link">
            Don't have a record? <a href="{{ url('/laravel/register') }}">Create one</a>
        </div>
    </form>
</x-guest-layout>
