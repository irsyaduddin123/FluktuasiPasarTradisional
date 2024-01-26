<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper " class="d-flex flex-column">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    <!-- isi Content -->
<div class="row">
<!-- box 1 -->

        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 1";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>

                </div>
                <div class="card-body">
                    <div class="chart-bar">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql1 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '1'";
                      $nama_barang1 = $conn->query($sql1);
                      $nama_pasar1 = $conn->query($sql1);
                      $harga1 = $conn->query($sql1);
                    ?>
                        <canvas class="my-4 w-100" id="myLineChart1" width="900" height="500"></canvas>
                        
                      </div>
                  </div>
                </div>
                <h6 id="hargarendah"></h6>
                <h6 id="hargatinggi"></h6>
            
            </div>
          </div>
        </div>
         
        <!-- box 2 -->
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 2";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                    <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                  // include koneksi.php
                  $sql2 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '2'";
                  $nama_barang2 = $conn->query($sql2);
                  $nama_pasar2= $conn->query($sql2);
                  $harga2 = $conn->query($sql2);
                  ?>
                       <canvas class="my-4 w-100" id="myLineChart2" width="900" height="500"></canvas>
                        
                      </div>
                  </div>
                  <h5 id="hargarendah2"></h5>
                <h5 id="hargatinggi2"></h5>
                </div>
            </div>
          </div>
        </div>

        <!-- box 3 -->

        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 3";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                    <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                  // include koneksi.php
                  $sql3 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '3'";
                  $nama_barang3 = $conn->query($sql3);
                  $nama_pasar3 = $conn->query($sql3);
                  $harga3 = $conn->query($sql3);
                  ?>
                    <canvas class="my-4 w-100" id="myLineChart3" width="900" height="500"></canvas>
                       
                      </div>
                  </div>
                </div>
                <h5 id="hargarendah3"></h5>
                <h5 id="hargatinggi3"></h5>
            </div>
          </div>
        </div>

        <!-- box 4 -->
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 4";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>
                  
                    
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                      <?php
                        $conn = new mysqli('localhost', 'root', '', 'ppsi');
                        // include koneksi.php
                        $sql4 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '4'";
                        $nama_barang4 = $conn->query($sql4);
                        $nama_pasar4 = $conn->query($sql4);
                        $harga4 = $conn->query($sql4);
                      ?>
                        <canvas class="my-4 w-100" id="myLineChart4" width="900" height="500"></canvas>
                       
                      </div>
                  </div>
                </div>
                <h5 id="hargarendah4"></h5>
                <h5 id="hargatinggi4"></h5>
            </div>
          </div>
        </div>
</div>

