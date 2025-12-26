<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-base-bg: #0B0F14;
            --color-surface: #12171F;
            --color-text-primary: #EAF0FF;
            --color-text-muted: #94A3B8;
            --color-accent-cyan: #22D3EE;
            --color-accent-violet: #7C3AED;
            --color-border: rgba(148, 163, 184, 0.15);
            --color-error: #EF4444;
            --color-success: #10B981;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--color-base-bg);
            color: var(--color-text-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Animated background effect */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(circle at 20% 30%, rgba(34, 211, 238, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(124, 58, 237, 0.08) 0%, transparent 50%);
            animation: float 20s ease-in-out infinite;
            z-index: 0;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(120deg); }
            66% { transform: translate(-20px, 20px) rotate(240deg); }
        }

        .auth-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 460px;
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .auth-card {
            background: var(--color-surface);
            border: 1px solid var(--color-border);
            border-radius: 16px;
            padding: 48px 40px;
            box-shadow:
                0 0 0 1px rgba(34, 211, 238, 0.05),
                0 20px 60px -10px rgba(0, 0, 0, 0.4),
                0 0 80px -20px rgba(34, 211, 238, 0.1);
            position: relative;
            overflow: hidden;
        }

        .auth-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg,
            transparent,
            var(--color-accent-cyan) 30%,
            var(--color-accent-violet) 70%,
            transparent);
            opacity: 0.6;
        }

        .auth-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .auth-header h1 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 8px;
            background: linear-gradient(135deg, var(--color-text-primary), var(--color-accent-cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .auth-header p {
            color: var(--color-text-muted);
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: var(--color-text-primary);
            margin-bottom: 8px;
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 0.3px;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            background: var(--color-base-bg);
            border: 1px solid var(--color-border);
            border-radius: 8px;
            color: var(--color-text-primary);
            font-size: 15px;
            font-family: 'DM Sans', sans-serif;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: var(--color-accent-cyan);
            box-shadow:
                0 0 0 3px rgba(34, 211, 238, 0.1),
                0 0 20px rgba(34, 211, 238, 0.15);
        }

        .form-input::placeholder {
            color: var(--color-text-muted);
            opacity: 0.5;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
        }

        .checkbox-input {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 1px solid var(--color-border);
            background: var(--color-base-bg);
            cursor: pointer;
            transition: all 0.2s ease;
            appearance: none;
            -webkit-appearance: none;
            position: relative;
        }

        .checkbox-input:checked {
            background: var(--color-accent-cyan);
            border-color: var(--color-accent-cyan);
        }

        .checkbox-input:checked::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: var(--color-base-bg);
            font-size: 12px;
            font-weight: bold;
        }

        .checkbox-label {
            margin-left: 10px;
            font-size: 14px;
            color: var(--color-text-muted);
            cursor: pointer;
            user-select: none;
        }

        .form-actions {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .btn-primary {
            width: 100%;
            padding: 14px 24px;
            background: linear-gradient(135deg, var(--color-accent-cyan), var(--color-accent-violet));
            border: none;
            border-radius: 8px;
            color: var(--color-text-primary);
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'JetBrains Mono', monospace;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow:
                0 10px 30px -5px rgba(34, 211, 238, 0.4),
                0 0 40px -10px rgba(124, 58, 237, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
        }

        .text-link {
            color: var(--color-accent-cyan);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
            position: relative;
        }

        .text-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--color-accent-cyan);
            transition: width 0.3s ease;
        }

        .text-link:hover::after {
            width: 100%;
        }

        .text-link:hover {
            color: var(--color-accent-violet);
        }

        .error-message {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 24px;
            color: #FCA5A5;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: shake 0.4s ease;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }

        .error-message::before {
            content: '⚠';
            font-size: 18px;
        }

        .success-message {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 8px;
            padding: 12px 16px;
            margin-bottom: 24px;
            color: #6EE7B7;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .success-message::before {
            content: '✓';
            font-size: 18px;
        }

        .field-error {
            color: #FCA5A5;
            font-size: 13px;
            margin-top: 6px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .field-error::before {
            content: '•';
        }

        .form-input.error {
            border-color: var(--color-error);
        }

        .form-input.error:focus {
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        /* Utility classes for Breeze compatibility */
        .block { display: block; }
        .mt-1 { margin-top: 0.25rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-4 { margin-top: 1rem; }
        .mb-4 { margin-bottom: 1rem; }
        .ms-2 { margin-left: 0.5rem; }
        .ms-3 { margin-left: 0.75rem; }
        .w-full { width: 100%; }
        .inline-flex { display: inline-flex; }
        .items-center { align-items: center; }
        .justify-end { justify-content: flex-end; }
        .flex { display: flex; }
        .rounded { border-radius: 0.25rem; }
        .underline { text-decoration: underline; }
        .text-sm { font-size: 0.875rem; }

        @media (max-width: 480px) {
            .auth-card {
                padding: 36px 28px;
            }

            .auth-header h1 {
                font-size: 24px;
            }

            .form-actions {
                gap: 12px;
            }
        }

        /* Loading state */
        .btn-primary.loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .btn-primary.loading::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            top: 50%;
            left: 50%;
            margin-left: -8px;
            margin-top: -8px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: white;
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
<div class="auth-container">
    <div class="auth-card">
        {{ $slot }}
    </div>
</div>

<script>
    // Add loading state to form submissions
    document.addEventListener('DOMContentLoaded', function() {
        const forms = document.querySelectorAll('form');
        forms.forEach(form => {
            form.addEventListener('submit', function(e) {
                const button = this.querySelector('button[type="submit"], .btn-primary');
                if (button) {
                    button.classList.add('loading');
                    button.textContent = '';
                }
            });
        });

        // Auto-focus on first error field
        const errorField = document.querySelector('.form-input.error');
        if (errorField) {
            errorField.focus();
        }
    });
</script>
</body>
</html>
