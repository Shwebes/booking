<?php include __DIR__ . '/partials/header.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Объекты для бронирования</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="hero-banner glass-block">
        <h1>Бронирование номеров онлайн</h1>
        <p>Удобно, быстро и надежно — выберите номер и забронируйте прямо сейчас!</p>
        <a href="?controller=booking&action=create" class="btn">Забронировать</a>
    </div>
    <div class="glass-block" style="margin:0 auto 36px auto;max-width:1100px;">
        <h2 style="margin-top:40px;">Объекты для бронирования</h2>
        <div class="cards">
            <?php foreach ($items as $item): ?>
                <div class="card">
                    <div class="card-img">
                        <?php if (!empty($item['image'])): ?>
                            <img src="images/<?= htmlspecialchars($item['image']) ?>" alt="<?= htmlspecialchars($item['name']) ?>">
                        <?php else: ?>
                            <img src="images/no-image.png" alt="Нет фото">
                        <?php endif; ?>
                    </div>
                    <div class="card-body">
                        <strong><?= htmlspecialchars($item['name']) ?></strong><br>
                        <?= nl2br(htmlspecialchars($item['description'])) ?><br>
                        <span class="card-date">Доступно: <?= $item['available_from'] ?> — <?= $item['available_to'] ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="?controller=booking&action=list" class="btn">Мои бронирования</a>
    </div>
</body>
</html>
<?php include __DIR__ . '/partials/footer.php'; ?> 