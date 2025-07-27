<?php include __DIR__ . '/partials/header.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Мои бронирования</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="glass-block" style="max-width:700px;margin:48px auto 48px auto;">
        <h1>Мои бронирования</h1>
        <ul>
            <?php foreach ($bookings as $booking): ?>
                <li>
                    <strong><?= htmlspecialchars($booking['item_name']) ?></strong> — <?= $booking['booking_date'] ?><br>
                    Имя: <?= htmlspecialchars($booking['customer_name']) ?>, Email: <?= htmlspecialchars($booking['customer_email']) ?><br>
                    Забронировано: <?= $booking['created_at'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="index.php" class="btn" style="background:transparent;color:#7f5af0;margin-top:18px;">Назад к списку объектов</a>
    </div>
</body>
</html>
<?php include __DIR__ . '/partials/footer.php'; ?> 