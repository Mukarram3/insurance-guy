<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Password updated — ORI</title>
    <style>
        :root{
            --navy:#0b1c33;
            --ink-soft:#5f6f86;
            --bg:#f6f8fb;
            --dark:#0b1626;
        }
        *{ box-sizing:border-box; }
        body{
            margin:0;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe";
            background:var(--bg);
            color:var(--navy);
            -webkit-font-smoothing:antialiased;
        }
        a{ text-decoration:none; color:inherit; }
        /* ================= HEADER ================= */
        header{
            padding:32px 56px;
        }
        .logo-lockup{
            display:flex;
            flex-direction:column;
            line-height:1;
        }
        .logo-mark{
            font-size:42px;
            font-weight:900;
            letter-spacing:-0.03em;
        }
        .logo-tagline{
            margin-top:6px;
            font-size:12px;
            letter-spacing:0.015em;
            color:var(--ink-soft);
        }
        /* ================= CONTENT ================= */
        .main{
            max-width:520px;
            margin:0 auto;
            padding:120px 24px 160px;
        }
        h1{
            font-size:36px;
            font-weight:900;
            letter-spacing:-0.03em;
            line-height:1.05;
            margin:0 0 14px;
        }
        .intro{
            font-size:18px;
            line-height:1.6;
            color:var(--ink-soft);
            margin-bottom:48px;
        }
        .button{
            display:inline-block;
            padding:18px 44px;
            background:var(--dark);
            color:#fff;
            border-radius:999px;
            font-weight:700;
            font-size:16px;
            letter-spacing:0.015em;
            transition:transform 0.15s ease, box-shadow 0.15s ease;
        }
        .button:hover{
            transform:translateY(-1px);
            box-shadow:0 6px 18px rgba(11,22,38,0.12);
        }
        /* ================= FOOTER ================= */
        footer{
            padding:72px 56px;
            display:flex;
            justify-content:center;
            align-items:center;
            gap:28px;
            font-size:13px;
            color:var(--ink-soft);
            flex-wrap:wrap;
        }
        footer nav{
            display:flex;
            gap:24px;
        }
        /* ================= MOBILE ================= */
        @media (max-width:600px){
            header{ padding:24px; }
            h1{ font-size:30px; }
            .intro{ font-size:17px; }
            footer{
                padding:56px 24px;
                gap:20px;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="logo-lockup">
        <div class="logo-mark">ORI</div>
        <div class="logo-tagline">It remembers what comes back.</div>
    </div>
</header>
<main class="main">
    <h1>Your password has been updated</h1>
    <p class="intro">
        You can return to your record.
    </p>
    <a href="{{ url('/laravel/login') }}" class="button">
        Return to your record
    </a>
</main>
<footer>
    <nav>
        <a href="/privacy">Privacy</a>
        <a href="/terms">Terms</a>
        <a href="/support">Support</a>
    </nav>
    <div>© 2026 ORI. All rights reserved.</div>
</footer>
</body>
</html>
