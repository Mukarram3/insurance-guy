<x-guest-layout>
    <div class="auth-header">
        <h1>Create your private record</h1>
        <p class="intro">
            This record is yours alone.
            Nothing is shared.
        </p>
    </div>

    <form method="POST" action="{{ url('/laravel/register') }}">
        @csrf

        <!-- Name -->
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input
                id="name"
                class="form-input {{ $errors->has('name') ? 'error' : '' }}"
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus
                autocomplete="name"
            />
            @if ($errors->has('name'))
                <div class="field-error">{{ $errors->first('name') }}</div>
            @endif
        </div>

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
                autocomplete="email"
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
                autocomplete="new-password"
            />
            @if ($errors->has('password'))
                <div class="field-error">{{ $errors->first('password') }}</div>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <label for="password_confirmation" class="form-label">Confirm password</label>
            <input
                id="password_confirmation"
                class="form-input {{ $errors->has('password_confirmation') ? 'error' : '' }}"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
            />
            @if ($errors->has('password_confirmation'))
                <div class="field-error">{{ $errors->first('password_confirmation') }}</div>
            @endif
        </div>

        <button type="submit" class="btn-primary">
            Create your private record
        </button>

        <div class="note">No streaks. No reminders. No pressure.</div>

        <div class="text-link">
            Already have a record? <a href="{{ url('/laravel/login') }}">Sign in</a>
        </div>
    </form>
</x-guest-layout>
