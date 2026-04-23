<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index(): void
    {
        $stmt = DB::query("SELECT * FROM customer");
        $customer = $stmt->fetchAll();

        require __DIR__ . '/../views/customer.php';
    }
}
