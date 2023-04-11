<?php include 'function.php'; ?>
<?php
$umur = $_GET['umur'];
$status = $_GET['status'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$golongan_darah = $_GET['golongan_darah'];
$fakultas = $_GET['fakultas'];

$filter = "WHERE 1=1";
if (!empty($umur)) {
    $filter = $filter . " AND TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) = '$umur'";
}
if (!empty($status)) {
    $filter = $filter . " AND status = '$status'";
}
if (!empty($jenis_kelamin)) {
    $filter = $filter . " AND jenis_kelamin = '$jenis_kelamin'";
}
if (!empty($golongan_darah)) {
    $filter = $filter . " AND golongan_darah = '$golongan_darah'";
}
if (!empty($fakultas)) {
    $filter = $filter . " AND fakultas = '$fakultas'";
}

$pendonor = db_query("SELECT * FROM pendonor $filter");
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
            <span>Laporan Pendonor Darah</span>
            <div class="text-center">
                <a href="laporan_pendonor.php" class="btn btn-primary btn-sm fw-bold"><i class="fa fa-angle-left me-1"></i>Kembali</a>
                <button onclick="print()" class="btn btn-info text-light btn-sm fw-bold"><i class="fa fa-print me-1"></i>Print</button>
            </div>
        </div>
    </div>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Jenis Kelamin</th>
                <th>Golongan Darah</th>
                <th>Riwayat Penyakit</th>
                <th>No Telp</th>
                <th>Fakultas</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pendonor as $p) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $p['nama']; ?></td>
                    <td><?= $p['alamat']; ?></td>
                    <td><?= $p['tempat_lahir'] . ', ' . $p['tanggal_lahir']; ?></td>
                    <td><?= $p['status']; ?></td>
                    <td><?= $p['jenis_kelamin']; ?></td>
                    <td><?= $p['golongan_darah']; ?></td>
                    <td><?= $p['riwayat_penyakit']; ?></td>
                    <td><?= $p['no_telp']; ?></td>
                    <td><?= $p['fakultas']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>