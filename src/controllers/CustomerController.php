<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController
{
    public static function index(): void
    {
        $stmt = DB::query("SELECT * FROM customer");
        $customer = $stmt->fetchAll();

        echo "<h1>Klienti</h1>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Vārds</th><th>E-pasts</th><th>Punkti</th></tr>";

        foreach ($customer as $customers) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($customers['customer_id']) . "</td>";
            echo "<td>" . htmlspecialchars($customers['first_name']) . "</td>";
            echo "<td>" . htmlspecialchars($customers['email']) . "</td>";
            echo "<td>" . htmlspecialchars($customers['points']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
