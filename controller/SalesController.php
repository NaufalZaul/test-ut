<?php
class SalesController
{
    public static function getAllSales()
    {
        $conn  = include __DIR__ . '/../config/db.php';
        $query = mysqli_query($conn, "SELECT id, name FROM m_sales");

        if (! $query) {
            die("Query error: " . mysqli_error($conn));
        }

        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
}