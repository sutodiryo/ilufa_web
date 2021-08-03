<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>iLuFa 168 - <?php echo $title ?> </title>
    <!-- <link rel="icon" type="image/x-icon" href="<?php echo BACK ?>assets/img/favicon.ico" /> -->
    <link rel="icon" type="image/png" href="<?php echo GUEST ?>img/favicons.png">
    <link href="<?php echo BACK ?>assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo BACK ?>assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo BACK ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BACK ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="<?php echo BACK ?>plugins/font-icons/fontawesome/css/regular.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-GV9Jm2u7rmsCe65wKzPTw5jtS38n2tVEGiDtbLrcW77HPEwrJM2Ej2yFNYwvsg+p" crossorigin="anonymous" /> -->
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <?php if ($page == "dashboard") { ?>

        <link href="<?php echo BACK ?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">

    <?php } elseif ($page == "games") { ?>

        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/table/datatable/datatables.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/table/datatable/custom_dt_html5.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/table/datatable/dt-global_style.css">

    <?php } elseif ($page == "job" || $page == "job_type" || $page == "job_applicant" || $page == "job_type" || $page == "branch") { ?>

        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/table/datatable/datatables.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>assets/css/forms/theme-checkbox-radio.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/table/datatable/dt-global_style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/table/datatable/custom_dt_custom.css">

        <link href="<?php echo BACK ?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/select2/select2.min.css">
    <?php } ?>

    <link href="<?php echo BACK ?>assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-item flex-row">
                <li class="nav-item align-self-center page-heading">
                    <div class="page-header">
                        <div class="page-title">
                            <!-- <h3><?php echo $this->session->userdata('log_name') ?></h3> -->
                            <h3><?php echo $title ?></h3>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-item flex-row search-ul">
                <!-- <li class="nav-item align-self-center search-animated">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <form class="form-inline search-full form-inline search" role="search">
                        <div class="search-bar">
                            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                        </div>
                    </form>
                </li> -->
            </ul>
            <ul class="navbar-item flex-row navbar-dropdown">
                <!-- <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo BACK ?>assets/img/ca.png" class="flag-width" alt="flag"><span>English</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                            <a class="dropdown-item" data-img-value="de" data-value="German" href="javascript:void(0);"><img src="<?php echo BACK ?>assets/img/de.png" class="flag-width" alt="flag"> German</a>
                            <a class="dropdown-item" data-img-value="jp" data-value="Japanese" href="javascript:void(0);"><img src="<?php echo BACK ?>assets/img/jp.png" class="flag-width" alt="flag"> Japanese</a>
                            <a class="dropdown-item" data-img-value="fr" data-value="French" href="javascript:void(0);"><img src="<?php echo BACK ?>assets/img/fr.png" class="flag-width" alt="flag"> French</a>
                            <a class="dropdown-item" data-img-value="ca" data-value="English" href="javascript:void(0);"><img src="<?php echo BACK ?>assets/img/ca.png" class="flag-width" alt="flag"> English</a>
                        </div>
                    </div>
                </li> -->

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg><span class="badge badge-primary"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                        <div class="">
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <img class="usr-img rounded-circle" src="<?php echo BACK ?>assets/img/90x90.jpg" alt="profile">
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Sangidi</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <img class="usr-img rounded-circle" src="<?php echo BACK ?>assets/img/90x90.jpg" alt="profile">
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Osas</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                            <a class="dropdown-item">
                                <div class="">

                                    <div class="media">
                                        <div class="user-img">
                                            <img class="usr-img rounded-circle" src="<?php echo BACK ?>assets/img/90x90.jpg" alt="profile">
                                        </div>
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name">Hamster</h5>
                                                <p class="msg-title">ACCOUNT UPDATE</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                                    </svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Sangidi</span> likes your photo.</div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share-2">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                    </svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Osas</span> shared your post</div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown-item">
                                <div class="media">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                        <line x1="7" y1="7" x2="7" y2="7"></line>
                                    </svg>
                                    <div class="media-body">
                                        <div class="notification-para"><span class="user-name">Osas</span> mentioned you in comment.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg> Profil</a>
                            </div>
                            <div class="dropdown-item">
                                <a href="https://api.whatsapp.com/send/?phone=6285220007411">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                    </svg>
                                    Kontak Developer
                                </a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="<?php echo base_url('logout') ?>" onclick="return confirm('Anda yakin ingin keluar ?');"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> Keluar</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <?php $level = $this->session->userdata('log_level'); ?>
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                        <img src="<?php echo BACK ?>assets/img/90x90.png" class="navbar-logo" alt="logo">
                    </li>
                    <li class="nav-item theme-text">
                        <a class="nav-link"> iLuFA </a>
                    </li>
                    <li class="nav-item toggle-sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left sidebarCollapse">
                            <line x1="19" y1="12" x2="5" y2="12"></line>
                            <polyline points="12 19 5 12 12 5"></polyline>
                        </svg>
                    </li>
                </ul>

                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">

                    <?php if ($this->session->userdata('log_admin') == TRUE) {
                        if ($level == 0) { ?>

                            <li class="menu <?php if ($page == "dashboard") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('admin') ?>" aria-expanded="<?php if ($page == "dashboard") {
                                                                                                        echo "true";
                                                                                                    } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                        <span>Dashboard</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu <?php if ($page == "transaction") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('transaction') ?>" aria-expanded="<?php if ($page == "transaction") {
                                                                                                            echo "true";
                                                                                                        } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                        <span>Transaksi</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu <?php if ($page == "job_applicant") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('job/applicant/all') ?>" aria-expanded="<?php if ($page == "job_applicant") {
                                                                                                                    echo "true";
                                                                                                                } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <polyline points="17 11 19 13 23 9"></polyline>
                                        </svg>
                                        <span>Pelamar Kerja</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu menu-heading">
                                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg><span>MASTER</span></div>
                            </li>

                            <li class="menu">
                                <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        <span>Member</span>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Semua Member </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Member Platinum </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Member Platinum </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Member Platinum </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu">
                                <a href="<?php echo base_url() ?>" aria-expanded="false" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-pull-request">
                                            <circle cx="18" cy="18" r="3"></circle>
                                            <circle cx="6" cy="6" r="3"></circle>
                                            <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                            <line x1="6" y1="9" x2="6" y2="21"></line>
                                        </svg>
                                        <span>Cabang</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu">
                                <a href="apps_chat.html" aria-expanded="false" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link">
                                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                        </svg>
                                        <span>Mitra</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu">
                                <a href="apps_mailbox.html" aria-expanded="false" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag">
                                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                                            <line x1="7" y1="7" x2="7.01" y2="7"></line>
                                        </svg>
                                        <span>Produk</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu <?php if ($page == "job") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('job') ?>" aria-expanded="<?php if ($page == "job") {
                                                                                                    echo "true";
                                                                                                } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                            <polyline points="10 17 15 12 10 7"></polyline>
                                            <line x1="15" y1="12" x2="3" y2="12"></line>
                                        </svg>
                                        <span>Lowongan Kerja</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu">
                                <a href="#authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>
                                        <span>User App</span>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <ul class="collapse submenu list-unstyled" id="authentication" data-parent="#accordionExample">
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Admin Pusat </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Admin Cabang </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> User Pusat </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> User Cabang </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu menu-heading">
                                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg><span>REPORT</span></div>
                            </li>

                            <li class="menu">
                                <a href="#report" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer">
                                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                            <rect x="6" y="14" width="12" height="8"></rect>
                                        </svg>
                                        <span>Report</span>
                                    </div>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                </a>
                                <ul class="collapse submenu list-unstyled" id="report" data-parent="#accordionExample">
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Admin Pusat </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> Admin Cabang </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> User Pusat </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>"> User Cabang </a>
                                    </li>
                                </ul>
                            </li>

                        <?php
                            } elseif ($level == 1) { ?>

                            <li class="menu <?php if ($page == "dashboard") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('admin') ?>" aria-expanded="<?php if ($page == "dashboard") {
                                                                                                        echo "true";
                                                                                                    } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                        <span>Dashboard</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu <?php if ($page == "job_applicant") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('admin/job/applicant/all') ?>" aria-expanded="<?php if ($page == "job_applicant") {
                                                                                                                        echo "true";
                                                                                                                    } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <polyline points="17 11 19 13 23 9"></polyline>
                                        </svg>
                                        <span>Pelamar Kerja</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu menu-heading">
                                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg><span>MASTER</span></div>
                            </li>

                            <li class="menu <?php if ($page == "job") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('admin/job') ?>" aria-expanded="<?php if ($page == "job") {
                                                                                                            echo "true";
                                                                                                        } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in">
                                            <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                            <polyline points="10 17 15 12 10 7"></polyline>
                                            <line x1="15" y1="12" x2="3" y2="12"></line>
                                        </svg>
                                        <span>Lowongan Kerja</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu <?php if ($page == "job_type") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('admin/job/type') ?>" aria-expanded="<?php if ($page == "job_type") {
                                                                                                                echo "true";
                                                                                                            } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-briefcase">
                                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                        </svg>
                                        <span>Jenis Pekerjaan</span>
                                    </div>
                                </a>
                            </li>

                        <?php
                            } elseif ($level == 2) { ?>

                            <li class="menu <?php if ($page == "dashboard") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('admin') ?>" aria-expanded="<?php if ($page == "dashboard") {
                                                                                                        echo "true";
                                                                                                    } ?>" class="dropdown-toggle">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                            <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                            <polyline points="17 6 23 6 23 12"></polyline>
                                        </svg>
                                        <span>Dashboard</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu <?php if ($page == "games") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('store/games') ?>" aria-expanded="<?php if ($page == "games") {
                                                                                                            echo "true";
                                                                                                        } ?>" class="dropdown-toggle">
                                    <div>
                                        <!-- <i width="24" height="24" class="fas fa-gamepad"></i> -->
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                        </svg> -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play">
                                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                        </svg>
                                        <span>Games</span>
                                    </div>
                                </a>
                            </li>

                            <li class="menu menu-heading">
                                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                    </svg><span>MASTER</span></div>
                            </li>

                            <li class="menu <?php if ($page == "branch") {
                                                        echo "active";
                                                    } ?>">
                                <a href="<?php echo base_url('admin/master/branch') ?>" aria-expanded="<?php if ($page == "branch") {
                                                                                                                    echo "true";
                                                                                                                } ?>" class="dropdown-toggle">
                                    <div class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-pull-request">
                                            <circle cx="18" cy="18" r="3"></circle>
                                            <circle cx="6" cy="6" r="3"></circle>
                                            <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                            <line x1="6" y1="9" x2="6" y2="21"></line>
                                        </svg>
                                        <span>Cabang</span>
                                    </div>
                                </a>
                            </li>

                        <?php }
                        } elseif ($level == "store") {
                            ?>

                        <li class="menu <?php if ($page == "dashboard") {
                                                echo "active";
                                            } ?>">
                            <a href="<?php echo base_url('store') ?>" aria-expanded="<?php if ($page == "dashboard") {
                                                                                                echo "true";
                                                                                            } ?>" class="dropdown-toggle">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trending-up">
                                        <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                        <polyline points="17 6 23 6 23 12"></polyline>
                                    </svg>
                                    <span>Dashboard</span>
                                </div>
                            </a>
                        </li>

                        <li class="menu <?php if ($page == "games") {
                                                echo "active";
                                            } ?>">
                            <a href="<?php echo base_url('store/games') ?>" aria-expanded="<?php if ($page == "games") {
                                                                                                    echo "true";
                                                                                                } ?>" class="dropdown-toggle">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                    <span>Games</span>
                                </div>
                            </a>
                        </li>

                        <li class="menu <?php if ($page == "member") {
                                                echo "active";
                                            } ?>">
                            <a href="<?php echo base_url('store/member') ?>" aria-expanded="<?php if ($page == "member") {
                                                                                                    echo "true";
                                                                                                } ?>" class="dropdown-toggle">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <span>Member</span>
                                </div>
                            </a>
                        </li>

                    <?php

                    } ?>

                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">