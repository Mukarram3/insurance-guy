<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New sign-in to your record — ORI</title>
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
        .details {
            background: #f1f4f8;
            border-radius: 12px;
            padding: 16px 18px;
            margin: 24px 0;
            font-size: 14px;
            color: #0b1c33;
        }
        .details div {
            margin-bottom: 6px;
        }
        .button-wrap {
            margin: 28px 0;
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
            margin-top: 20px;
        }
        .subtle a {
            color: #0b1c33;
            text-decoration: underline;
            font-weight: 500;
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
        <h1>New sign-in to your record</h1>
        <p>Hello {{ $user->name ?? 'there' }},</p>
        <p>
            A new sign-in to your private record was detected.
        </p>
        <div class="details">
            <div><strong>Date:</strong> {{ $signInDate }}</div>
            <div><strong>Location:</strong> {{ $location ?? 'Unknown' }}</div>
            <div><strong>Device:</strong> {{ $device ?? 'Unknown' }}</div>
        </div>
        <p>
            If this was you, no action is needed.
        </p>
        <div class="button-wrap">
            <a href="{{ url('/laravel/login') }}" class="button">
                Return to your record
            </a>
        </div>
        <p class="subtle">
            If you don’t recognize this sign-in, you can
            <a href="">contact support</a>.
        </p>
    </div>
    <div class="footer">
        © {{ date('Y') }} ORI. All rights reserved.
    </div>
</div>
</body>
</html>
