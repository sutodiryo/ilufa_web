<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>iLuFA Form | Registrasi Suplier</title>
    <link rel="icon" type="image/png" href="<?php echo GUEST ?>img/favicons.png">
    <!-- <link rel="icon" type="image/x-icon" href="<?php echo BACK ?>assets/img/favicon.ico" /> -->
    <link href="<?php echo BACK ?>https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

    <link href="<?php echo BACK ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BACK ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BACK ?>assets/css/pages/privacy/privacy.css" rel="stylesheet" type="text/css" />
</head>

<body>


    <div id="headerWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center mb-5">
                    <a href="<?php echo base_url() ?>" class="">
                        <!-- <img src="<?php echo GUEST ?>img/logo_menu.png" class="img-fluid" alt="logo"> -->
                        <img src="<?php echo GUEST ?>img/logo_ilufa.png" class="img-fluid" width="300" alt="logo">
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2 class="main-heading">Form Registrasi Suplier iLuFA 168</h2>
                </div>
            </div>
        </div>
    </div>

    <div id="privacyWrapper" class="">
        <div class="privacy-container">
            <div class="privacyContent">

                <!-- <div class="d-flex justify-content-between privacy-head">
                    <div class="privacyHeader">
                        <h1>Form Registrasi Suplier iLuFA 168<</h1>
                        <p>Updated Sep 15, 2019</p>
                    </div>

                    <div class="get-privacy-terms align-self-center">
                        <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer">
                                <polyline points="6 9 6 2 18 2 18 9"></polyline>
                                <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                                <rect x="6" y="14" width="12" height="8"></rect>
                            </svg> Print</button>
                    </div>
                </div> -->

                <div class="privacy-content-container">

                    <!-- <form class="mt-0" method="POST" action="<?php echo base_url('admin/master/add/supplier') ?>"> -->
                    <form class="mt-0" method="POST" action="#">
                        <h5 class="modal-heading mb-4 mt-2">Data Supplier</h5>
                        <div class="form-group">
                            <input type="text" class="form-control mb-2" id="name " name="name" placeholder="Nama Supplier">
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control mb-2" id="address" name="address" placeholder="Alamat Lengkap Supplier" rows="4"></textarea>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="official_phone" name="official_phone" placeholder="Nomor Telepon 1">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="official_phone" name="official_phone" placeholder="Nomor Telepon 2">
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="fax" name="fax" placeholder="Nomor Fax">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="email" class="form-control mb-2" id="official_email" name="official_email" placeholder="Email Supplier">
                                </div>
                            </div>
                        </div>

                        <h5 class="modal-heading mb-4 mt-2">Data Pemilik</h5>

                        <div class="form-group">
                            <input type="text" class="form-control mb-2" id="owner_name " name="owner_name" placeholder="Nama Pemilik">
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="owner_id" name="owner_id" placeholder="NIK Pemilik">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" class="form-control mb-2" id="owner_id_card" name="owner_id_card" placeholder="Email Supplier">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control mb-2" id="owner_address" name="owner_address" placeholder="Alamat Lengkap Pemilik" rows="4"></textarea>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="owner_city" name="owner_city" placeholder="Kota">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="owner_postal_code" name="owner_postal_code" placeholder="Kode Pos">
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="owner_phone" name="owner_phone" placeholder="Nomor Telepon Pemilik">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="owner_fax" name="owner_fax" placeholder="Nomor Fax Pemilik">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control mb-2" id="owner_email" name="owner_email" placeholder="Email Pemilik">
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="file" class="form-control mb-2" id="owner_npwp" name="owner_npwp" placeholder="Scan NPWP Pemilik">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="owner_npwp_name" name="owner_npwp_name" placeholder="Nama NPWP Pemilik">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control mb-2" id="bank" name="bank" placeholder="Bank Pemilik">
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="bank_account" name="bank_account" placeholder="Nomor Rekeing Bank">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="bank_account_name" name="bank_account_name" placeholder="Nama Rekeing Bank">
                                </div>
                            </div>
                        </div>


                        <h5 class="modal-heading mb-4 mt-2">Company Profile</h5>

                        <div class="form-group">
                            <input type="text" class="form-control mb-2" id="company_name" name="company_name" placeholder="Nama Perusahaan">
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="company_field" name="company_field" placeholder="Bergerak Dibidang">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <select class="form-control" name="company_established" id="company_established">
                                        <?php
                                        for ($year = (int) date('Y'); 1800 <= $year; $year--) : ?>
                                            <option value="<?= $year; ?>"><?= $year; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <!-- <input type="text" class="form-control mb-2" id="company_established" name="company_established" placeholder="Berdiri Sejak"> -->
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="company_headquarter" name="company_headquarter" placeholder="Kantor Pusat">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="company_pic" name="company_pic" placeholder="Penanggung Jawab">
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="company_director" name="company_director" placeholder="Nama Direktur">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="number" class="form-control mb-2" id="company_phone" name="company_phone" placeholder="Nomor Telepon">
                                </div>
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <div class="col">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-2" id="company_website" name="company_website" placeholder="Alamat Website">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <input type="email" class="form-control mb-2" id="company_email" name="company_email" placeholder="Alamat Email">
                                </div>
                            </div>
                        </div>



                        <!-- <div class="form-group">
                        <select class="form-control form-control-sm basic" id="basic" name="lokasi">
                            <option disabled selected>Pilih Lokasi Lowongan</option>
                            <?php foreach ($cabang as $cb) {
                                echo "<option value='" . $cb->id_branch . "'>iLuFA " . $cb->branch_name . "</option>";
                            } ?>

                        </select>
                    </div> -->
                        <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Kirim Data</button>
                    </form>


                    <!-- <section>
                        <h5>Please read our policy carefully</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </section> -->
                    <!-- <h5 class="policy-info-ques">What personal data we collect and why we collect it</h5> -->
                    <!-- <section>

                        <h5>Media</h5>

                        <p>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>
                    </section>
                    <section>

                        <h5> Cookies </h5>

                        <p> If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>

                        <p> If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>

                        <p> When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>

                        <p> If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>

                    </section>
                    <section>
                        <h5> Embedded content from other websites.</h5>

                        <p> Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>

                        <p> These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>
                    </section> -->

                </div>

            </div>
        </div>
    </div>

    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">Up</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                            <p class="mt-md-0 mt-4 mb-0"><?php echo date('Y') ?> &copy; <a target="_blank" href="https://ilufa.co.id">iLuFA 168</a>.</p>
                        </div>
                        <div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
                            <p class="mb-0">iLuFA Pusat, Jalan Siwalan 45, Kerten, Laweyan, Surakarta</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo BACK ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo BACK ?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo BACK ?>bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).on('click', '.arrow', function(event) {
            event.preventDefault();
            var body = $("html, body");
            body.stop().animate({
                scrollTop: 0
            }, 500, 'swing');
        });
    </script>

</body>

</html>