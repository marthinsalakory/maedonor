<?php include 'header.php' ?>
<div class="page-title">
    <h3>Presentase Pendonor</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah Presentase Pendonor</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="text-center text-lg-start mt-lg-4">
                                <h4 class="card-title">Presentase Pendonor</h4>
                                <h3>Total Pendonor = <?= db_count('pendonor'); ?></i></h3>
                            </div>
                            <div class="col-12 pl-3">
                                <div class="legends">
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class="w-3 h-3 rounded-full me-2" style="background-color: #FFC107;"></div><span class="text-xs">Golongan Darah A</span>
                                    </div>
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class="w-3 h-3 rounded-full me-2" style="background-color: rgb(255, 99, 132);"></div><span class="text-xs">Golongan Darah B</span>
                                    </div>
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class="w-3 h-3 rounded-full me-2" style="background-color: rgb(255, 159, 64);"></div><span class="text-xs">Golongan Darah AB</span>
                                    </div>
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class="w-3 h-3 rounded-full me-2" style="background-color: #198754;"></div><span class="text-xs">Golongan Darah O</span>
                                    </div>
                                    <div class="legend d-flex flex-row align-items-center">
                                        <div class="w-3 h-3 rounded-full me-2" style="background-color: #41B1F9;"></div><span class="text-xs">Total Pendonor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border border-3 mt-3" style="background:#fff">
                            <h4 class="text-center">Pendonor Perfakultas</h4>
                            <canvas id="pendonor" width="200" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="assets/vendors/chartjs/Chart.min.js"></script>
<script>
    $('#pendonor').click(function(e) {
        console.log(e);
    });
    // Presentase Pendonor
    new Chart(document.getElementById("pendonor").getContext("2d"), {
        type: 'bar',
        data: {
            labels: ["FAKED", "FISIP", "FEBIS", "FAPERTA", "FKIP", "FATEK", "FAPERIK", "FAKUM", "FMIPA"],
            datasets: [{
                label: 'Golongan Darah A',
                backgroundColor: "#FFC107",
                data: [<?= db_count('pendonor', ['fakultas' => 'Kedokteran', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ilmu Sosial dan Politik', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ekonomi dan Bisnis', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Pertanian', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Keguruan dan Ilmu Pendidikan', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Teknik', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Perikanan dan Ilmu Kelautan', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Hukum', 'golongan_darah' => 'A']); ?>, <?= db_count('pendonor', ['fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'golongan_darah' => 'A']); ?>]
            }, {
                label: 'Golongan Darah B',
                backgroundColor: "rgb(255, 99, 132)",
                data: [<?= db_count('pendonor', ['fakultas' => 'Kedokteran', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ilmu Sosial dan Politik', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ekonomi dan Bisnis', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Pertanian', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Keguruan dan Ilmu Pendidikan', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Teknik', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Perikanan dan Ilmu Kelautan', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Hukum', 'golongan_darah' => 'B']); ?>, <?= db_count('pendonor', ['fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'golongan_darah' => 'B']); ?>]
            }, {
                label: 'Golongan Darah AB',
                backgroundColor: "rgb(255, 159, 64)",
                data: [<?= db_count('pendonor', ['fakultas' => 'Kedokteran', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ilmu Sosial dan Politik', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ekonomi dan Bisnis', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Pertanian', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Keguruan dan Ilmu Pendidikan', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Teknik', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Perikanan dan Ilmu Kelautan', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Hukum', 'golongan_darah' => 'AB']); ?>, <?= db_count('pendonor', ['fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'golongan_darah' => 'AB']); ?>]
            }, {
                label: 'Golongan Darah O',
                backgroundColor: "#198754",
                data: [<?= db_count('pendonor', ['fakultas' => 'Kedokteran', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ilmu Sosial dan Politik', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ekonomi dan Bisnis', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Pertanian', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Keguruan dan Ilmu Pendidikan', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Teknik', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Perikanan dan Ilmu Kelautan', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Hukum', 'golongan_darah' => 'O']); ?>, <?= db_count('pendonor', ['fakultas' => 'Matematika dan Ilmu Pengetahuan Alam', 'golongan_darah' => 'O']); ?>]
            }, {
                label: 'Total Pendonor',
                backgroundColor: "#41B1F9",
                data: [<?= db_count('pendonor', ['fakultas' => 'Kedokteran']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ilmu Sosial dan Politik']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ekonomi dan Bisnis']); ?>, <?= db_count('pendonor', ['fakultas' => 'Pertanian']); ?>, <?= db_count('pendonor', ['fakultas' => 'Keguruan dan Ilmu Pendidikan']); ?>, <?= db_count('pendonor', ['fakultas' => 'Teknik']); ?>, <?= db_count('pendonor', ['fakultas' => 'Perikanan dan Ilmu Kelautan']); ?>, <?= db_count('pendonor', ['fakultas' => 'Hukum']); ?>, <?= db_count('pendonor', ['fakultas' => 'Matematika dan Ilmu Pengetahuan Alam']); ?>]
            }]
        },
        options: {
            responsive: true,
            barRoundness: 1,
            title: {
                display: false,
                text: "text"
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        suggestedMax: 10,
                        padding: 10,
                    },
                    gridLines: {
                        drawBorder: false,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false
                    }
                }]
            }
        }
    });
</script>
<!-- <script>
    // Presentase Pendonor
    new Chart(document.getElementById("pendonor").getContext("2d"), {
        type: 'bar',
        data: {
            labels: ["FAKED", "FISIP", "FEBIS", "FAPERTA", "FKIP", "FATEK", "FAPERIK", "FAKUM", "FMIPA"],
            datasets: [{
                label: 'Pendonor',
                backgroundColor: ['#FFC107', 'rgb(255, 99, 132)', 'rgb(255, 159, 64)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)', '#41B1F9', '#3245D1', 'rgb(153, 102, 255)', '#198754'],
                data: [<?= db_count('pendonor', ['fakultas' => 'Kedokteran']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ilmu Sosial dan Politik']); ?>, <?= db_count('pendonor', ['fakultas' => 'Ekonomi dan Bisnis']); ?>, <?= db_count('pendonor', ['fakultas' => 'Pertanian']); ?>, <?= db_count('pendonor', ['fakultas' => 'Keguruan dan Ilmu Pendidikan']); ?>, <?= db_count('pendonor', ['fakultas' => 'Teknik']); ?>, <?= db_count('pendonor', ['fakultas' => 'Perikanan dan Ilmu Kelautan']); ?>, <?= db_count('pendonor', ['fakultas' => 'Hukum']); ?>, <?= db_count('pendonor', ['fakultas' => 'Matematika dan Ilmu Pengetahuan Alam']); ?>]
            }]
        },
        options: {
            responsive: true,
            barRoundness: 1,
            title: {
                display: false,
                text: "text"
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        suggestedMax: 10,
                        padding: 10,
                    },
                    gridLines: {
                        drawBorder: false,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false
                    }
                }]
            }
        }
    });
</script> -->
<?php include 'footer.php' ?>