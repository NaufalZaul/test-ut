<?php
class ProductController
{
    public static function getAllProduct()
    {
        $conn  = include __DIR__ . '/../config/db.php';
        $query = mysqli_query($conn, "SELECT id, name FROM m_product");

        if (! $query) {
            die("Query error: " . mysqli_error($conn));
        }

        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }

}