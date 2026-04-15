<?php
$date = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World PHP</title>
    <style>
        :root {
            color-scheme: light;
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --accent: #2563eb;
            --border: #dbe4f0;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #eaf2ff 0%, #f8fafc 45%, #eef2ff 100%);
            color: var(--text);
        }

        .card {
            width: min(92vw, 640px);
            padding: 40px;
            border: 1px solid var(--border);
            border-radius: 20px;
            background: var(--card);
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.12);
            text-align: center;
        }

        h1 {
            margin: 0 0 12px;
            font-size: clamp(2rem, 5vw, 3.5rem);
            color: var(--accent);
        }

        p {
            margin: 0.5rem 0;
            line-height: 1.6;
            color: var(--muted);
        }

        .badge {
            display: inline-block;
            margin-top: 18px;
            padding: 10px 16px;
            border-radius: 999px;
            background: #eff6ff;
            color: #1d4ed8;
            font-weight: 700;
            letter-spacing: 0.02em;
        }
    </style>
</head>
<body>
    <main class="card">
        <h1>Hello, world!</h1>
        <p>To jest prosta strona w PHP gotowa do wrzucenia na GitHub i uruchomienia na Azure App Service.</p>
        <p>Aktualny czas serwera: <strong><?php echo htmlspecialchars($date, ENT_QUOTES, 'UTF-8'); ?></strong></p>
        <div class="badge">PHP is working</div>
    </main>
</body>
</html>
