<?php include 'header.php'; ?>
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

<div class="container py-5">

    <div class="row">
        <div class="col-12">
            <div class="bg-secondary mb-3 p-2 d-flex justify-content-between align-items-center">
                <h3>Detail Artikel</h3>
                <a href="semua_artikel.php" class="btn btn-danger">Kembali</a>
            </div>
        </div>

        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="pb-3">
                <div class="bg-secondary mb-3" style="padding: 30px;">
                    <h4 class="font-weight-bold mb-3"><?= $a->judul; ?></h4>
                    <?= nl2br($a->isi); ?>
                </div>
            </div>
            <!-- Blog Detail End -->
        </div>


        <!-- Sidebar Start -->
        <div class="col-lg-4 mt-5 mt-lg-0">
            <!-- Recent Post Start -->
            <div class="mb-5">
                <h3 class="mb-4">Artikel Lainnya</h3>
                <?php foreach (db_findAll('artikel')  as $artikel) : ?>
                    <div class="d-flex mb-3">
                        <a href="detail_artikel.php?id=<?= $artikel['id']; ?>" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3" style="height: 80px;">
                            <?= $artikel['judul']; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Recent Post End -->
        </div>
        <!-- Sidebar End -->
    </div>
</div>

<?php include 'footer.php'; ?>