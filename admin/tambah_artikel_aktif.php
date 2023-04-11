<?php include 'header.php' ?>
<div class="page-title">
    <h3>Tulis Artikel</h3>
    <p class="text-subtitle text-muted">dibawah ini adalah form penulisan artikel</p>
</div>
<section class="section">
    <div class="row">
        <div class="col-12 table-responsive">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Artikel</h4>
                </div>
                <div class="card-body">
                    <form action="action.php" method="POST">
                        <div class="row">
                            <div class="col-12">
                                <label for="judul">Judul</label>
                                <input required class="form-control" type="text" name="judul" id="judul">
                            </div>
                            <div class="col-12 mt-2">
                                <label for="isi">Deskripsi</label>
                                <textarea required class="form-control" name="isi" id="isi" rows="10"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>