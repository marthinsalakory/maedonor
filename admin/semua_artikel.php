<?php include 'header.php' ?>
<?php must_role('1'); ?>
<div class="page-title">
    <h3>Semua Artikel</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah data artikel</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Artikel</h4>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class='table table-striped mb-0' id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Judul</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach (db_findAll('artikel') as $a) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><span class="badge bg-info"><?= $a['tanggal']; ?></span></td>
                                        <td><?= $a['judul']; ?></td>
                                        <td>
                                            <a href="detail_artikel.php?id=<?= $a['id']; ?>" class="badge bg-primary">Lihat</a>
                                            <a href="ubah_artikel.php?id=<?= $a['id']; ?>" class="badge bg-warning">Ubah</a>
                                            <a href="action.php?hapus_artikel=<?= $a['id']; ?>" class="badge bg-danger">Hapus</a>
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