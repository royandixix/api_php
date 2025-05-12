<?php
header("Content-Type: application/json");
require 'koneksi.php';

$data = json_decode(file_get_contents("php://input"));
$id = isset($data->id) ? (int)$data->id : 0;

$query = "DELETE FROM makanan WHERE id = $id";
$result = $koneksi->query($query);

echo json_encode([
    "status" => $result ? "success" : "error",
    "message" => $result ? "Data berhasil dihapus" : "Gagal menghapus data"
]);
?>
