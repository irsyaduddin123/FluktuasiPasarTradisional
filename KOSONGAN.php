var ctx = document.getElementById("Linepilih");
    var hargaDataa = [<?php while($a = mysqli_fetch_array($hargaa)) { echo $a['harga'] . ', '; } ?>];
    var namaBarangDataa = [<?php while($b = mysqli_fetch_array($nama_barangg)) { echo '"' . $b['tanggal_input'] . '",'; } ?>];
    var namaPasarDataa = [<?php while($c = mysqli_fetch_array($nama_pasarr)) { echo '"' . $c['nama_pasar'] . '",'; } ?>];
  
    var borderColorArray = [];
    var lowestPriceColor = '#00ff00';

    var combinedData = [];
    for (var i = 0; i < hargaDataa.length; i++) {
        combinedData.push({ harga: hargaDataa[i], tanggal: namaBarangDataa[i], pasar: namaPasarDataa[i] });
    }

    combinedData.sort(function(a, b) {
        var dateA = new Date(a.tanggal);
        var dateB = new Date(b.tanggal);

        return dateA - dateB;
    });

    hargaDataa = combinedData.map(item => item.harga);
    namaBarangDataa = combinedData.map(item => item.tanggal);
    namaPasarDataa = combinedData.map(item => item.pasar);

    var minPriceIndex = hargaDataa.indexOf(Math.min(...hargaDataa));
    var maxPriceIndex = hargaDataa.indexOf(Math.max(...hargaDataa));
    var lowestPasar = namaPasarDataa[minPriceIndex];
    var highPasar = namaPasarDataa[maxPriceIndex];
    var lowestHarga = Math.min(...hargaDataa);
    var highHarga = Math.max(...hargaDataa);

    for (var i = 0; i < hargaDataa.length; i++) {
        if (i > 0) {
            if (hargaDataa[i] > hargaDataa[i - 1]) {
                borderColorArray.push('#00ff00');
            } else if (hargaDataa[i] < hargaDataa[i - 1]) {
                borderColorArray.push('#ff0000');
            } else {
                borderColorArray.push('(hargaDataa[i] > hargaDataa[i - 1])');
            }
        } else {
            borderColorArray.push('#007bff');
        }
    }

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