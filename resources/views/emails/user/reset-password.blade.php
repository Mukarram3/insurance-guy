<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set a new password — ORI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f6f8fb;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe";
            color: #0b1c33;
        }
        .container {
            max-width: 560px;
            margin: 0 auto;
            padding: 48px 24px;
        }
        .card {
            background: #ffffff;
            border-radius: 16px;
            padding: 40px 32px;
        }
        .logo {
            font-size: 32px;
            font-weight: 900;
            letter-spacing: -0.03em;
            margin-bottom: 6px;
        }
        .tagline {
            font-size: 12px;
            color: #5f6f86;
            margin-bottom: 32px;
        }
        h1 {
            font-size: 22px;
            font-weight: 800;
            margin: 0 0 20px;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 0 0 16px;
        }
        .button-wrap {
            margin: 32px 0;
            text-align: center;
        }
        .button {
            display: inline-block;
            padding: 14px 28px;
            background-color: #0b1626;
            color: #ffffff !important;
            border-radius: 999px;
            font-weight: 700;
            font-size: 15px;
            text-decoration: none;
        }
        .subtle {
            font-size: 13px;
            color: #5f6f86;
            margin-top: 24px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #5f6f86;
            margin-top: 32px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="card">
        <!-- ORI LOGO -->
        <div class="logo">ORI</div>
        <div class="tagline">It remembers what comes back.</div>

        <h1>Set a new password</h1>

        <p>Hello {{ $user->name ?? 'there' }},</p>

        <p>
            We received a request to set a new password for your private record.
        </p>

        <p>
            Use the button below to continue.
        </p>

        <!-- RESET BUTTON -->
        <div class="button-wrap">
            <a href="{{ $resetUrl }}" class="button">
                Set a new password
            </a>
        </div>

        <p class="subtle">
            If you didn't request this, you can safely ignore this email.
            Your password will not be changed.
        </p>
    </div>

    <div class="footer">
        © {{ date('Y') }} ORI. All rights reserved.
    </div>
</div>
</body>
</html>
