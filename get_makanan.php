<?php
header("Content-Type: application/json");
require 'koneksi.php';

$query = "SELECT * FROM makanan";
$result = $koneksi->query($query);

$data = [];

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
?>
