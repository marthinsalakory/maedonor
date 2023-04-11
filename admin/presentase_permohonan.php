<?php include 'header.php' ?>
<?php
if (isset($_GET['tahun'])) {
    $tahun = $_GET['tahun'];
} else {
    $tahun = date('Y');
}
?>
<div class="page-title">
    <h3>Presentase Permohonan</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah Presentase Permohonan</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <label class="fw-bold">Filter Tahun</label>
                            <select onchange="window.location.href='?tahun=' + $(this).val()" class="form-control w-25 mx-auto" name="tahun">
                                <?php for ($i = date('Y'); $i >= 1962; $i--) : ?>
                                    <option <?= $tahun == $i ? 'selected' : ''; ?> value="<?= $i; ?>"><?= $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <hr>
                        </div>
                        <div class="col-4">
                            <div class="text-center text-lg-start mt-lg-4">
                                <h4 class="card-title">Presentase Permohonan</h4>
                                <h3>Total Permohonan = <?= db_count('permohonan'); ?></i></h3>
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
                                        <div class="w-3 h-3 rounded-full me-2" style="background-color: #41B1F9;"></div><span class="text-xs">Total Permohonan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 border border-3 mt-3" style="background:#fff">
                            <h4 class="text-center">Permohonan Perbulan Tahun <?= $tahun; ?></h4>
                            <canvas id="permohonan" width="200" height="100"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/vendors/chartjs/Chart.min.js"></script>
<script>
    // Presentase Permohonan
    new Chart(document.getElementById("permohonan").getContext("2d"), {
        type: 'bar',
        data: {
            labels: ["JANUARI", "FEBRUARI", "MARET", "APRIL", "MEI", "JUNI", "JULI", "AGUSTUS", "NOVEMBER", "DESEMBER"],
            datasets: [{
                label: 'Permohonan Golongan Darah A',
                backgroundColor: "#FFC107",
                data: [<?= count_month(1, 'A'); ?>, <?= count_month(2, 'A'); ?>, <?= count_month(3, 'A'); ?>, <?= count_month(4, 'A'); ?>, <?= count_month(5, 'A'); ?>, <?= count_month(6, 'A'); ?>, <?= count_month(7, 'A'); ?>, <?= count_month(8, 'A'); ?>, <?= count_month(9, 'A'); ?>, <?= count_month(10, 'A'); ?>, <?= count_month(11, 'A'); ?>, <?= count_month(12, 'A'); ?>]
            }, {
                label: 'Permohonan Golongan Darah B',
                backgroundColor: "rgb(255, 99, 132)",
                data: [<?= count_month(1, 'B'); ?>, <?= count_month(2, 'B'); ?>, <?= count_month(3, 'B'); ?>, <?= count_month(4, 'B'); ?>, <?= count_month(5, 'B'); ?>, <?= count_month(6, 'B'); ?>, <?= count_month(7, 'B'); ?>, <?= count_month(8, 'B'); ?>, <?= count_month(9, 'B'); ?>, <?= count_month(10, 'B'); ?>, <?= count_month(11, 'B'); ?>, <?= count_month(12, 'B'); ?>]
            }, {
                label: 'Permohonan Golongan Darah AB',
                backgroundColor: "rgb(255, 159, 64)",
                data: [<?= count_month(1, 'AB'); ?>, <?= count_month(2, 'AB'); ?>, <?= count_month(3, 'AB'); ?>, <?= count_month(4, 'AB'); ?>, <?= count_month(5, 'AB'); ?>, <?= count_month(6, 'AB'); ?>, <?= count_month(7, 'AB'); ?>, <?= count_month(8, 'AB'); ?>, <?= count_month(9, 'AB'); ?>, <?= count_month(10, 'AB'); ?>, <?= count_month(11, 'AB'); ?>, <?= count_month(12, 'AB'); ?>]
            }, {
                label: 'Permohonan Golongan Darah O',
                backgroundColor: "#198754",
                data: [<?= count_month(1, 'O'); ?>, <?= count_month(2, 'O'); ?>, <?= count_month(3, 'O'); ?>, <?= count_month(4, 'O'); ?>, <?= count_month(5, 'O'); ?>, <?= count_month(6, 'O'); ?>, <?= count_month(7, 'O'); ?>, <?= count_month(8, 'O'); ?>, <?= count_month(9, 'O'); ?>, <?= count_month(10, 'O'); ?>, <?= count_month(11, 'O'); ?>, <?= count_month(12, 'O'); ?>]
            }, {
                label: 'Total Permohonan',
                backgroundColor: "#41B1F9",
                data: [<?= count_month(1); ?>, <?= count_month(2); ?>, <?= count_month(3); ?>, <?= count_month(4); ?>, <?= count_month(5); ?>, <?= count_month(6); ?>, <?= count_month(7); ?>, <?= count_month(8); ?>, <?= count_month(9); ?>, <?= count_month(10); ?>, <?= count_month(11); ?>, <?= count_month(12); ?>]
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

<?php include 'footer.php' ?>