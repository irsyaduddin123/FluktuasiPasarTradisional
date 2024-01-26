
    <style>
        .content-wrapper2 {
            margin: 0 auto;
            min-height: 500px;
            background-color: #ecf0f5;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; /* Meletakkan row di tengah */
        }
    </style>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper2 d-flex flex-column">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-6 col-sm-9">
                <div class="box">
                    <div class="box-body">
                        <div id="grafik1" style="height: auto">
                            <div class="card-header py-3">
                                <div class="card-body">
                                    <div class="chart-bar">
                                        
                                        <canvas class="my-4 w-100" id="Linepilih" width="500" height="500"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-sm-3">
                <div class="box">
                    <div class="box-body">
                        <div id="radioButtons" style="height: auto">
                            <div class="card-header py-3">
                                <div class="card-body">
                                <?php
$conn = new mysqli('localhost', 'root', '', 'ppsi');
?>

<!-- Menampilkan radio button -->
<form id="radioForm">
    <?php
    $sqlrd = "SELECT id, nama FROM barang";
    $result = $conn->query($sqlrd);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $radioIdBtn = $row["id"];
            $radioLabelBtn = $row["nama"];
            echo '<div class="form-check">';
            echo '  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault<?php echo $radioIdBtn; ?>" value="<?php echo $radioIdBtn; ?>" onchange="updateGraph(<?php echo $radioIdBtn; ?>)">';
            echo '  <label class="form-check-label" for="flexRadioDefault' . $radioIdBtn . '">';
            echo '    ' . $radioLabelBtn;
            echo '  </label>';
            echo '</div>';
        }
    }
    ?>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>

<script>
 // Fungsi untuk memperbarui grafik berdasarkan radio button yang dipilih
 function updateGraph(selectedId) {
        // Update query SQL sesuai dengan id yang dipilih
        var sqlQuery = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '" + selectedId + "'";

        // Ambil data dari database menggunakan AJAX
        $.ajax({
            type: 'GET',
            url: 'update_graph.php',
            data: {sqlQuery: sqlQuery},
            success: function(response) {
                // Mengupdate data grafik dengan data baru
                Linepilih.data.labels = response.labels;
                Linepilih.data.datasets[0].data = response.data;
                Linepilih.data.datasets[0].borderColor = response.borderColor;

                // Perbarui grafik
                Linepilih.update();
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Inisialisasi grafik pertama kali
    var ctx = document.getElementById("Linepilih");
    var hargaDataa = ['harga']; // Data harga dari PHP
    var namaBarangDataa = []; // Data tanggal dari PHP
    var borderColorArray = [/* ... */]; // Warna border dari PHP

    var Linepilih = new Chart(ctx, {
        type: 'line',
        data: {
            labels: namaBarangDataa,
            datasets: [{
                data: hargaDataa,
                lineTension: 0,
                backgroundColor: 'transparent',
                borderColor: borderColorArray,
                borderWidth: 5,
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        var datasetLabel = data.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel + ' - ' + namaPasarDataa[tooltipItem.index];
                    }
                }
            }
        }
    });
</script>
