<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <title>@yield('title') | Elsscuba</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&family=Outfit:wght@700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; }

        html, body { margin: 0; padding: 0; }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            font-family: 'Jost', 'Segoe UI', Tahoma, Arial, sans-serif;
            font-size: 18px;
            line-height: 1.6;
            color: #56676d;
            background: linear-gradient(180deg, #ffffff 0%, #fcf1e5 100%);
        }

        .brand {
            padding: 24px 16px 0;
            display: flex;
            justify-content: center;
        }

        .brand a {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .brand img {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }

        .brand span {
            font-size: 28px;
            font-weight: 600;
            color: #3064af;
        }

        .error {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 32px 16px;
        }

        .error-code {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 700;
            font-size: clamp(96px, 24vw, 220px);
            line-height: 1;
            color: transparent;
            -webkit-text-stroke: 2px #333333;
        }

        .error-code::after {
            content: '';
            display: block;
            width: 56px;
            height: 4px;
            margin: 24px auto 0;
            background: #d84156;
        }

        .error h1 {
            margin: 24px 0 12px;
            font-family: 'Outfit', 'Jost', sans-serif;
            font-weight: 700;
            font-size: clamp(28px, 6vw, 44px);
            line-height: 1.15;
            color: #343842;
        }

        .error p {
            margin: 0 0 8px;
            max-width: 34rem;
        }

        .error .ar {
            font-family: 'Segoe UI', Tahoma, Arial, sans-serif;
            font-size: 17px;
        }

        .btn {
            display: inline-block;
            margin-top: 28px;
            padding: 14px 32px;
            min-height: 48px;
            font-family: 'Jost', 'Segoe UI', Tahoma, Arial, sans-serif;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            text-decoration: none;
            color: #ffffff;
            background: #d84156;
            border-radius: 4px;
            transition: background-color 0.2s ease-out;
        }

        .btn:hover { background: #c60035; }

        .btn:focus-visible {
            outline: 3px solid #343842;
            outline-offset: 3px;
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            overflow: hidden;
            clip: rect(0 0 0 0);
            white-space: nowrap;
        }

        footer {
            padding: 20px 16px 28px;
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #353535;
        }

        @media (max-width: 480px) {
            body { font-size: 16px; }
            .brand span { font-size: 24px; }
            .btn { width: 100%; max-width: 20rem; text-align: center; }
        }
    </style>
</head>
<body>
    <header class="brand">
        <a href="{{ url('/') }}" aria-label="Elsscuba - Home">
            <img src="{{ asset('images/logo.jpg') }}" alt="Els Scuba Logo">
            <span>Elsscuba</span>
        </a>
    </header>

    <main class="error">
        <p class="error-code" aria-hidden="true">@yield('code')</p>
        <h1><span class="visually-hidden">@yield('code') - </span>@yield('heading')</h1>
        <p>@yield('message')</p>
        <p class="ar" lang="ar" dir="rtl">@yield('message_ar')</p>
        <a class="btn" href="{{ url('/') }}">Back to Home</a>
    </main>

    <footer>&copy; {{ now()->year }} ElSscuba Company</footer>
</body>
</html>
