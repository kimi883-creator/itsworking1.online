<?php
// Simple dynamic bits to prove PHP is actually running
$siteName = "It's Working!";
$currentTime = date("F j, Y – g:i A");
$clicks = isset($_GET['clicked']) ? true : false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($siteName); ?></title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f7f7f9;
            color: #222;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        h1 { font-size: 2.2rem; margin-bottom: 0.5rem; }
        p { color: #555; margin-bottom: 1.5rem; }
        a.button {
            display: inline-block;
            padding: 0.7rem 1.4rem;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background 0.2s;
        }
        a.button:hover { background: #1d4ed8; }
        .note { margin-top: 1rem; font-size: 0.9rem; color: #16a34a; }
        .timestamp { margin-top: 2rem; font-size: 0.8rem; color: #999; }
    </style>
</head>
<body>
    <h1>Welcome to <?php echo htmlspecialchars($siteName); ?></h1>
    <p>This page is running on PHP.</p>

    <a href="?clicked=1" class="button">Click Me</a>

    <?php if ($clicks): ?>
        <p class="note">You clicked it. PHP saw that.</p>
    <?php endif; ?>

    <p class="timestamp">Server time: <?php echo $currentTime; ?></p>
</body>
</html>
