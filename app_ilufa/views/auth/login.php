<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo "aaaa" ?>">
    <meta name="author" content="natdev.web.id">
    <title><?php echo "sasa" ?></title>
    <link href="<?php echo GUEST ?>img/najah_favicon.png" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/argon.css?v=1.1.0" type="text/css">
</head>

<body class="bg-default">
    <div class="main-content">
        <div class="header bg-gradient-warning py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mbx-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6">
                            <br>
                            <br>
                            <h1 class="text-white">Login 168 Ilufa
                                <!-- <a data-toggle="modal" href="#modal_login_x">Login</a> -->
                            </h1>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>

        <div class="container mt--8 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-red mb-4">
                                <?php echo $this->session->flashdata('report'); ?>
                            </div>
                            <form role="form" method="POST" action="<?php echo base_url('auth/login'); ?>">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="No Handphone/Email" type="text" name="username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password" name="password">
                                    </div>
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                    <label class="custom-control-label" for=" customCheckLogin">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <a href="#" class="text-light"><small>Lupa password?</small></a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?php echo base_url('register') ?>" class="text-light"><small>Buat akun baru</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo ADMIN_ASSETS ?>vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS ?>vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS ?>vendor/js-cookie/js.cookie.js"></script>
    <script src="<?php echo ADMIN_ASSETS ?>vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS ?>vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <script src="<?php echo ADMIN_ASSETS ?>js/argon.js?v=1.1.0"></script>
    <script src="<?php echo ADMIN_ASSETS ?>js/demo.min.js"></script>
</body>

</html>

<div class="modal fade" id="modal_login_x" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="<?php echo base_url('admin/act/update_member/0'); ?>" method="POST">
                <input type="hidden" name="id_member">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama lengkap sesuai KTP" required>
                            </div>
                        </div>
                    </div>

                    <?php date_default_timezone_set('Asia/Jakarta'); ?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_hp">No HP (WA)</label>
                                <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="No HP aktif" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="alamat">Alamat Lengkap</label>
                                <textarea name="alamat" class="form-control" id="alamat" rows="3" required placeholder="Alamat lengkap"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>