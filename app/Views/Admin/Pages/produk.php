<?= $this->extend("Layout/Template"); ?>
<?= $this->section("content"); ?>

<!-- notifikasi -->
<?php if (session()->getFlashdata("notif")) : ?>

    <div id="notif" data-text="<?= session()->getFlashdata("notif"); ?>"></div>

<?php endif; ?>

<!-- notifikasi -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Semua Produk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Semua Produk</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-info"><i class="fa fa-plus-square-o"></i> Tambah Produk</button>
                    </div>

                    <!-- ===================== error ============= -->
                    <?php if ($validasi->hasError("nama_produk") || $validasi->hasError("deskripsi_produk") || $validasi->hasError("stok") || $validasi->hasError("gambar_produk")) : ?>

                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Gagal Upload!</strong>
                            <?= $validasi->listErrors(); ?>
                        </div>


                    <?php endif; ?>

                    <!-- ====================== end error ============ -->

                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($produk as $row) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td>
                                            <?= $row['nama_produk']; ?>
                                        </td>
                                        <td>
                                            <img src="<?= base_url(); ?>/assets/product/<?= $row['gambar_produk']; ?>" width="90px" height="90px">
                                        </td>
                                        <td><?= $row['deskripsi_produk']; ?></td>
                                        <td><?= $row['harga_produk']; ?></td>
                                        <td><?= $row['stok_produk']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-info btn-edit-produk" style="width: 90px;">Edit</a>
                                            <a href="#" class="btn btn-danger btn-hapus-produk" style="width: 90px; margin-top: 5px;">Hapus</a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->


        <!-- modal -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-green">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Tambah Produk</h4>
                    </div>

                    <form action="<?= base_url(); ?>/Admin/tambahProduk" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">

                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Nama Produk">

                            <label for="harga_produk" style="margin-top: 20px;">Harga Produk</label>
                            <input type="text" class="form-control" id="harga_produk" name="harga_produk" placeholder="Harga Produk">


                            <label for="deskripsi_produk" style="margin-top: 20px;">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" placeholder="Deskripsi Produk" style="height: 120px;"></textarea>

                            <div class="select-kategori-produk">
                                <label for="kategori_produk">Kategori Produk</label>
                                <select name="kategori_produk" id="kategori_produk">
                                    <option value="pria">Pria</option>
                                    <option value="wanita">Wanita</option>
                                </select>

                            </div>


                            <label for="stok" style="margin-top: 20px;">Stok Produk</label>
                            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok" style="width: 120px;">

                            <label for="gambar_produk" style="margin-top: 20px;">Gambar Produk</label>
                            <input type="file" id="gambar_produk" name="gambar_produk">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection("content"); ?>
<?= $this->section("script"); ?>


<script>
    $("document").ready(function() {

        //    notif
        if ($("#notif").data("text")) {
            Swal.fire(
                'Produk Anda !',
                $("#notif").data("text"),
                'success'
            )
        }

    })
</script>


<?= $this->endSection("script"); ?>