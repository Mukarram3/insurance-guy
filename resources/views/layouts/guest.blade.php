<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <style>
        :root {
            --navy: #0b1c33;
            --ink-soft: #5f6f86;
            --bg: #f6f8fb;
            --dark: #0b1626;
            --field: #ffffff;
            --border: rgba(11, 28, 51, 0.15);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: -apple-system,BlinkMacSystemFont,"Segoe";
            color: var(--navy);
            -webkit-font-smoothing: antialiased;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* ================= HEADER ================= */
        header {
            padding: 32px 56px;
        }

        .logo-lockup {
            display: flex;
            flex-direction: column;
            line-height: 1;
        }

        .logo-mark {
            font-size: 42px;
            font-weight: 900;
            letter-spacing: -0.03em;
        }

        .logo-tagline {
            margin-top: 6px;
            font-size: 12px;
            letter-spacing: 0.015em;
            color: var(--ink-soft);
        }

        /* ================= MAIN CONTENT ================= */
        .main {
            flex: 1;
            max-width: 520px;
            margin: 0 auto;
            padding: 48px 24px 80px;
            width: 100%;
        }

        .auth-header h1 {
            font-size: 38px;
            font-weight: 900;
            letter-spacing: -0.03em;
            line-height: 1.05;
            margin: 0 0 14px;
        }

        .auth-header p {
            font-size: 18px;
            line-height: 1.6;
            color: var(--ink-soft);
            margin-bottom: 40px;
        }

        /* ================= FORM STYLES ================= */
        form {
            display: flex;
            flex-direction: column;
            gap: 26px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            font-size: 13px;
            letter-spacing: 0.02em;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-input {
            height: 50px;
            padding: 0 16px;
            font-size: 16px;
            border-radius: 10px;
            border: 1px solid var(--border);
            background: var(--field);
            font-family: inherit;
            transition: border-color 0.2s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: var(--dark);
        }

        .form-input::placeholder {
            color: var(--ink-soft);
            opacity: 0.5;
        }

        .form-input.error {
            border-color: #dc2626;
        }

        .field-error {
            margin-top: 8px;
            font-size: 13px;
            color: #dc2626;
        }

        /* Checkbox styles */
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 1px solid var(--border);
            cursor: pointer;
        }

        .checkbox-label {
            margin-left: 10px;
            font-size: 14px;
            color: var(--navy);
            cursor: pointer;
        }

        /* ================= BUTTONS ================= */
        .form-actions {
            display: flex;
            flex-direction: column;
            gap: 16px;
            margin-top: 20px;
        }

        .btn-primary {
            width: 100%;
            height: 54px;
            border-radius: 999px;
            border: none;
            background: var(--dark);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            letter-spacing: 0.015em;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(11, 22, 38, 0.12);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .text-link {
            color: var(--navy);
            font-size: 14px;
            font-weight: 500;
            text-align: center;
        }

        .text-link:hover {
            text-decoration: underline;
        }

        .note {
            margin-top: 8px;
            font-size: 14px;
            color: var(--ink-soft);
            text-align: center;
        }

        /* ================= MESSAGES ================= */
        .error-message,
        .success-message {
            padding: 12px 16px;
            border-radius: 10px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .error-message {
            background: #fee;
            border: 1px solid #fcc;
            color: #c33;
        }

        .success-message {
            background: #efe;
            border: 1px solid #cfc;
            color: #3c3;
        }

        /* ================= FOOTER ================= */
        footer {
            padding: 72px 56px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 28px;
            font-size: 13px;
            color: var(--ink-soft);
            flex-wrap: wrap;
        }

        footer nav {
            display: flex;
            gap: 24px;
        }

        footer a:hover {
            color: var(--navy);
        }

        /* ================= MOBILE ================= */
        @media (max-width: 600px) {
            header {
                padding: 24px;
            }

            .logo-mark {
                font-size: 36px;
            }

            .main {
                padding: 32px 24px 60px;
            }

            .auth-header h1 {
                font-size: 32px;
            }

            .auth-header p {
                font-size: 17px;
            }

            footer {
                padding: 56px 24px;
                gap: 20px;
            }

            footer nav {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }
        }

        /* ================= UTILITY CLASSES ================= */
        .block { display: block; }
        .mt-1 { margin-top: 0.25rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-4 { margin-top: 1rem; }
        .mb-4 { margin-bottom: 1rem; }
        .ms-2 { margin-left: 0.5rem; }
        .w-full { width: 100%; }
        .flex { display: flex; }
        .items-center { align-items: center; }
        .justify-end { justify-content: flex-end; }
    </style>
</head>
<body>
<header>
    <a href="{{ url('/') }}">
        <div class="logo-lockup">
{{--            <div class="logo-mark">{{ config('app.name', 'ORI') }}</div>--}}
            <div class="logo-mark">ORI</div>
            <div class="logo-tagline">It remembers what comes back.</div>
        </div>
    </a>
</header>

<main class="main">
    {{ $slot }}
</main>

<footer>
    <nav>
        <a href="https://wp.useori.com/privacy/">Privacy</a>
        <a href="https://wp.useori.com/terms/">Terms</a>
        <a href="https://wp.useori.com/support/">Support</a>
    </nav>
    <div>&copy; {{ date('Y') }} {{ config('app.name', 'ORI') }}. All rights reserved.</div>
</footer>
</body>
</html>
