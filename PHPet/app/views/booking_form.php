<?php include __DIR__ . '/partials/header.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Забронировать</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="glass-block" style="max-width:520px;margin:48px auto 48px auto;">
        <h1>Забронировать объект</h1>
        <form method="post">
            <label>Объект:
                <select name="item_id" required>
                    <?php foreach ($items as $item): ?>
                        <option value="<?= $item['id'] ?>"><?= htmlspecialchars($item['name']) ?></option>
                    <?php endforeach; ?>
                </select>
            </label>
            <label>Ваше имя:
                <input type="text" name="customer_name" required>
            </label>
            <label>Email:
                <input type="email" name="customer_email" required>
            </label>
            <label>Дата бронирования:
                <input type="date" name="booking_date" required>
            </label>
            <button type="submit" class="btn">Забронировать</button>
        </form>
        <a href="index.php" class="btn" style="background:transparent;color:#7f5af0;margin-top:18px;">Назад к списку объектов</a>
    </div>
</body>
<?php include __DIR__ . '/partials/footer.php'; ?> 