<?php
class Booking {
    public static function create($pdo, $item_id, $name, $email, $date) {
        $stmt = $pdo->prepare('INSERT INTO bookings (item_id, customer_name, customer_email, booking_date) VALUES (?, ?, ?, ?)');
        $stmt->execute([$item_id, $name, $email, $date]);
    }

    public static function getAll($pdo) {
        $stmt = $pdo->query('SELECT b.*, i.name as item_name FROM bookings b JOIN items i ON b.item_id = i.id ORDER BY b.created_at DESC');
        return $stmt->fetchAll();
    }
} 