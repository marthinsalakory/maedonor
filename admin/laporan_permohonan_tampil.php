<?php include 'function.php'; ?>
<?php
$tanggal_awal = $_GET['tanggal_awal'];
$tanggal_akhir = $_GET['tanggal_akhir'];
$status_permohonan = $_GET['status_permohonan'];
$golongan_darah = $_GET['golongan_darah'];
$filter = " WHERE 1=1 ";
if (!empty($tanggal_awal) && !empty($tanggal_akhir)) {
    $filter = $filter . " AND (tanggal BETWEEN '$tanggal_awal' AND '$tanggal_akhir') ";
}
if (!empty($status_permohonan)) {
    $filter = $filter . " AND status = '$status_permohonan' ";
}
if (!empty($golongan_darah)) {
    $filter = $filter . " AND golongan_darah = '$golongan_darah' ";
}
$permohonan = db_query("SELECT * FROM permohonan $filter");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mae Donor</title>
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css">
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css">
    <script src="assets/vendors/fontawesome/js/all.min.js"></script>
    <style>
        @media print {
            .no_print {
                display: none;
            }
        }
    </style>
</head>

<body>

    <div class="container-fluid mb-3 no_print py-2" style="background-color: var(--bs-tertiary-bg);">
        <div class="d-flex justify-content-evenly">
            <span>Laporan Permohonan Donor Darah</span>
            <div class="text-center">
                <a href="laporan_permohonan.php" class="btn btn-primary btn-sm fw-bold"><i class="fa fa-angle-left me-1"></i>Kembali</a>
                <button onclick="print()" class="btn btn-info text-light btn-sm fw-bold"><i class="fa fa-print me-1"></i>Print</button>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Pasien</th>
                <th>Umur</th>
                <th>Rumah Sakit</th>
                <th>Golongan Darah</th>
                <th>Kuota</th>
                <th>Status</th>
                <th>Nama Wali</th>
                <th>No WA/HP</th>
                <th>Hubungan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($permohonan as $p) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $p['tanggal']; ?></td>
                    <td><?= $p['nama_pasien']; ?></td>
                    <td><?= $p['umur']; ?></td>
                    <td><?= $p['rumah_sakit']; ?></td>
                    <td><?= $p['golongan_darah']; ?></td>
                    <td><?= $p['kuota']; ?> Kantong</td>
                    <td><?= $p['status']; ?></td>
                    <td><?= $p['nama_wali']; ?></td>
                    <td><?= $p['no_telp']; ?></td>
                    <td><?= $p['hubungan']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>