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

       
    </style>
</head>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper2 " class="d-flex flex-column" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <!-- col-6 col-sm-3 -->

        <div class="row" >
            <div class="col-6 col-sm-9">
                <div class="box">
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
            
            <div class="col-6 col-sm-3">
                <div class="box">
                    <div class="box-body">
                        <div id="grafik1" style="height: auto">
                            <div class="card-header py-3">

                                <div class="card-body">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                      <label class="form-check-label" for="flexRadioDefault1">
                                        Default radio
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                      <label class="form-check-label" for="flexRadioDefault2">
                                        Default checked radio
                                      </label>
                                    </div>
                                        <canvas class="my-4 w-100" id="Linepilih" width="900" height="500"></canvas>
                                  
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </section>
</div>
