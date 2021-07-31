<?= $this->extend("Layout/Template"); ?>
<?= $this->section("content"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pendapatan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pendapatan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h2>Pendapatan</h2>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Produk</th>
                                    <th>Harga / Satuan</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Batik Pria</td>
                                    <td>1</td>
                                    <td>Rp.125.000,-</td>
                                    <td>Rp.125.000,-</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Pendapatan Total</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th>Rp.125.000,-</th>
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

                            <label for="deskripsi_produk" style="margin-top: 20px;">Deskripsi Produk</label>
                            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" placeholder="Deskripsi Produk" style="height: 120px;"></textarea>

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



<?= $this->endSection("script"); ?>