<?php
// Важно: для поддержки изображений добавьте поле image VARCHAR(255) в таблицу items
class Item {
    public static function getAll($pdo) {
        $stmt = $pdo->query('SELECT * FROM items');
        return $stmt->fetchAll();
    }
} 