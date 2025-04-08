<?php
include __DIR__ . '/../config/db.php';

class LeadsController
{
    public static function createLead($data)
    {
        global $conn;

        $update_date = $data['update-date'];
        $id_sales    = $data['sales'];
        $product     = $data['lead-name'];
        $id_product  = $data['product'];
        $phone       = $data['phone'];
        $update_date = $data['update_date'];
        $id_user     = uniqid();

        $result = mysqli_query($conn, "
        INSERT INTO m_lead (update_date, id_sales, id_product, phone, product, update_date, id_user)
        VALUES ('$update_date', '$id_sales', '$id_product', '$phone', '$product', '$update_date', '$id_user')");

        return $result ? true : false;
    }

    public static function getAllLead()
    {
        global $conn;

        $query = mysqli_query($conn,
            "SELECT
            lead.id_lead,
            lead.update_date,
            sales.name AS sales,
            product.name AS product,
            lead.phone,
            lead.lead_name,
            lead.city
        FROM m_lead lead
        JOIN m_sales sales ON lead.id_sales = sales.id
        JOIN m_product product ON lead.id_product = product.id"
        );

        if (! $query) {
            die("Query error: " . mysqli_error($conn));
        }

        return mysqli_fetch_all($query, MYSQLI_ASSOC);

    }

    public static function findLead($search)
    {
        global $conn;

        $product     = mysqli_real_escape_string($conn, $search['product'] ?? '');
        $sales       = mysqli_real_escape_string($conn, $search['sales'] ?? '');
        $update_date = mysqli_real_escape_string($conn, $search['update-date'] ?? '');

        $query = mysqli_query($conn,
            "SELECT
                ld.id_lead,
                ld.update_date,
                sls.name AS sales,
                prd.name AS product,
                ld.phone,
                ld.lead_name,
                ld.city
            FROM m_lead ld
            JOIN m_sales sls ON ld.id_sales = sls.id
            JOIN m_product prd ON ld.id_product = prd.id
            WHERE
                ('$product' = '' OR ld.id_product LIKE '%$product%')
                AND ('$sales' = '' OR ld.id_sales = '$sales')
                AND ('$update_date' = '' OR ld.update_date LIKE '%$update_date%')
            "
        );

        if (! $query) {
            die("Query error: " . mysqli_error($conn));
        }

        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
}