<?php include 'header.php' ?>
<div class="page-title">
    <h3>Tambah Pengguna Baru</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah form penambahan pengguna baru</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Tambah Pengguna</h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6 mt-2">
                                <label for="nama">Nama</label>
                                <input required class="form-control" type="text" name="nama" id="nama">
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label for="role">Role</label>
                                <select required class="form-select" name="role" id="role">
                                    <option value=""></option>
                                    <option value="1">Admin 1</option>
                                    <option value="2">Admin 2</option>
                                </select>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label for="username">Username</label>
                                <input required class="form-control" type="text" name="username" id="username">
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label for="password">Password</label>
                                <input required class="form-control" type="password" name="password" id="password">
                            </div>
                            <div class="col-12 mt-3">
                                <button name="tambah_pengguna" class="btn btn-primary btn-sm">Submit</button>
                                <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                                <a href="data_pengguna.php" class="btn btn-warning btn-sm">Pengguna</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>