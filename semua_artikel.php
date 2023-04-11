<?php include 'header.php'; ?>

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        <h1 class="text-white display-3">Semua Artikel</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Semua Artikel</p>
        </div>
    </div>
</div>
<!-- Header End -->


<div class="container py-5">

    <div class="row">
        <div class="col-12">

            <!-- Category Start -->
            <div class="mb-5">
                <h3 class="mb-4 d-flex justify-content-between align-items-center">
                    Semua Artikel
                    <!-- <input id="search" type="text" class="form-control w-25" placeholder="Cari"> -->
                </h3>
                <div class="bg-secondary" style="padding: 30px;">
                    <ul class="list-inline m-0" id="artikel">
                        <?php foreach (db_findAll('artikel') as $a) : ?>
                            <li class="mb-1 py-2 px-3 bg-light d-flex justify-content-between align-items-center">
                                <a class="text-dark" href="detail_artikel.php?id=<?= $a['id']; ?>"><i class="fa fa-angle-right text-primary mr-2"></i><?= $a['judul']; ?></a>
                                <span class="badge badge-secondary badge-pill"><?= $a['tanggal']; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- Category End -->

        </div>
    </div>
</div>
<!-- <script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#artikel li a").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script> -->

<?php include 'footer.php'; ?>