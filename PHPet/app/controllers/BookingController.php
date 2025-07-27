<?php
require_once __DIR__ . '/../models/Booking.php';
require_once __DIR__ . '/../models/Item.php';

class BookingController {
    public function create() {
        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $item_id = $_POST['item_id'];
            $name = $_POST['customer_name'];
            $email = $_POST['customer_email'];
            $date = $_POST['booking_date'];
            Booking::create($pdo, $item_id, $name, $email, $date);
            header('Location: /?controller=booking&action=list');
            exit;
        } else {
            $items = Item::getAll($pdo);
            include __DIR__ . '/../views/booking_form.php';
        }
    }

    public function list() {
        global $pdo;
        $bookings = Booking::getAll($pdo);
        include __DIR__ . '/../views/bookings_list.php';
    }
} 