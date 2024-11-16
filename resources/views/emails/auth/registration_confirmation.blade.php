<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestätigung deiner Registrierung</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border: 1px solid #ddd;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            font-size: 16px;
            padding: 20px;
        }
        .button {
            display: inline-block;
            margin: 20px 0;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('backend/assets/images/logo.png') }}" alt="{{ config('app.name') }} Logo">
        </div>
        <div class="content">
            <p>Hallo {{ $username }},</p>

            <p>Vielen Dank für Ihre Registrierung bei <strong>{{ config('app.name') }}</strong>. Mit Ihrem neuen Konto können Sie ganz einfach Mietobjekte verwalten, Immobilien verkaufen oder Nebenkostenabrechnungen erstellen.</p>

            <p>Um sicherzustellen, dass Ihre E-Mail-Adresse korrekt ist und um Ihr Konto vollständig freizuschalten, bestätigen Sie bitte Ihre E-Mail-Adresse.</p>

            <p>
                <a href="{{ $verificationLink }}" class="button">E-Mail-Adresse bestätigen</a>
            </p>

            <p>Wichtig: Der Bestätigungslink ist <strong>{{ $expiresIn }}</strong> gültig. Bitte bestätigen Sie Ihre E-Mail-Adresse rechtzeitig, damit Sie Zugriff auf alle Funktionen erhalten.</p>

            <p>Falls Sie diese Registrierung nicht vorgenommen haben, können Sie diese Nachricht ignorieren. Ihr Konto wird ohne Ihre Bestätigung nicht aktiviert.</p>
        </div>
        <div class="footer">
            <p>Vielen Dank,<br>Ihr {{ config('app.name') }} Team</p>
        </div>
    </div>
</body>
</html>
