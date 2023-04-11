<?php include 'header.php' ?>
<?php must_role('1'); ?>
<div class="page-title">
    <h3>Artikel Aktif</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah data artikel aktif</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Artikel Aktif</h4>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class='table table-striped mb-0' id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach (db_findAll('artikel', ['status' => '1']) as $a) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $a['title']; ?></td>
                                        <td><?= $a['deskripsi']; ?></td>
                                        <td>
                                            <a href="action.php?nonaktifkan_artikel=<?= $a['id']; ?>" class="badge bg-danger">Nonaktifkan</a>
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