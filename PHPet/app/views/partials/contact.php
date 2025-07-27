<?php include __DIR__ . '/header.php'; ?>
<div class="glass-block" style="max-width:700px;margin:60px auto 60px auto;">
    <h1>Контакты</h1>
    <p style="font-size:1.13em;">Свяжитесь с нами по email: <a href="mailto:info@bookingpro.local">info@bookingpro.local</a></p>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div style="background:rgba(127,90,240,0.13);padding:22px 18px;border-radius:14px;margin:30px 0 0 0;color:#00e6e6;font-size:1.13em;text-align:center;">Спасибо за обращение! Мы свяжемся с вами.</div>
    <?php else: ?>
    <form method="post" style="margin-top:30px;">
        <label>Ваше имя:
            <input type="text" name="name" required>
        </label>
        <label>Email:
            <input type="email" name="email" required>
        </label>
        <label>Сообщение:
            <textarea name="message" rows="5" required></textarea>
        </label>
        <button type="submit" class="btn">Отправить</button>
    </form>
    <?php endif; ?>
</div>
<?php include __DIR__ . '/footer.php'; ?> 