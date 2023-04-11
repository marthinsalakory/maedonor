<?php include 'header.php' ?>
<div class="page-title">
    <h3>Profil Saya</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah data profil saya</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row mt-2">
                        <div class="col-2">
                            <label>Nama </label>
                        </div>
                        <div class="col-10">: <?= user()->nama; ?></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-2">
                            <label>Username </label>
                        </div>
                        <div class="col-10">: <?= user()->username; ?></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <a href="ubah_profil.php" class="btn btn-warning btn-sm ">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>