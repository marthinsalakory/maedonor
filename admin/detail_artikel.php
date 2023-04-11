<?php include 'header.php' ?>
<?php
if (!isset($_GET['id'])) {
    redirectBack();
}
if (!db_count('artikel', ['id' => $_GET['id']])) {
    redirectBack();
} else {
    $a = db_find('artikel', ['id' => $_GET['id']]);
}
?>
<div class="page-title">
    <h3>Detail Artikel</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah detail artikel</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-end">
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#aktifkan">Aktifkan</button>
                    <a href="semua_artikel.php" class="btn btn-warning btn-sm">Kembali</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title fw-bold"><?= $a->judul; ?></h4>
                </div>
                <div class="card-body">
                    <?= nl2br($a->isi); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Aktifkan -->
<div class="modal fade" id="aktifkan" tabindex="-1" aria-labelledby="aktifkanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="aktifkanLabel">Artikel Aktif</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="action.php?id=<?= $a->id; ?>" method="POST">
                    <input type="text" class="form-control mb-3" name="title" value="<?= $a->title; ?>" placeholder="Title">
                    <textarea class="form-control mb-3" name="deskripsi" id="deskripsi" rows="10" placeholder="Deskripsi"><?= $a->deskripsi; ?></textarea>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button name="tambah_artikel_aktif" type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>