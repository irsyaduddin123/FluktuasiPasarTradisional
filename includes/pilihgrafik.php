<head>
    
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

        #boxpilihan {
            width: 50vw;
            height: auto;
        }

        #pilihanradio {
            width: 10vw;
            height: auto;
        }

       
    </style>
</head>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper2 " class="d-flex flex-column" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <!-- col-6 col-sm-3 -->

        <div class="row" >
            <div class="col-2 col-sm-10">
                <div class="box" id="boxpilihan">
                    <div class="box-body">
                        <div id="grafik1" style="height: auto">
                            <div class="card-header py-3">

                            <div class="card-body">
                                <div class="chart-bar">
                                    <?php
                                    //   $conn = new mysqli('localhost', 'root', '', 'ppsi');
                                    //   // include koneksi.php
                                    //   $sql1 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = ?";
                                    //   $nama_barang1 = $conn->query($sql1);
                                    //   $nama_pasar1 = $conn->query($sql1);
                                    //   $harga1 = $conn->query($sql1);
                                    ?>
                                        <canvas class="my-4 w-100" id="Linepilih" width="900" height="500"></canvas>
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                $conn = new mysqli('localhost', 'root', '', 'ppsi');
                $sql_barang = "SELECT id, nama FROM barang";
                $result_barang = $conn->query($sql_barang);
            ?>
            
            <div class="col-6 col-sm-2">
                <div class="box" id="pilihanradio">
                    <div class="box-body">
                        <div id="grafik1" >
                            <div class="card-header py-3">

                                <div class="card-body">
                                <div class="form-check">
                                    <?php while ($row_barang = $result_barang->fetch_assoc()): ?>
                                        <input class="form-check-input" type="radio" name="barang_radio" id="barang_<?php echo $row_barang['id']; ?>" value="<?php echo $row_barang['id']; ?>">
                                        <label class="form-check-label" for="barang_<?php echo $row_barang['id']; ?>">
                                            <?php echo $row_barang['nama']; ?>
                                        </label>
                                        <br>
                                    <?php endwhile; ?>
                                </div>
                                        <!-- <canvas class="my-4 w-100" id="Linepilih" width="900" height="500"></canvas> -->
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </section>
</div>


<!-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var radioButtons = document.getElementsByName('barang_radio');

        radioButtons.forEach(function(radio) {
            radio.addEventListener('change', function() {
                var selectedBarangId = this.value;

                // Lakukan permintaan AJAX
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Terima data dari server
                        var data = JSON.parse(xhr.responseText);

                        // Perbarui grafik dengan data yang diterima
                        updateChart(data);
                    }
                };

                // Ganti URL dengan URL yang sesuai di server Anda
                xhr.open('GET', 'get_chart_data.php?id=' + selectedBarangId, true);
                xhr.send();
            });
        });

        function updateChart(data) {
            // Ambil elemen canvas grafik
            var canvas = document.getElementById('Linepilih');
            var ctx = canvas.getContext('2d');

            // Hapus grafik sebelumnya jika ada
            if (window.myChart) {
                window.myChart.destroy();
            }

            // Buat grafik baru dengan data yang diterima
            window.myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data.labels,
                    datasets: [{
                        label: 'Harga Barang',
                        data: data.values,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    });
</script> -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var radioButtons = document.getElementsByName('barang_radio');

        radioButtons.forEach(function(radio) {
            radio.addEventListener('change', function() {
                var selectedBarangId = this.value;

                // Lakukan permintaan AJAX
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        // Terima data dari server
                        var data = JSON.parse(xhr.responseText);

                        // Perbarui grafik dengan data yang diterima
                        updateChart(data);
                    }
                };

                // Ganti URL dengan URL yang sesuai di server Anda
                xhr.open('GET', 'get_chart_data.php?id=' + selectedBarangId, true);
                xhr.send();
            });
        });

        function updateChart(data) {
    // Ambil elemen canvas grafik
    var canvas = document.getElementById('Linepilih');
    var ctx = canvas.getContext('2d');

    // Hapus grafik sebelumnya jika ada
    if (window.myChart) {
        window.myChart.destroy();
    }

    // Ubah data.labels menjadi objek Date untuk memudahkan pengurutan
    var dateLabels = data.labels.map(label => new Date(label));

    // Lakukan pengurutan data berdasarkan tanggal (dari lama ke baru)
    var sortedData = dateLabels.map((date, index) => ({
        date: date,
        value: data.values[index]
    })).sort((a, b) => a.date - b.date);

    // Pisahkan kembali tanggal dan nilai setelah pengurutan
    var sortedLabels = sortedData.map(item => item.date.toISOString().split('T')[0]);
    var sortedValues = sortedData.map(item => item.value);

    // Tentukan warna berdasarkan perubahan nilai
    var colors = [];

    for (var i = 0; i < sortedData.length; i++) {
        if (i > 0) {
            // Bandingkan nilai saat ini dengan nilai sebelumnya
            if (sortedData[i].value > sortedData[i - 1].value) {
                // Jika lebih tinggi, beri warna hijau
                colors.push('#00ff00');
            } else if (sortedData[i].value < sortedData[i - 1]){
                // Jika lebih rendah, beri warna merah
                colors.push('#ff0000');
            }else {
                colors.push(sortedData[i].value > sortedData[i - 1].value); // Warna default jika harga sama
            }
        } else {
            // Untuk titik pertama, beri warna default (misalnya, hijau)
            colors.push('#007bff');
        }
    }

    // Buat grafik baru dengan data yang sudah diurutkan dan warna yang ditentukan
    window.myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: sortedLabels,
            datasets: [{
                label: 'Harga Barang',
                data: sortedValues,
                fill: false,
                borderColor: colors, // Gunakan array warna yang sudah ditentukan
                borderWidth: 5
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

    });
</script>