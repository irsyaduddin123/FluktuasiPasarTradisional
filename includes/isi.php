<div class="row">
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">
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
                </h3>


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
                        <canvas class="my-4 w-100" id="myLineChart1" width="900" height="380"></canvas>
                        
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
         
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik 2</h6>
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
                       <canvas id="myLineChart2"></canvas>
                        
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik 3</h6>
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
                    <canvas class="my-4 w-100" id="myLineChart3" width="900" height="380"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                  <?php
                  $conn = new mysqli('localhost', 'root', '', 'ppsi');
                  // include koneksi.php
                  $sql4 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '4'";
                  $nama_barang4 = $conn->query($sql4);
                  $nama_pasar4 = $conn->query($sql4);
                  $harga4 = $conn->query($sql4);
                  ?>
                    <h6 class="m-0 font-weight-bold text-primary">Grafik 4</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                        <canvas id="myLineChart4"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik 5</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql5 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '5'";
                      $nama_barang5 = $conn->query($sql5);
                      $nama_pasar5 = $conn->query($sql5);
                      $harga5 = $conn->query($sql5);
                    ?>
                        <canvas id="myLineChart5"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik 6</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql6 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '6'";
                      $nama_barang6 = $conn->query($sql6);
                      $nama_pasar6 = $conn->query($sql6);
                      $harga6 = $conn->query($sql6);
                    ?>
                        <canvas id="myLineChart6"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik 7</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql6 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '6'";
                      $nama_barang6 = $conn->query($sql6);
                      $nama_pasar6 = $conn->query($sql6);
                      $harga6 = $conn->query($sql6);
                    ?>
                        <canvas id="myLineChart6"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="box">
            <div class="box-body">
              <div id="grafik1" style="height: 300px">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik 8</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar text-center small">
                    <?php
                      $conn = new mysqli('localhost', 'root', '', 'ppsi');
                      // include koneksi.php
                      $sql6 = "SELECT a.id, b.nama AS nama_barang, p.nama AS nama_pasar, a.harga, a.tanggal_input FROM harga_barang a JOIN barang b ON a.barang_id=b.id JOIN pasar p ON a.pasar_id=p.id WHERE a.barang_id = '6'";
                      $nama_barang6 = $conn->query($sql6);
                      $nama_pasar6 = $conn->query($sql6);
                      $harga6 = $conn->query($sql6);
                    ?>
                        <canvas id="myLineChart6"></canvas>
                       
                      </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
          
      </div>
      


    


    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script>
    <!-- <script src="dashboard.js"></script>
    <script src="dashboard2.js"></script> -->

    <!-- SCRIPT MENAMPILKAN DASHBOARD -->
    <script>
        var ctx = document.getElementById("myLineChart1");
var hargaData = [<?php while($a = mysqli_fetch_array($harga1)) { echo $a['harga'] . ', '; } ?>];
var borderColorArray = [];

for (var i = 0; i < hargaData.length; i++) {
    if (i > 0) {
        // Bandingkan harga saat ini dengan harga sebelumnya
        if (hargaData[i] > hargaData[i - 1]) {
            borderColorArray.push('#00ff00'); // Warna jika harga naik (contoh: hijau)
        } else if (hargaData[i] < hargaData[i - 1]) {
            borderColorArray.push('#ff0000'); // Warna jika harga turun (contoh: merah)
        } else {
            borderColorArray.push('#007bff'); // Warna default jika harga sama
        }
    } else {
        borderColorArray.push('#007bff'); // Warna default untuk indeks pertama
    }
}

var myLineChart1 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [<?php while($b = mysqli_fetch_array($nama_barang1)) { echo '"' . $b['tanggal_input'] . '",'; } ?>],
        datasets: [{
            data: hargaData,
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
        }
    }
});

        var ctx = document.getElementById("myLineChart2");
        var myLineChart2 = new Chart(ctx, {
            type: 'bar',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang2)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                    
                    data: [<?php while($a = mysqli_fetch_array($harga2)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#00ff00',
                    borderWidth: 4,
                    pointBackgroundColor: '#ff0000'
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
        var ctx = document.getElementById("myLineChart3");
        var myLineChart3 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang3)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                    
                    data: [<?php while($a = mysqli_fetch_array($harga3)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                        
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#ff0000',
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
        var ctx = document.getElementById("myLineChart4");
        var myLineChart4 = new Chart(ctx, {
            type: 'line',
            data: {
                
                labels: [<?php while($b = mysqli_fetch_array($nama_barang4)) { echo '"' . $b['tanggal_input'] . '",'; } ?>], //keterangan nama-nama label],
               
                datasets: [{
                  label: 'KACANG', // judul grafik
                    data: [<?php while($a = mysqli_fetch_array($harga4)) { echo $a['harga'] . ', '; } ?>], //Data Grafik
            
                        
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
    </script>