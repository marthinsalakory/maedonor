<?php include 'header.php' ?>
<div class="page-title">
    <h3>Tambah Pendonor Baru</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah form penambahan pendonor baru</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Pendonor</h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <label for="nama">Nama</label>
                                <input required class="form-control" type="text" name="nama" id="nama">
                            </div>
                            <div class="col-6">
                                <label for="alamat">Alamat</label>
                                <textarea required class="form-control" name="alamat" id="alamat" rows="1"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input class="form-control" type="text" name="tempat_lahir" id="tempat_lahir">
                            </div>
                            <div class="col-6">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir" id="tanggal_lahir">
                            </div>
                            <div class="col-6">
                                <label for="status">Status</label>
                                <select required class="form-control" name="status" id="status">
                                    <option value=""></option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Pegawai">Pegawai</option>
                                    <option value="Dosen">Dosen</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select required class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value=""></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="golongan_darah">Golongan Darah</label>
                                <select required class="form-control" name="golongan_darah" id="golongan_darah">
                                    <option value=""></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="riwayat_penyakit">Riwayat Penyakit</label>
                                <textarea required class="form-control" name="riwayat_penyakit" id="riwayat_penyakit" rows="1"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="no_telp">No Telp</label>
                                <input class="form-control" type="number" name="no_telp" id="no_telp">
                            </div>
                            <div class="col-6">
                                <label for="fakultas">Fakultas</label>
                                <select required class="form-control" name="fakultas" id="fakultas">
                                    <option value=""></option>
                                    <option value="Kedokteran">Kedokteran</option>
                                    <option value="Ilmu Sosial dan Politik">Ilmu Sosial dan Politik</option>
                                    <option value="Ekonomi dan Bisnis">Ekonomi dan Bisnis</option>
                                    <option value="Pertanian">Pertanian</option>
                                    <option value="Keguruan dan Ilmu Pendidikan">Keguruan dan Ilmu Pendidikan</option>
                                    <option value="Teknik">Teknik</option>
                                    <option value="Perikanan dan Ilmu Kelautan">Perikanan dan Ilmu Kelautan</option>
                                    <option value="Hukum">Hukum</option>
                                    <option value="Matematika dan Ilmu Pengetahuan Alam">Matematika dan Ilmu Pengetahuan Alam</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button name="tambah_pendonor" class="btn btn-primary btn-sm mt-2">Submit</button>
                                <button type="reset" class="btn btn-danger btn-sm mt-2">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>