<?php
// Ambil query SQL dari parameter GET
$sqlQuery = $_GET['sqlQuery'];

// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'ppsi');

// Eksekusi query
$result = $conn->query($sqlQuery);

// Proses data atau hasil query sesuai kebutuhan
$labels = array();
$data = array();
$borderColor = array();

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['tanggal_input'];
    $data[] = $row['harga'];
    // Tambahkan logika warna border sesuai kebutuhan
    // Contoh: Jika harga lebih tinggi dari harga sebelumnya, gunakan warna hijau, dan sebaliknya.
    $borderColor[] = ($row['harga'] > $data[count($data) - 2]) ? '#00ff00' : '#ff0000';
}

// Kembalikan data sebagai JSON
header('Content-Type: application/json');
echo json_encode(array('labels' => $labels, 'data' => $data, 'borderColor' => $borderColor));

// Tutup koneksi database
$conn->close();
?>
