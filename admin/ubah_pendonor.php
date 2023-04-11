<?php include 'header.php' ?>
<?php
if (!isset($_GET['id'])) {
    redirectBack();
}
if (!db_count('pendonor', ['id' => $_GET['id']])) {
    redirectBack();
} else {
    $p = db_find('pendonor', ['id' => $_GET['id']]);
}
?>
<div class="page-title">
    <h3>Ubah Data Pendonor</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah form ubah data pendonor</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Pendonor</h4>
                </div>
                <div class="card-body">
                    <form action="action.php?id=<?= $p->id; ?>" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <label for="nama">Nama</label>
                                <input required class="form-control" type="text" name="nama" id="nama" value="<?= $p->nama; ?>">
                            </div>
                            <div class="col-6">
                                <label for="alamat">Alamat</label>
                                <textarea required class="form-control" name="alamat" id="alamat" rows="1"><?= $p->alamat; ?></textarea>
                            </div>
                            <div class="col-6">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $p->tempat_lahir; ?>">
                            </div>
                            <div class="col-6">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input class="form-select" type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $p->tanggal_lahir; ?>">
                            </div>
                            <div class="col-6">
                                <label for="status">Status</label>
                                <select required class="form-control" name="status" id="status">
                                    <option <?= $p->status == 'Mahasiswa' ? 'selected' : ''; ?> value="Mahasiswa">Mahasiswa</option>
                                    <option <?= $p->status == 'Pegawai' ? 'selected' : ''; ?> value="Pegawai">Pegawai</option>
                                    <option <?= $p->status == 'Dosen' ? 'selected' : ''; ?> value="Dosen">Dosen</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select required class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option <?= $p->jenis_kelamin == 'Laki-laki' ? 'selected' : ''; ?> value="Laki-laki">Laki-laki</option>
                                    <option <?= $p->jenis_kelamin == 'Perempuan' ? 'selected' : ''; ?> value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="golongan_darah">Golongan Darah</label>
                                <select required class="form-control" name="golongan_darah" id="golongan_darah">
                                    <option <?= $p->golongan_darah == 'A' ? 'selected' : ''; ?> value="A">A</option>
                                    <option <?= $p->golongan_darah == 'B' ? 'selected' : ''; ?> value="B">B</option>
                                    <option <?= $p->golongan_darah == 'AB' ? 'selected' : ''; ?> value="AB">AB</option>
                                    <option <?= $p->golongan_darah == 'O' ? 'selected' : ''; ?> value="O">O</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="riwayat_penyakit">Riwayat Penyakit</label>
                                <textarea required class="form-control" name="riwayat_penyakit" id="riwayat_penyakit" rows="1"><?= $p->riwayat_penyakit; ?></textarea>
                            </div>
                            <div class="col-6">
                                <label for="no_telp">No Telp</label>
                                <input class="form-control" type="number" name="no_telp" id="no_telp" value="<?= $p->no_telp; ?>">
                            </div>
                            <div class="col-6">
                                <label for="fakultas">Fakultas</label>
                                <select required class="form-control" name="fakultas" id="fakultas">
                                    <option <?= $p->fakultas == 'Ilmu Sosial dan Politik' ? 'selected' : ''; ?> value="Ilmu Sosial dan Politik">Ilmu Sosial dan Politik</option>
                                    <option <?= $p->fakultas == 'Ekonomi dan Bisnis' ? 'selected' : ''; ?> value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                                    <option <?= $p->fakultas == 'Pertanian' ? 'selected' : ''; ?> value="Pertanian">Pertanian</option>
                                    <option <?= $p->fakultas == 'Keguruan dan Ilmu Pendidikan' ? 'selected' : ''; ?> value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
                                    <option <?= $p->fakultas == 'Teknik' ? 'selected' : ''; ?> value="Teknik">Teknik</option>
                                    <option <?= $p->fakultas == 'Perikanan dan Ilmu Kelautan' ? 'selected' : ''; ?> value="Perikanan dan Ilmu Kelautan">Perikanan dan Ilmu Kelautan</option>
                                    <option <?= $p->fakultas == 'Hukum' ? 'selected' : ''; ?> value="Hukum">Hukum</option>
                                    <option <?= $p->fakultas == 'Matematika dan Ilmu Pengetahuan Alam' ? 'selected' : ''; ?> value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button name="ubah_pendonor" class="btn btn-primary btn-sm mt-2">Submit</button>
                                <button type="reset" class="btn btn-danger btn-sm mt-2">Reset</button>
                                <a href="data_pendonor.php" class="btn btn-warning btn-sm mt-2">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>