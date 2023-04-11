<?php include 'header.php' ?>
<div class="page-title">
    <h3>Laporan Pendonor Darah</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah laporan pendonor darah</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Laporan Pendonor</h4>
                </div>
                <div class="card-body">
                    <form target="_blank" action="laporan_pendonor_tampil.php" method="GET">
                        <input type="hidden" name="laporan_permohonan">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="umur">Umur</label>
                                <input class="form-control" type="number" name="umur" id="umur" placeholder="Umur">
                            </div>
                            <div class="col-lg-6">
                                <label for="status">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">Semua Status</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Pegawai">Pegawai</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <option value="">Semua</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label for="golongan_darah">Golongan Darah</label>
                                <select class="form-control" name="golongan_darah" id="golongan_darah">
                                    <option value="">Semua Golongan Darah</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="fakultas">Fakultas</label>
                                <select required class="form-control" name="fakultas" id="fakultas">
                                    <option value="">Semua Fakultas</option>
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
                            <div class="col-12 mt-3 text-end">
                                <button onclick="$(this).parents('form:first').attr('target', '');$(this).parents('form:first').submit();" type="button" class="btn btn-primary btn-sm"><i class="fa fa-search"></i> Tampilkan</button>
                                <button onclick="$(this).parents('form:first').attr('target', '_blank');$(this).parents('form:first').submit();" type="button" class="btn btn-primary btn-sm"><i class="fa fa-arrow-up-right-from-square"></i> Lihat di Tab Baru</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>