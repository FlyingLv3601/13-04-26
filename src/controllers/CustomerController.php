<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index(): void
    {
        $stmt = DB::query("
            SELECT 
                c.*,
                COUNT(o.order_id) as order_count
            FROM customer c
            LEFT JOIN orders o ON c.customer_id = o.customer_id
            GROUP BY c.customer_id
        ");
        $customers = $stmt->fetchAll();

        require __DIR__ . '/../views/customer.php';
    }
}