<div class="row">

        <!-- box 5 -->
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 5";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>
                </div>
                <div class="card-body">
                    <div class="chart-bar ">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql5 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '5'";
                      $nama_barang5 = $conn->query($sql5);
                      $nama_pasar5 = $conn->query($sql5);
                      $harga5 = $conn->query($sql5);
                    ?>
                        <canvas class="my-4 w-100" id="myLineChart5" width="900" height="500"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <!-- box 6 -->
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 6";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>
                </div>
                <div class="card-body">
                    <div class="chart-bar ">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql6 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '6'";
                      $nama_barang6 = $conn->query($sql6);
                      $nama_pasar6 = $conn->query($sql6);
                      $harga6 = $conn->query($sql6);
                    ?>
                        <canvas class="my-4 w-100" id="myLineChart6" width="900" height="500"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <!-- box 7 -->
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 7";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql7 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '7'";
                      $nama_barang6 = $conn->query($sql7);
                      $nama_pasar6 = $conn->query($sql7);
                      $harga6 = $conn->query($sql7);
                    ?>
                        <canvas class="my-4 w-100" id="myLineChart7" width="900" height="500"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <!-- box 8 -->
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: auto">
                <div class="card-header py-3">
                <h4 class="m-0 font-bold text-primary text-center uppercase">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                  
                    $sqlnm = "SELECT nama FROM barang WHERE id = 8";
                    $result = $conn->query($sqlnm);
                  
                    if ($result->num_rows > 0) {
                        // Assuming you expect only one row, you can use fetch_assoc()
                        $row = $result->fetch_assoc();
                        echo $row['nama'];
                    } else {
                        echo "No results found";
                    }
                  
                    // Close the connection
                    $conn->close();
                    ?>
                </h4>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql8 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '8'";
                      $nama_barang6 = $conn->query($sql8);
                      $nama_pasar6 = $conn->query($sql8);
                      $harga6 = $conn->query($sql8);
                    ?>
                        <canvas class="my-4 w-100" id="myLineChart8" width="900" height="500"></canvas>
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      

    
<!-- KUMPULAN script -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
    <!-- <script src="dashboard.js"></script>
    <script src="dashboard2.js"></script> -->

    <!-- SCRIPT MENAMPILKAN DASHBOARD -->
    <script>
            
        var ctx = document.getElementById("myLineChart1");
        var hargaData = [<?php while($a = mysqli_fetch_array($harga1)) { echo $a['harga'] . ', '; } ?>];
        var namaBarangData = [<?php while($b = mysqli_fetch_array($nama_barang1)) { echo '"' . $b['tanggal_input'] . '",'; } ?>];
        var namaPasarData = [<?php while($c = mysqli_fetch_array($nama_pasar1)) { echo '"' . $c['nama_pasar'] . '",'; } ?>];

        var borderColorArray = [];
        var lowestPriceColor = '#00ff00'; // Anda dapat menetapkan warna yang diinginkan untuk titik data harga terendah

        // Membuat array objek untuk pengurutan
        var combinedData = [];
        for (var i = 0; i < hargaData.length; i++) {
            combinedData.push({ harga: hargaData[i], tanggal: namaBarangData[i], pasar: namaPasarData[i] });
        }

        // Mengurutkan array combinedData berdasarkan tanggal
        combinedData.sort(function(a, b) {
            // Konversi tanggal ke objek Date untuk membandingkan
            var dateA = new Date(a.tanggal);
            var dateB = new Date(b.tanggal);
        
            return dateA - dateB;
        });

        // Mengekstrak array hargaData dan namaBarangData yang telah diurutkan
        hargaData = combinedData.map(item => item.harga);
        namaBarangData = combinedData.map(item => item.tanggal);
        namaPasarData = combinedData.map(item => item.pasar);

        var minPriceIndex = hargaData.indexOf(Math.min(...hargaData));
        var maxPriceIndex = hargaData.indexOf(Math.max(...hargaData));
        var lowestPasar = namaPasarData[minPriceIndex]; //pasar terendah
        var highPasar = namaPasarData[maxPriceIndex]; //pasar tertinggi
        var lowestHarga = Math.min(...hargaData); //var harga rendah
        var highHarga = Math.max(...hargaData);


        // Menampilkan nama pasar dan harga terendah di elemen H4
        document.getElementById('hargarendah').innerHTML =' Harga Terendah: Rp ' + lowestHarga + ' ada di ' + lowestPasar;
        document.getElementById('hargatinggi').innerHTML =' Harga Tertinggi: Rp ' + highHarga + ' ada di ' + highPasar;


        for (var i = 0; i < hargaData.length; i++) {
            if (i > 0) {
                // Bandingkan harga saat ini dengan harga sebelumnya
                if (hargaData[i] > hargaData[i - 1]) {
                    borderColorArray.push('#00ff00'); // Warna jika harga naik (contoh: hijau)
                } else if (hargaData[i] < hargaData[i - 1]) {
                    borderColorArray.push('#ff0000'); // Warna jika harga turun (contoh: merah)
                } else {
                    borderColorArray.push('(hargaData[i] > hargaData[i - 1])'); // Warna default jika harga sama
                }
            } else {
                borderColorArray.push('#007bff'); // Warna default untuk indeks pertama
            }
        }

        var myLineChart1 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: namaBarangData,
                datasets: [{
                    data: hargaData,
                    lineTension: 0,
                     
                    borderColor: borderColorArray,
                    borderWidth: 5,
                    label: 'Harga Kacang'
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
                            return datasetLabel + ': ' + tooltipItem.yLabel + ' - ' + namaPasarData[tooltipItem.index];
                        }
                    }
                }
            }
        });

