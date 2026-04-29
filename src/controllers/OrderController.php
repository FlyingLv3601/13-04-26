<?php

require_once __DIR__ . '/../../db/DB.php';

class OrderController
{
    public static function index(): void
    {
        $stmt = DB::query("SELECT * FROM orders");
        $order = $stmt->fetchAll();

        require __DIR__ . '/../views/orders.php';
    }

}
