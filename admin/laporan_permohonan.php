<?php include 'header.php' ?>
<div class="page-title">
    <h3>Laporan Permohonan Darah</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah laporan permohonan darah</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Laporan Permohonan</h4>
                </div>
                <div class="card-body">
                    <form target="_blank" action="laporan_permohonan_tampil.php" method="GET">
                        <input type="hidden" name="laporan_permohonan">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="tanggal_awal">Tanggal Awal</label>
                                <input class="form-control" type="date" name="tanggal_awal" id="tanggal_awal">
                            </div>
                            <div class="col-lg-6">
                                <label for="tanggal_akhir">Tanggal Akhir</label>
                                <input class="form-control" type="date" name="tanggal_akhir" id="tanggal_akhir">
                            </div>
                            <div class="col-lg-6">
                                <label for="status_permohonan">Status Permohonan</label>
                                <select class="form-control" name="status_permohonan" id="status_permohonan">
                                    <option value="">Semua Status</option>
                                    <option value="1">Aktif</option>
                                    <option value="2">Tidak Aktif</option>
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