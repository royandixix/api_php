<?php
header("Content-Type: application/json");
require 'koneksi.php';

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->nama) && !empty($data->harga)) {
    $nama  = $koneksi->real_escape_string($data->nama);
    $harga = (int)$data->harga;

    $query = "INSERT INTO makanan (nama, harga) VALUES ('$nama', $harga)";
    $result = $koneksi->query($query);

    echo json_encode(["status" => $result ? "success" : "error"]);
} else {
    echo json_encode(["status" => "error", "message" => "Data tidak lengkap"]);
}
?>
