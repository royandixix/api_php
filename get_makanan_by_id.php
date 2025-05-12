<?php
header("Content-Type: application/json");
require 'koneksi.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$query = "SELECT * FROM makanan WHERE id = $id";
$result = $koneksi->query($query);

if ($result && $result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["message" => "Data tidak ditemukan"]);
}
?>
