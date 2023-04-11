<?php include 'header.php' ?>
<div class="page-title">
    <h3>Riwayat Permohonan Darah</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah riwayat permohonan darah</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Riwayat Permohonan</h4>
                </div>
                <div class="card-body px-0 pb-0">
                    <?= flash(); ?>
                    <div class="table-responsive">
                        <table class='table table-striped mb-0' id="table1">
                            <thead>
                                <tr>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach (db_findAll('permohonan') as $p) : ?>
                                    <tr>
                                        <td><span class="badge bg-primary"><?= $p['tanggal']; ?></span></td>
                                        <td><?= $p['nama_pasien']; ?></td>
                                        <td><?= $p['umur']; ?></td>
                                        <td><?= $p['rumah_sakit']; ?></td>
                                        <td><span class="badge bg-danger"><?= $p['golongan_darah']; ?></span></td>
                                        <td><span class="badge bg-warning"><?= $p['kuota']; ?> Kantong</span></td>
                                        <td>
                                            <form action="action.php" method="POST">
                                                <input type="hidden" name="id" value="<?= $p['id']; ?>">
                                                <select onchange="$(this).parents('form:first').submit()" name="ubah_status" class="badge bg-success">
                                                    <option <?= $p['status'] == '1' ? 'selected' : ''; ?> class="bg-white text-dark" value="1">Aktif</option>
                                                    <option <?= $p['status'] == '2' ? 'selected' : ''; ?> class="bg-white text-dark" value="2">Tidak Aktif</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td><?= $p['nama_wali']; ?></td>
                                        <td><?= $p['no_telp']; ?></td>
                                        <td><?= $p['hubungan']; ?></td>
                                        <td>
                                            <a href="action.php?hapus_permohonan=<?= $p['id']; ?>" class="badge bg-danger">Hapus</a>
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