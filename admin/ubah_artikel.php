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
    <h3>Ubah Artikel</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah form ubah artikel</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Artikel</h4>
                </div>
                <div class="card-body">
                    <form action="action.php?id=<?= $a->id; ?>" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <label for="judul">Judul</label>
                                <input required class="form-control" type="text" name="judul" id="judul" value="<?= $a->judul; ?>">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="isi">Isi</label>
                                <textarea required class="form-control" name="isi" id="isi" rows="10"><?= $a->isi; ?></textarea>
                            </div>
                            <div class="col-12">
                                <button name="ubah_artikel" class="btn btn-primary btn-sm mt-2">Submit</button>
                                <button type="reset" class="btn btn-danger btn-sm mt-2">Reset</button>
                                <a href="semua_artikel.php" type="reset" class="btn btn-warning btn-sm mt-2">Kembali</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>