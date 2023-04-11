<?php include 'header.php' ?>
<div class="page-title">
    <h3>Data Pendonor</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah data pendonor</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Pendonor</h4>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class='table table-striped mb-0' id="table1">
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach (db_findAll('pendonor') as $p) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $p['nama']; ?></td>
                                        <td><?= $p['alamat']; ?></td>
                                        <td><?= $p['tempat_lahir'] . ', ' . $p['tanggal_lahir']; ?></td>
                                        <td><?= $p['status']; ?></td>
                                        <td><?= $p['jenis_kelamin']; ?></td>
                                        <td><span class="badge bg-primary"><?= $p['golongan_darah']; ?></span></td>
                                        <td><?= $p['riwayat_penyakit']; ?></td>
                                        <td><?= $p['no_telp']; ?></td>
                                        <td><?= $p['fakultas']; ?></td>
                                        <td>
                                            <a href="ubah_pendonor.php?id=<?= $p['id']; ?>" class="badge bg-primary mb-1">Ubah</a>
                                            <a onclick="return confirm('Hapus?')" href="action.php?hapus_pendonor=<?= $p['id']; ?>" class="badge bg-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>