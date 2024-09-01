<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Zgłoszenie z panelu administracyjnego Site Wizard</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            .email-container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                margin: 0 auto;
            }
            h1 {
                color: #333333;
                font-size: 24px;
                margin-bottom: 20px;
            }
            p {
                color: #555555;
                line-height: 1.6;
                margin: 10px 0;
            }
        </style>
    </head>
    <body>
        <div class="email-container">
            <h1>Zgłoszenie z panelu administracyjnego Site Wizard</h1>
            <p><strong>Imię i nazwisko:</strong> {{ $data["name"] }}</p>
            <p><strong>Temat:</strong> {{ $data["topic"] }}</p>
            <p><strong>Email:</strong> {{ $data["email"] }}</p>
            <p><strong>Wiadomość:</strong> {{ $data["message"] }}</p>
            <p><strong>Domena:</strong> {{ $data["domain"] }}</p>
            <p><strong>Wersja PHP:</strong> {{ $data["php_version"] }}</p>
            <p>
                <strong>Wersja Laravel:</strong> {{ $data["laravel_version"] }}
            </p>
        </div>
    </body>
</html>
