<?php
require_once __DIR__ . '/../models/Item.php';

class ItemController {
    public function list() {
        global $pdo;
        $items = Item::getAll($pdo);
        include __DIR__ . '/../views/items_list.php';
    }
} 