// // Fungsi untuk mendapatkan array harga terendah
// function lowestPrices(prices) {
//     var lowestPrices = [];
//     var minIndex = prices.indexOf(Math.min(...prices));
    
//     for (var i = 0; i < prices.length; i++) {
//         lowestPrices.push(i === minIndex ? prices[i] : null);
//     }
    
//     return lowestPrices;
// }

        

        var ctx = document.getElementById("myLineChart2");
        var hargaData2 = [<?php while($a = mysqli_fetch_array($harga2)) { echo $a['harga'] . ', '; } ?>];
        var namaBarangData = [<?php while($b = mysqli_fetch_array($nama_barang2)) { echo '"' . $b['tanggal_input'] . '",'; } ?>];
        var namaPasarData = [<?php while($c = mysqli_fetch_array($nama_pasar2)) { echo '"' . $c['nama_pasar'] . '",'; } ?>];

        var borderColorArray = [];

        // Membuat array objek untuk pengurutan
        var combinedData = [];
        for (var i = 0; i < hargaData2.length; i++) {
            combinedData.push({ harga: hargaData2[i], tanggal: namaBarangData[i], pasar: namaPasarData[i] });
        }

        // Mengurutkan array combinedData berdasarkan tanggal
        combinedData.sort(function(a, b) {
            // Konversi tanggal ke objek Date untuk membandingkan
            var dateA = new Date(a.tanggal);
            var dateB = new Date(b.tanggal);
        
            return dateA - dateB;
        });

        // Mengekstrak array hargaData dan namaBarangData yang telah diurutkan
        hargaData2 = combinedData.map(item => item.harga);
        namaBarangData = combinedData.map(item => item.tanggal);
        namaPasarData = combinedData.map(item => item.pasar);

        var minPriceIndex2 = hargaData2.indexOf(Math.min(...hargaData2));
        var maxPriceIndex2 = hargaData2.indexOf(Math.max(...hargaData2));
        var lowestPasar = namaPasarData[minPriceIndex2]; //pasar terendah
        var highPasar = namaPasarData[maxPriceIndex2]; //pasar tertinggi
        var lowestHarga = Math.min(...hargaData2); //var harga rendah
        var highHarga = Math.max(...hargaData2);


        // Menampilkan nama pasar dan harga terendah di elemen H4
        document.getElementById('hargarendah2').innerHTML =' Harga Terendah: Rp ' + lowestHarga + ' ada di ' + lowestPasar;
        document.getElementById('hargatinggi2').innerHTML =' Harga Tertinggi: Rp ' + highHarga + ' ada di ' + highPasar;


        for (var i = 0; i < hargaData2.length; i++) {
            if (i > 0) {
                // Bandingkan harga saat ini dengan harga sebelumnya
                if (hargaData2[i] > hargaData2[i - 1]) {
                    borderColorArray.push('#00ff00'); // Warna jika harga naik (contoh: hijau)
                } else if (hargaData2[i] < hargaData2[i - 1]) {
                    borderColorArray.push('#ff0000'); // Warna jika harga turun (contoh: merah)
                } else {
                    borderColorArray.push('(hargaData2[i] > hargaData2[i - 1])'); // Warna default jika harga sama
                }
            } else {
                borderColorArray.push('#007bff'); // Warna default untuk indeks pertama
            }
        }
        
        var myLineChart2 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: namaBarangData,
                datasets: [{
                    
                    data: hargaData2,
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: borderColorArray,
                    borderWidth: 5,
                    label: 'Harga Ikan'
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
                            return datasetLabel + ': ' + tooltipItem.yLabel + ' - ' + namaPasarData[tooltipItem.index];
                        }
                    }
                }
            }
        });

        


        var ctx = document.getElementById("myLineChart3");
        var hargaData3 = [<?php while($a = mysqli_fetch_array($harga3)) { echo $a['harga'] . ', '; } ?>];
        var namaBarangData = [<?php while($b = mysqli_fetch_array($nama_barang3)) { echo '"' . $b['tanggal_input'] . '",'; } ?>];
        var namaPasarData = [<?php while($c = mysqli_fetch_array($nama_pasar3)) { echo '"' . $c['nama_pasar'] . '",'; } ?>];

        var borderColorArray = [];
        var lowestPriceColor = '#00ff00'; // Anda dapat menetapkan warna yang diinginkan untuk titik data harga terendah

        // Membuat array objek untuk pengurutan
        var combinedData = [];
        for (var i = 0; i < hargaData3.length; i++) {
            combinedData.push({ harga: hargaData3[i], tanggal: namaBarangData[i], pasar: namaPasarData[i] });
        }

        // Mengurutkan array combinedData berdasarkan tanggal
        combinedData.sort(function(a, b) {
            // Konversi tanggal ke objek Date untuk membandingkan
            var dateA = new Date(a.tanggal);
            var dateB = new Date(b.tanggal);
        
            return dateA - dateB;
        });

        // Mengekstrak array hargaData3 dan namaBarangData yang telah diurutkan
        hargaData3 = combinedData.map(item => item.harga);
        namaBarangData = combinedData.map(item => item.tanggal);
        namaPasarData = combinedData.map(item => item.pasar);

        var minPriceIndex = hargaData3.indexOf(Math.min(...hargaData3));
        var maxPriceIndex = hargaData3.indexOf(Math.max(...hargaData3));
        var lowestPasar = namaPasarData[minPriceIndex]; //pasar terendah
        var highPasar = namaPasarData[maxPriceIndex]; //pasar tertinggi
        var lowestHarga = Math.min(...hargaData3); //var harga rendah
        var highHarga = Math.max(...hargaData3);


        // Menampilkan nama pasar dan harga terendah di elemen H4
        document.getElementById('hargarendah3').innerHTML =' Harga Terendah: Rp ' + lowestHarga + ' ada di ' + lowestPasar;
        document.getElementById('hargatinggi3').innerHTML =' Harga Tertinggi: Rp ' + highHarga + ' ada di ' + highPasar;


        for (var i = 0; i < hargaData3.length; i++) {
            if (i > 0) {
                // Bandingkan harga saat ini dengan harga sebelumnya
                if (hargaData3[i] > hargaData3[i - 1]) {
                    borderColorArray.push('#00ff00'); // Warna jika harga naik (contoh: hijau)
                } else if (hargaData3[i] < hargaData3[i - 1]) {
                    borderColorArray.push('#ff0000'); // Warna jika harga turun (contoh: merah)
                } else {
                    borderColorArray.push('(hargaData3[i] > hargaData3[i - 1])'); // Warna default jika harga sama
                }
            } else {
                borderColorArray.push('#007bff'); // Warna default untuk indeks pertama
            }
        }
        var myLineChart3 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: namaBarangData,
                datasets: [{
                    
                    data: hargaData3,                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: borderColorArray,
                    borderWidth: 5,
                    label: 'Harga Daging'

                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var datasetLabel = data.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + ' - ' + namaPasarData[tooltipItem.index];
                        }
                    }
                }
            }
        });

        
        var ctx = document.getElementById("myLineChart4");
        var hargaData4 = [<?php while($a = mysqli_fetch_array($harga4)) { echo $a['harga'] . ', '; } ?>];
        var namaBarangData = [<?php while($b = mysqli_fetch_array($nama_barang4)) { echo '"' . $b['tanggal_input'] . '",'; } ?>];
        var namaPasarData = [<?php while($c = mysqli_fetch_array($nama_pasar4)) { echo '"' . $c['nama_pasar'] . '",'; } ?>];

        var borderColorArray = [];
        var lowestPriceColor = '#00ff00'; // Anda dapat menetapkan warna yang diinginkan untuk titik data harga terendah

        // Membuat array objek untuk pengurutan
        var combinedData = [];
        for (var i = 0; i < hargaData4.length; i++) {
            combinedData.push({ harga: hargaData4[i], tanggal: namaBarangData[i], pasar: namaPasarData[i] });
        }

        // Mengurutkan array combinedData berdasarkan tanggal
        combinedData.sort(function(a, b) {
            // Konversi tanggal ke objek Date untuk membandingkan
            var dateA = new Date(a.tanggal);
            var dateB = new Date(b.tanggal);
        
            return dateA - dateB;
        });

        // Mengekstrak array hargaData4 dan namaBarangData yang telah diurutkan
        hargaData4 = combinedData.map(item => item.harga);
        namaBarangData = combinedData.map(item => item.tanggal);
        namaPasarData = combinedData.map(item => item.pasar);

        var minPriceIndex = hargaData4.indexOf(Math.min(...hargaData4));
        var maxPriceIndex = hargaData4.indexOf(Math.max(...hargaData4));
        var lowestPasar = namaPasarData[minPriceIndex]; //pasar terendah
        var highPasar = namaPasarData[maxPriceIndex]; //pasar tertinggi
        var lowestHarga = Math.min(...hargaData4); //var harga rendah
        var highHarga = Math.max(...hargaData4);


        // Menampilkan nama pasar dan harga terendah di elemen H4
        document.getElementById('hargarendah4').innerHTML =' Harga Terendah: Rp ' + lowestHarga + ' ada di ' + lowestPasar;
        document.getElementById('hargatinggi4').innerHTML =' Harga Tertinggi: Rp ' + highHarga + ' ada di ' + highPasar;


        for (var i = 0; i < hargaData4.length; i++) {
            if (i > 0) {
                // Bandingkan harga saat ini dengan harga sebelumnya
                if (hargaData4[i] > hargaData4[i - 1]) {
                    borderColorArray.push('#00ff00'); // Warna jika harga naik (contoh: hijau)
                } else if (hargaData4[i] < hargaData4[i - 1]) {
                    borderColorArray.push('#ff0000'); // Warna jika harga turun (contoh: merah)
                } else {
                    borderColorArray.push('(hargaData4[i] > hargaData4[i - 1])'); // Warna default jika harga sama
                }
            } else {
                borderColorArray.push('#007bff'); // Warna default untuk indeks pertama
            }
        }
        var myLineChart4 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: namaBarangData,
                datasets: [{
                    
                    data: hargaData4,                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: borderColorArray,
                    borderWidth: 5,
                    label: 'Harga Minyak'

                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
                tooltips: {
                    callbacks: {
                        label: function (tooltipItem, data) {
                            var datasetLabel = data.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + ' - ' + namaPasarData[tooltipItem.index];
                        }
                    }
                }
            }
        });



        var ctx = document.getElementById("myLineChart5");
        var myLineChart5 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang5)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                    
                    data: [<?php while($a = mysqli_fetch_array($harga5)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        var ctx = document.getElementById("myLineChart6");
        var myLineChart5 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang5)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                    
                    data: [<?php while($a = mysqli_fetch_array($harga5)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        var ctx = document.getElementById("myLineChart7");
        var myLineChart5 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang5)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                    
                    data: [<?php while($a = mysqli_fetch_array($harga5)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        var ctx = document.getElementById("myLineChart8");
        var myLineChart5 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang5)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                    
                    data: [<?php while($a = mysqli_fetch_array($harga5)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>