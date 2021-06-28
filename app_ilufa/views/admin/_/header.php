<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Najah Network">
    <meta name="author" content="Najah Team">
    <title><?php echo $title ?> - Najah Network</title>
    <link href="<?php echo GUEST ?>img/najah_favicon.png" rel="icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">

    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS ?>css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url() ?>public/back/najah.png" class="navbar-brand-img" alt="...">
                </a>
                <div class="ml-auto">
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <ul class="navbar-nav">

                        <?php if ($this->session->userdata('log_admin') == TRUE) {
                            if ($this->session->userdata('log_level') == 0) { ?>

                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "dashboard") {
                                                                    echo "active";
                                                                } ?>" href="<?php echo base_url('admin') ?>">
                                        <i class="fa fa-home text-muted"></i>
                                        <span class="nav-link-text">Dashboard</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "member") {
                                                                    echo "active";
                                                                } ?>" href="<?php echo base_url() ?>admin/member/all">
                                        <i class="fa fa-users text-green"></i>
                                        <span class="nav-link-text">Database Mitra</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "product") {
                                                                    echo "active";
                                                                } ?>" href="<?php echo base_url('admin/product/all') ?>">
                                        <i class="fa fa-tags text-green"></i>
                                        <span class="nav-link-text">Produk</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "transaction") {
                                                                    echo "active";
                                                                } ?>" href="<?php echo base_url('admin/transaction/all') ?>">
                                        <i class="fa fa-shopping-cart text-orange"></i>
                                        <span class="nav-link-text">Transaksi</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "commission") {
                                                                    echo "active";
                                                                } ?>" href="<?php echo base_url('admin/commission/all') ?>">
                                        <i class="fa fa-credit-card text-orange"></i>
                                        <span class="nav-link-text">Komisi & Bonus</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "push_notification_msg") {
                                                                    echo "active";
                                                                } ?>" href="<?php echo base_url('admin/push_notification_msg') ?>">
                                        <i class="fa fa-bell text-info"></i>
                                        <span class="nav-link-text">Pesan Notifikasi</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "report") {
                                                                    echo "active";
                                                                } ?>" href="<?php echo base_url('admin/report') ?>">
                                        <i class="fa fa-print text-info"></i>
                                        <span class="nav-link-text">Laporan</span>
                                    </a>
                                </li>

                                <!-- <li class="nav-item">
                                    <a class="nav-link <?php if ($page == "property" || $page == "cash" || $page == "report") {
                                                                    echo "active";
                                                                } ?>" href="#navbar-akuntansi" data-toggle="collapse" role="button" aria-expanded="<?php if ($page == "property" || $page == "cash" || $page == "report") {
                                                                                                                                                                echo "true";
                                                                                                                                                            } else {
                                                                                                                                                                echo "false";
                                                                                                                                                            } ?>" aria-controls="navbar-akuntansi">
                                        <i class="fa fa-print text-info"></i>
                                        <span class="nav-link-text">Laporan</span>
                                    </a>
                                    <div class="collapse <?php if ($page == "property" || $page == "cash" || $page == "report") {
                                                                        echo "show";
                                                                    } ?>" id="navbar-akuntansi">
                                        <ul class="nav nav-sm flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link <?php if ($page == "property") {
                                                                                        echo "active";
                                                                                    } ?>"><i class="fa fa-print text-info"></i>Laporan Transaksi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link <?php if ($page == "cash") {
                                                                                        echo "active";
                                                                                    } ?>"><i class="fa fa-print text-info"></i>Laporan Komisi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link <?php if ($page == "report") {
                                                                                        echo "active";
                                                                                    } ?>"><i class="fa fa-print text-info"></i>Laporan Team</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> -->
                    </ul>

                    <hr class="my-3">

                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($page == "level" || $page == "bonus" || $page == "mitra" || $page == "account" || $page == "courier" || $page == "event") {
                                                            echo "active";
                                                        } ?>" href="#navbar-master" data-toggle="collapse" role="button" aria-expanded="<?php if ($page == "employee" || $page == "item" || $page == "mitra" || $page == "account" || $page == "courier") {
                                                                                                                                                    echo "true";
                                                                                                                                                } else {
                                                                                                                                                    echo "false";
                                                                                                                                                } ?>" aria-controls="navbar-master">
                                <i class="ni ni-archive-2"></i>
                                <span class="nav-link-text">Master</span>
                            </a>
                            <div class="collapse <?php if ($page == "level" || $page == "bonus" || $page == "item" || $page == "promo" || $page == "courier" || $page == "event") {
                                                                echo "show";
                                                            } ?>" id="navbar-master">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('admin/master/event') ?>" class="nav-link <?php if ($page == "event") {
                                                                                                                            echo "active";
                                                                                                                        } ?>"><i class="ni ni-calendar-grid-58"></i>Event</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('admin/master/promo') ?>" class="nav-link <?php if ($page == "promo") {
                                                                                                                            echo "active";
                                                                                                                        } ?>"><i class="ni ni-favourite-28"></i>Promo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('admin/master/bonus') ?>" class="nav-link <?php if ($page == "bonus") {
                                                                                                                            echo "active";
                                                                                                                        } ?>"><i class="ni ni-trophy"></i>Bonus</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('admin/master/courier') ?>" class="nav-link <?php if ($page == "courier") {
                                                                                                                                echo "active";
                                                                                                                            } ?>"><i class="ni ni-delivery-fast"></i>Kurir</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('admin/master/level_member') ?>" class="nav-link <?php if ($page == "level") {
                                                                                                                                    echo "active";
                                                                                                                                } ?>"><i class="ni ni-circle-08"></i>Level Member</a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                    <?php } elseif ($this->session->userdata('log_level') == 1) { ?>
                        <!-- ADMIN KHUSUS -->
                    <?php }

                        //MEMBE AREA
                    } elseif ($this->session->userdata('log_admin') == FALSE) { ?>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "dashboard") {
                                                    echo "active";
                                                } ?>" href="<?php echo base_url('admin') ?>">
                            <i class="fa fa-home text-muted"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "product") {
                                                    echo "active";
                                                } ?>" href="<?php echo base_url('member/product') ?>">
                            <i class="fa fa-cubes text-green"></i>
                            <span class="nav-link-text">Stok Saya</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "team") {
                                                    echo "active";
                                                } ?>" href="<?php echo base_url() ?>member/team">
                            <i class="fa fa-users text-green"></i>
                            <span class="nav-link-text">Team</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "transaction") {
                                                    echo "active";
                                                } ?>" href="<?php echo base_url('member/transaction/all') ?>">
                            <i class="fa fa-shopping-cart text-orange"></i>
                            <span class="nav-link-text">Transaksi</span>
                        </a>
                    </li>

                    <!--
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "commission") {
                                                    echo "active";
                                                } ?>" href="<?php echo base_url('member/commission/all') ?>">
                            <i class="fa fa-credit-card text-orange"></i>
                            <span class="nav-link-text">Komisi</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == "point") {
                                                    echo "active";
                                                } ?>" href="<?php echo base_url('member/point/all') ?>">
                            <i class="fa fa-coins text-orange"></i>
                            <span class="nav-link-text">Poin</span>
                        </a>
                    </li>
                    -->
                <?php }
                ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content -->

    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-light bg-secondary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-dark form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center ml-md-auto">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-light" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>

                        <?php
                        if ($this->session->userdata('log_admin') == TRUE) {
                            $trans      = $this->db->query("SELECT  id_transaksi,total,tgl_pesan,tipe,
                                                                (SELECT nama FROM member WHERE id_member=(SELECT id_member FROM member WHERE id_member=transaksi.id_member)) AS member,
                                                                (SELECT nama FROM member WHERE id_member=(SELECT id_member FROM member WHERE id_member=transaksi.id_member_to)) AS member_to
                                                        FROM transaksi WHERE notif_admin>0 ORDER BY tgl_pesan DESC");
                            $trans_t    = $trans->num_rows();
                            ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-cart"></i><sup style="background-color: orange; padding-left:5px; padding-right:10px; border-radius:10px; color: #fff;"><?php echo $trans_t ?> Transaksi Baru</sup>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                                    <div class="list-group list-group-flush">

                                        <?php
                                            $trans_row = $trans->result();
                                            foreach ($trans_row as $tr) {
                                                date_default_timezone_set('Asia/Jakarta');
                                                $now    = new DateTime('now');
                                                $date   = new DateTime($tr->tgl_pesan);

                                                $notif_t = date_diff($now, $date);

                                                echo "  <a href='" . base_url('admin/transaction_detail/') . "$tr->id_transaksi' class='list-group-item list-group-item-action'>
                                                            <div class='row align-items-center'>
                                                            <div class='col-auto'></div>
                                                                <div class='col ml--2'>
                                                                    <div class='d-flex justify-content-between align-items-center'>
                                                                        <div>
                                                                            <h4 class='mb-0 text-sm'>$tr->member";
                                                if ($tr->tipe == 1) {
                                                    echo " (Menjual ke $tr->member_to)";
                                                } else {
                                                    echo " (Beli)";
                                                }
                                                echo "
                                                                            </h4>
                                                                        </div>
                                                                        <div class='text-right text-muted'>
                                                                            <small>" . $notif_t->h . " hrs ago</small>
                                                                        </div>
                                                                    </div>
                                                                    <p class='text-sm mb-0'> Total = Rp " . number_format($tr->total, 0, ',', '.') . "</p>
                                                                </div>
                                                            </div>
                                                        </a>";
                                            }
                                            ?>
                                    </div>
                                    <?php
                                        if ($trans_t == 0) {
                                            echo "<a class='dropdown-item text-center text-primary font-weight-bold py-3'>Belum ada Transaksi baru...</a>";
                                        } else {
                                            echo "<a href='" . base_url('admin/transaction/new') . "' class='dropdown-item text-center text-primary font-weight-bold py-3'>Lihat semua...</a>";
                                        }
                                        ?>
                                </div>
                            </li>

                            <?php
                                $member   = $this->db->query("SELECT * FROM member WHERE notif_admin=1");
                                $member_t = $member->num_rows();
                                ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-bell-55"></i><sup style="background-color: orange; padding-left:5px; padding-right:10px; border-radius:10px; color: #fff;"><?php echo $member_t ?> Pendaftar Baru</sup>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                                    <div class="list-group list-group-flush">

                                        <?php
                                            $member_row = $member->result();
                                            foreach ($member_row as $mr) {
                                                date_default_timezone_set('Asia/Jakarta');
                                                $now    = new DateTime('now');
                                                $date   = new DateTime($mr->tgl_reg);

                                                $notif_m = date_diff($now, $date);

                                                echo "  <a href='#!' class='list-group-item list-group-item-action'>
                                                            <div class='row align-items-center'>
                                                                <div class='col-auto'>
                                                                    <img alt='Image placeholder' src='" . ASSETS . "img/theme/profil.jpg' class='avatar rounded-circle'>
                                                                </div>
                                                                <div class='col ml--2'>
                                                                    <div class='d-flex justify-content-between align-items-center'>
                                                                        <div>
                                                                            <h4 class='mb-0 text-sm'>$mr->nama</h4>
                                                                        </div>
                                                                        <div class='text-right text-muted'>
                                                                            <small>" . $notif_m->h . " hrs ago</small>
                                                                        </div>
                                                                    </div>
                                                                    <p class='text-sm mb-0'>0$mr->no_hp</p>
                                                                </div>
                                                            </div>
                                                        </a>";
                                            }
                                            ?>
                                    </div>
                                    <?php
                                        if ($member_t == 0) {
                                            echo "<a class='dropdown-item text-center text-primary font-weight-bold py-3'>Belum ada pendaftar baru...</a>";
                                        } else {
                                            echo "<a href='#!' class='dropdown-item text-center text-primary font-weight-bold py-3'>Lihat semua...</a>";
                                        }

                                        ?>
                                </div>
                            </li>
                        <?php
                        } else {

                            $member   = $this->db->query("SELECT * FROM transaksi WHERE notif_member=1");
                            $member_t = $member->num_rows();
                            ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-bell-55"></i><sup style="background-color: orange; padding-left:5px; padding-right:9px; border-radius:10px; color: #fff;"><?php echo " $member_t"; ?></sup>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                                    <div class="list-group list-group-flush">

                                        <?php
                                            $member_row = $member->result();
                                            foreach ($member_row as $mr) {
                                                date_default_timezone_set('Asia/Jakarta');
                                                $now    = new DateTime('now');
                                                $date   = new DateTime($mr->tgl_reg);

                                                $notif_m = date_diff($now, $date);

                                                echo "  <a href='#!' class='list-group-item list-group-item-action'>
                                                            <div class='row align-items-center'>
                                                                <div class='col-auto'>
                                                                    <img alt='Image placeholder' src='" . ASSETS . "img/theme/profil.jpg' class='avatar rounded-circle'>
                                                                </div>
                                                                <div class='col ml--2'>
                                                                    <div class='d-flex justify-content-between align-items-center'>
                                                                        <div>
                                                                            <h4 class='mb-0 text-sm'>$mr->nama</h4>
                                                                        </div>
                                                                        <div class='text-right text-muted'>
                                                                            <small>" . $notif_m->h . " hrs ago</small>
                                                                        </div>
                                                                    </div>
                                                                    <p class='text-sm mb-0'>0$mr->no_hp</p>
                                                                </div>
                                                            </div>
                                                        </a>";
                                            }
                                            ?>
                                    </div>
                                    <?php
                                        if ($member_t == 0) {
                                            echo "<a class='dropdown-item text-center text-primary font-weight-bold py-3'>Belum ada notifikasi baru...</a>";
                                        } else {
                                            echo "<a href='#!' class='dropdown-item text-center text-primary font-weight-bold py-3'>Lihat semua...</a>";
                                        }

                                        ?>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-basket"></i><sup style="background-color: orange; padding-left:5px; padding-right:9px; border-radius:10px; color: #fff;" id="qty-cart-c"></sup>
                                </a>
                                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                                    <div class="list-group list-group-flush" id="list-cart-c">

                                        <!-- <a href="#!" class="list-group-item list-group-item-action">
                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <img alt="Image placeholder" src="<?php echo base_url() ?>public/back/img/theme/team-1.jpg" class="avatar rounded-circle">
                                                </div>
                                                <div class="col ml--2">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <h4 class="mb-0 text-sm">John Snow</h4>
                                                        </div>
                                                        <div class="text-right text-muted">
                                                            <small>2 hrs ago</small>
                                                        </div>
                                                    </div>
                                                    <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                                </div>
                                            </div>
                                        </a>

                                        <div class="px-3 py-3">
                                            <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                                        </div>
                                        <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a> -->

                                    </div>
                                        <a href="<?php echo base_url('member/cart/'); ?><?php
                                                                                                    if (isset($_SESSION['idorder'])) {
                                                                                                        echo $_SESSION['idorder'];
                                                                                                    }
                                                                                                    ?>" class="dropdown-item text-center text-primary font-weight-bold py-2"><h2 class="btn btn-primary btn-sm">Keranjang Belanja</h2></a>

                                </div>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?php echo ADMIN_ASSETS ?>img/theme/profil.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold"><?php echo $this->session->userdata('log_name'); ?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div> -->
                                <a href="<?php echo base_url('member/profile'); ?>" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="<?php echo base_url('member/passwd'); ?>" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Update Password</span>
                                </a>

                                <div class="dropdown-divider"></div>
                                <a href="<?php echo base_url('auth/logout/'); ?>" class="dropdown-item" onclick="return confirm('Anda yakin ingin keluar ?');">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php echo $this->session->flashdata('report'); ?>