<?php
header('Content-Type: application/json');

if (isset($_GET['id'])) {
    $barang_id = $_GET['id'];

    // Koneksi ke database
    $conn = new mysqli('localhost', 'root', '', 'ppsi');

    if ($conn->connect_error) {
        echo json_encode(array('error' => 'Database connection failed'));
        exit();
    }

    // Query ke database untuk mendapatkan data harga barang
    $sql = "SELECT tanggal_input, harga FROM harga_barang WHERE barang_id = $barang_id";
    $result = $conn->query($sql);

    if (!$result) {
        echo json_encode(array('error' => 'Query failed: ' . $conn->error));
        $conn->close();
        exit();
    }

    // Persiapkan array untuk menyimpan data
    $data = array('labels' => array(), 'values' => array());

    // Loop melalui hasil query dan mengisi array
    while ($row = $result->fetch_assoc()) {
        $data['labels'][] = $row['tanggal_input'];
        $data['values'][] = $row['harga'];
    }

    // Tutup koneksi ke database
    $conn->close();

    // Mengembalikan data dalam format JSON
    echo json_encode($data);
} else {
    // Jika parameter id tidak tersedia
    echo json_encode(array('error' => 'Invalid parameter'));
}
?>