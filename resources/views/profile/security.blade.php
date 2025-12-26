<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Security
        </h2>
    </x-slot>

    <div class="max-w-xl mx-auto py-8">

        {{-- Enable 2FA --}}
        @if (! auth()->user()->two_factor_secret)
            <form method="POST" action="{{ url('/user/two-factor-authentication') }}">
                @csrf
                <x-primary-button>
                    Enable Two-Factor Authentication
                </x-primary-button>
            </form>
        @endif

        {{-- Show QR + confirm --}}
        @if (session('status') == 'two-factor-authentication-enabled')
            <div class="mt-6">
                <p class="mb-4 text-sm text-gray-600">
                    Scan this QR code using your authenticator app and enter the OTP to confirm.
                </p>

                {!! auth()->user()->twoFactorQrCodeSvg() !!}

                <form method="POST" action="{{ url('/user/confirmed-two-factor-authentication') }}" class="mt-4">
                    @csrf
                    <x-text-input name="code" placeholder="123456" required />
                    <x-primary-button class="mt-2">
                        Confirm
                    </x-primary-button>
                </form>
            </div>
        @endif

        {{-- Disable 2FA --}}
        @if (auth()->user()->two_factor_confirmed_at)
            <form method="POST" action="{{ url('/user/two-factor-authentication') }}" class="mt-6">
                @csrf
                @method('DELETE')
                <x-danger-button>
                    Disable Two-Factor Authentication
                </x-danger-button>
            </form>
        @endif

    </div>
</x-app-layout>
