<?php include 'header.php' ?>
<div class="page-title">
    <h3>Ubah Profil</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah form pengubahan profil</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Ubah Profil</h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="row">
                            <div class="col-lg-12 mt-2">
                                <label for="nama">Nama</label>
                                <input required class="form-control" type="text" name="nama" id="nama" value="<?= user()->nama; ?>">
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label for="old_password">Password Lama</label>
                                <input required class="form-control" type="password" name="old_password" id="old_password">
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label for="password">Password Baru</label>
                                <input class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="col-12 mt-3">
                                <button name="ubah_profil" class="btn btn-primary btn-sm">Simpan</button>
                                <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                <a href="profil.php" class="btn btn-warning btn-sm">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>