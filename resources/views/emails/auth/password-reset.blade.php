<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 0;
            margin: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header img {
            max-width: 100px;
        }
        .content {
            text-align: left;
        }
        .button {
            display: inline-block;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ asset('backend/assets/images/logo/1.png') }}" alt="Your App Logo">
        </div>
        <div class="content">
            <h2>Password Reset Request</h2>
            <p>Hello,</p>
            <p>We received a request to reset your password. Click the button below to reset your password:</p>
            <a href="{{ $resetLink }}" class="button">Reset Password</a>
            <p>If you did not request a password reset, please ignore this email.</p>
            <p>Thank you,<br>Your App Name Team</p>
        </div>
        <div class="footer">
            <p>If you’re having trouble clicking the "Reset Password" button, copy and paste the URL below into your web browser:</p>
            <p><a href="{{ $resetLink }}">{{ $resetLink }}</a></p>
        </div>
    </div>
</body>
</html>
