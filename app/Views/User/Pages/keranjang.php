<?= $this->extend("Layout/UserTemplate"); ?>
<?= $this->section("content"); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="fa fa-shopping-cart"></i>
                Keranjang

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Keranjang</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Produk Dalam Keranjang</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Jumlah Produk</th>
                                            <th>Harga / Satuan</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Batik Pria</td>
                                            <td>

                                                <input type="number" id="input-keranjang-user" name="jumlah_produk" value="1">

                                            </td>
                                            <td>Rp.192.000.-</td>

                                            <td> Rp. 192.000,-</td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Jumlah Produk</th>
                                            <th>Harga / Satuan</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- ============ check out ============ -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Transaksi</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="row">
                                <div class="col-xs-5">

                                    <div class="icon">
                                        <img src="<?= base_url(); ?>/assets/img/iconbri.png" width="60px" height="60px">
                                        <img src="<?= base_url(); ?>/assets/img/iconshope.png" width="140px" height="80px">
                                    </div>
                                </div>

                                <div class="col-xs-6 float-right">

                                    <div class="selection">
                                        <p>Pilih Metode Pembayaran</p>
                                        <select name="metode_pembayaran" id="metode_pembayaran">
                                            <option value="bri">BRI</option>
                                            <option value="shopePay">Shopee Pay</option>
                                        </select>
                                    </div>
                                    <p>Jmlah Keseluruhan Produk</p>
                                    <strong style="font-size: 20px;">4 Produk</strong>

                                    <p>Total Pembayaran </p>
                                    <strong style="font-size: 20px;">Rp. 120.000</strong>
                                    <br>
                                    <button class="btn btn-info" style="margin-top: 20px;">CheckOut</button>
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>

                    <!-- =========== detail produk ======== -->
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Detail Produk</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="img-product">
                                <img src="<?= base_url(); ?>/assets/product/pria.jpeg" alt="">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Detail Produk</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="img-product">
                                <img src="<?= base_url(); ?>/assets/product/pria.jpeg" alt="">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Detail Produk</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="img-product">
                                <img src="<?= base_url(); ?>/assets/product/pria.jpeg" alt="">
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>


                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>




    </div>
    <!-- /.container -->
</div>

<!-- /.content-wrapper -->


<?= $this->endSection("content"); ?>
<?= $this->section("script"); ?>



<?= $this->endSection("script"); ?>