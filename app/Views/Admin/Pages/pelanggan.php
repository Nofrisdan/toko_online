<?= $this->extend("Layout/Template"); ?>
<?= $this->section("content"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pelanggan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Pelanggan</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3>Semua Pelanggan</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Gambar</th>
                                    <th>Detail</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        Nofrisdan Sitopu
                                    </td>
                                    <td>
                                        <img src="<?= base_url(); ?>/assets/product/pria.jpeg" width="50px" height="50px">
                                    </td>
                                    <td>
                                        <button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-success">Detail</button>
                                    </td>

                                    <td>
                                        <a href="#" class="btn btn-info btn-wa-pelanggan">Wa</a>
                                        <a href="#" class="btn btn-primary btn-wa-pelanggan">Email</a>
                                        <a href="#" class="btn btn-danger btn-hapus-pelanggan">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Gambar</th>
                                    <th>Detail</th>

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


    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- modal -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Pelanggan</h4>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="<?= base_url(); ?>/assets/product/pria.jpeg" height="240px">
                    </div>
                    <div class="col-lg-5 detail-pelanggan">
                        <p>Nama </p><strong>Nofrisdan Sitopu</strong>
                        <p>Alamat </p><strong>Jl.Maguwo Gg Merpati 1, Yogyakarta</strong>

                        <p>Email </p><strong>nofrisdansitopu22@gmail.com</strong>
                        <p>Hp </p> <strong>082275048960</strong>
                    </div>
                </div>

            </div>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?= $this->endSection("content"); ?>
<?= $this->section("script"); ?>



<?= $this->endSection("script"); ?>