<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New user registered — ORI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe";
            Helvetica, Arial, sans-serif;
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
        .user-details {
            background: #f6f8fb;
            border-radius: 10px;
            padding: 20px 24px;
            margin: 24px 0;
        }
        .detail-row {
            display: flex;
            margin-bottom: 12px;
        }
        .detail-row:last-child {
            margin-bottom: 0;
        }
        .detail-label {
            font-size: 14px;
            font-weight: 600;
            color: #5f6f86;
            min-width: 80px;
        }
        .detail-value {
            font-size: 14px;
            color: #0b1c33;
            font-weight: 500;
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
        .meta {
            font-size: 13px;
            color: #5f6f86;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #e5e7eb;
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
        <div class="logo">ORI</div>
        <div class="tagline">It remembers what comes back.</div>

        <h1>New user registered</h1>

        <p>A new user has created a private record.</p>

        <div class="user-details">
            <div class="detail-row">
                <div class="detail-label">Name:</div>
                <div class="detail-value">{{ $user->name }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Email:</div>
                <div class="detail-value">{{ $user->email }}</div>
            </div>
            <div class="detail-row">
                <div class="detail-label">Registered:</div>
                <div class="detail-value">{{ $user->created_at->format('F j, Y \a\t g:i A') }}</div>
            </div>
        </div>

        <div class="meta">
            This is an automated notification sent to administrators when a new user creates an account.
        </div>
    </div>

    <div class="footer">
        © {{ date('Y') }} ORI. All rights reserved.
    </div>
</div>
</body>
</html>
