<body class="hold-transition skin-green fixed layout-top-nav">
    <div class="wrapper">

        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="../../index2.html" class="navbar-brand"><b>Cakdun</b>Shop</a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategory Produk <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Couple</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Pakaian Pria</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Pakaian Wanita</a></li>

                                </ul>
                            </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <!-- /.navbar-collapse -->


                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">



                            <li class="dropdown notifications-menu">
                                <!-- Menu toggle button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-shopping-cart"></i>

                                    <?php if (!empty($keranjang)) : ?>
                                        <span class="label label-warning"><?= $jumlahBarang; ?></span>
                                    <?php endif; ?>
                                    <?php if (empty($keranjang)) : ?>
                                        <span class="label label-warning">0</span>
                                    <?php endif; ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php if (!empty($keranjang)) : ?>
                                        <li class="header">Kamu Mempunyai <?= $jumlahBarang; ?> Produk Didalam Keranjang</li>

                                    <?php endif; ?>

                                    <?php if (empty($keranjang)) : ?>
                                        <li class="header">Kamu Tidak Mempunyai Produk Didalam Keranjang</li>

                                    <?php endif; ?>
                                    <?php if (!empty($keranjang)) : ?>
                                        <li>
                                            <!-- Inner Menu: contains the notifications -->
                                            <ul class="menu">
                                                <li>
                                                    <!-- start notification -->
                                                    <a href="<?= base_url(); ?>/User/Keranjang">
                                                        <i class="fa fa-shopping-cart text-aqua"></i> Lihat <?= $jumlahBarang; ?> Produk Ditambahkan
                                                    </a>
                                                </li>
                                                <!-- end notification -->
                                            </ul>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            </li>

                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?= base_url(); ?>/Lte2/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?= base_url(); ?>/Lte2/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="row">
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Followers</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Sales</a>
                                            </div>
                                            <div class="col-xs-4 text-center">
                                                <a href="#">Friends</a>
                                            </div>
                                        </div>
                                        <!-- /.row -->
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <!-- Full Width Column -->