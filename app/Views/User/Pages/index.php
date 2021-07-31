<?= $this->extend("Layout/UserTemplate"); ?>
<?= $this->section("content"); ?>

<?php if (session()->getFlashdata("notif")) : ?>

    <div id="notif" data-text="<?= session()->getFlashdata("notif"); ?>"></div>

<?php endif; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Semua Produk

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Kategori</a></li>
                <li class="active">Semua Produk</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- corousel -->
            <div class="carousel slide" id="slider" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li class="active" data-slide-to="0" data-target="#slider"></li>
                    <li data-slide-to="1" data-target="#slider"></li>
                    <li data-slide-to="2" data-target="#slider"></li>
                </ol>


                <div class="carousel-inner">
                    <div class="item active" id="slide1">
                        <div class="carousel-caption">
                            <h4> Batik Couple</h4>
                            <p>Deskripsi Produk</p>
                        </div>
                    </div>

                    <div class="item" id="slide2">
                        <div class="carousel-caption">
                            <h4>Batik Pria</h4>
                            <p>Deskripsi Produk</p>
                        </div>
                    </div>

                    <div class="item" id="slide3">
                        <div class="carousel-caption">
                            <h4>Batik Wanita</h4>
                            <p>Bahan Yang begitu halus dibuat dengan penuh rasa</p>
                        </div>
                    </div>
                </div>

                <a class="left carousel-control" href="#slider" data-slide="prev" role="button"><span class="icon-prev"></span></a>
                <a class="right carousel-control" href="#slider" data-slide="next" role="button"><span class="icon-next"></span></a>
            </div>

            <!-- all produk -->
            <div class="row justify-content-center" style="margin-top: 30px;">

                <?php foreach ($produk as $row) : ?>
                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <div class="card" style="width: 20rem; height: 600px;">

                            <div class="card-block">
                                <img class="card-img-top" src="<?= base_url(); ?>/assets/product/<?= $row['gambar_produk']; ?>" alt="Card image cap" width="270px" height="270px">
                                <div class="star" style="margin-left: -40px;">

                                    <ul>
                                        <li>
                                            <i class="fa fa-star" style="color: #FF8C00;"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" style="color: #FF8C00;"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star" style="color: #FF8C00;"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star-o" style="color: #FF8C00;"></i>
                                        </li>
                                    </ul>
                                </div><br>
                                <div class="card-block">
                                    <h4 class="card-title"><?= $row['nama_produk']; ?></h4>
                                    <p class="card-text"><?= $row['deskripsi_produk']; ?></p>

                                    <a href="#" style="margin-top: 10px;" class="btn btn-primary"><?= $row['harga_produk']; ?></a>

                                    <a href="<?= base_url(); ?>/Keranjang/TambahKeranjang/<?= $row['id_produk']; ?>" data-kode="<?= $row['id_produk']; ?>" style="margin-top: 10px;" class="btn btn-success btn-add-cart"><i class="fa fa-shopping-cart"></i> Add Cart</a>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>



        </section>
        <!-- /.content -->
    </div>
    <!-- /.container -->
</div>

<!-- /.content-wrapper -->



<?= $this->endSection("content"); ?>
<?= $this->section("script"); ?>

<script>
    $("document").ready(function() {
        if ($("#notif").data("text")) {

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: $("#notif").data("text"),
                showConfirmButton: false,
                timer: 1500
            })
        }
    })
</script>



<?= $this->endSection("script"); ?>