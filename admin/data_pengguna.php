<?php include 'header.php' ?>
<?php must_role('1'); ?>
<div class="page-title">
    <h3>Data Pengguna</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah data data pengguna</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Data Pengguna</h4>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <table class='table table-striped mb-0' id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>username</th>
                                    <th>Role</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach (db_findAll('pengguna') as $p) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $p['nama']; ?></td>
                                        <td><?= $p['username']; ?></td>
                                        <td><span class="badge <?= $p['role' == '1' ? 'bg-primary' : 'bg-success']; ?>">Admin <?= $p['role']; ?></span></td>
                                        <td>
                                            <a onclick="return confirm('Yakin?')" href="action.php?reset_password_pengguna=<?= $p['id']; ?>" class="badge bg-warning">Reset Password</a>
                                            <a onclick="return confirm('Yakin?')" href="action.php?hapus_pengguna=<?= $p['id']; ?>" class="badge bg-danger">Hapus</a>
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