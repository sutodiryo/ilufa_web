<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="lufa 168" />
    <meta name="keyword" content="lufa 168" />

    <title>Ilufa 168 | <?php echo "Lowongan $detail_job->posisi"; ?></title>

    <link rel="icon" type="image/png" href="<?php echo GUEST ?>img/favicons.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo BACK ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BACK ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo BACK ?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>assets/css/forms/switches.css">

    <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>assets/css/components/custom-carousel.css" />
</head>

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

    <?php $this->session->set_userdata('referred_lowongan', current_url()); ?>

    <div class="main-container" id="container">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="container">

                    <div class="row layout-top-spacing">

                        <div id="top" class="col-lg-12">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 mb-3 p-0">
                                    <div id="style1" class="carousel slide style-custom-1" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item carousel-item-next carousel-item-left">
                                                <img class="d-block w-100 slide-image" src="<?php echo GUEST ?>upload/lowongan/pusat.jpg" alt="iLuFA Pusat">
                                                <div class="carousel-caption">
                                                    <span class="badge badge-warning">iLuFA Distribusindo<br>Membuka Lowongan</span>
                                                    <h3><?php echo $detail_job->posisi ?></h3>
                                                    <div class="media">
                                                        <img src="<?php echo BACK ?>assets/img/90x90.jpg" class="" alt="avatar">
                                                        <div class="media-body">
                                                            <h6 class="user-name"><?php echo $detail_job->kota ?></h6>
                                                            <p class="meta-time">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                                                </svg> <?php
                                                                        $ds = new DateTime($detail_job->date_start);
                                                                        $de = new DateTime($detail_job->date_end);
                                                                        echo "" . date_format($ds, "d M Y") . " - " . date_format($de, "d M Y") . "";
                                                                        ?>
                                                                <!-- Jan, 14 2020 -->
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
                            <div class="text-left">
                                <a>
                                    <h5>Form Pendaftaran<br><b><?php echo $detail_job->posisi ?></b></h5>
                                </a>
                            </div>
                            <a href="#pribadi" class="active nav-link">INFORMASI PRIBADI</a>
                            <a href="#pendidikan" class="nav-link">RIWAYAT PENDIDIKAN</a>
                            <a href="#pengalaman" class="nav-link">PENGALAMAN BEKERJA</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing">

                        <div id="pribadi" class="col-lg-12">
                            <div class="seperator-header text-center">
                                <h3 class="">INFORMASI PRIBADI</h3>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">

                                    <p for="nik">Nomor KTP (NIK)</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="nik" name="nik" aria-describedby="basic-addon3" placeholder="Masukkan 16 digit NIK">
                                    </div>

                                    <p for="full_name">Nama Lengkap (Sesuai KTP)</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="basic-addon3" placeholder="Nama Lengkap">
                                    </div>

                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <p for="birth_place">Tempat Lahir</p>
                                            <input type="text" class="form-control" id="birth_place" name="birth_place" aria-describedby="basic-addon3" placeholder="Tempat Lahir">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p for="birth_date">Tanggal Lahir</p>
                                            <input type="date" class="form-control" id="birth_date" name="birth_date" aria-describedby="basic-addon3">
                                        </div>
                                    </div>

                                    <p for="gender">Jenis Kelamin</p>
                                    <div class="form-group col-md-6">
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-success">
                                                <input type="radio" class="new-control-input" name="gender" id="gender" value="L" required>
                                                <span class="new-control-indicator"></span>Laki-laki
                                            </label>
                                        </div>
                                        <div class="n-chk">
                                            <label class="new-control new-radio radio-success">
                                                <input type="radio" class="new-control-input" name="gender" id="gender" value="P" required>
                                                <span class="new-control-indicator"></span>Perempuan
                                            </label>
                                        </div>
                                    </div>

                                    <p for="email">Email</p>
                                    <div class="input-group mb-4">
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="basic-addon3" placeholder="Alamat Email anda">
                                    </div>

                                    <p for="no_hp">Nomor Handphone (WA)</p>
                                    <div class="input-group mb-4">
                                        <input type="number" class="form-control" id="no_hp" name="no_hp" aria-describedby="basic-addon3" placeholder="Nomor Whatsapp anda">
                                    </div>

                                    <p for="image">Foto Terbaru</p>
                                    <div class="input-group mb-4">
                                        <input type="file" class="form-control" id="image" name="image" aria-describedby="basic-addon3">
                                    </div>

                                    <p for="expected_salary">Gaji Yang Diharapkan</p>
                                    <div class="input-group mb-4">
                                        <input type="number" class="form-control" id="expected_salary" name="expected_salary" aria-describedby="basic-addon3" placeholder="Gaji Yang Diharapkan">
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div id="fs2Placeholder" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                                            <h4>Alamat</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget-content widget-content-area">
                                    <div class="form-row mb-4">
                                        <div class="form-group col-md-6">
                                            <p for="id_location_province">Provinsi</p>
                                            <select class="placeholder js-states form-control" name="id_location_province" id="id_location_province">
                                                <option>Provinsi...</option>
                                                <?php
                                                foreach ($province as $pr) {
                                                    echo "<option value='$pr->id_location_province'>$pr->name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p for="id_location_district">Kota/Kabupaten</p>
                                            <select class="placeholder js-states form-control" name="id_location_district" id="id_location_district">
                                                <option>Kota/Kabupaten...</option>
                                                <?php
                                                foreach ($district as $di) {
                                                    echo "<option value='$di->id_location_district'>";

                                                    if ($di->tipe == 1) {
                                                        echo "Kabupaten ";
                                                    } else {
                                                        echo "Kota ";
                                                    }

                                                    echo "$di->name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p for="id_location_subdistrict">Kecamatan</p>
                                            <select class="placeholder js-states form-control" name="id_location_subdistrict" id="id_location_subdistrict">
                                                <option>Kecamatan...</option>
                                                <?php
                                                foreach ($district as $di) {
                                                    echo "<option value='$di->id_location_district'>";

                                                    if ($di->tipe == 1) {
                                                        echo "Kabupaten ";
                                                    } else {
                                                        echo "Kota ";
                                                    }

                                                    echo "$di->name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p for="id_location_village ">Desa/Kelurahan</p>
                                            <select class="placeholder js-states form-control" name="id_location_village " id="id_location_village ">
                                                <option>Desa/Kelurahan...</option>
                                                <?php
                                                foreach ($district as $di) {
                                                    echo "<option value='$di->id_location_district'>";

                                                    if ($di->tipe == 1) {
                                                        echo "Kabupaten ";
                                                    } else {
                                                        echo "Kota ";
                                                    }

                                                    echo "$di->name</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <p for="address">Alamat Lengkap</p>
                                        <div class="input-group mb-4">
                                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row layout-spacing">

                        <div id="pendidikan" class="col-lg-12">
                            <div class="seperator-header text-center">
                                <h3 class="">RIWAYAT PENDIDIKAN</h3>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area">

                                            <p for="last_education">Pendidikan Terakhir</p>
                                            <div class="input-group mb-4">
                                                <select class="form-control" name="last_education" id="last_education">
                                                    <option readonly>Pendidikan Terakhir</option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                    <option value="D1">D1</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D3">D3</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>

                                            <p for="department">Jurusan</p>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="department" name="department" aria-describedby="basic-addon3" placeholder="Jurusan">
                                            </div>

                                            <p for="school">Nama Sekolah/Universitas</p>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="school" name="school" aria-describedby="basic-addon3" placeholder="Nama Sekolah/Universitas">
                                            </div>

                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-6">
                                                    <p for="language_skills">Kemampuan Bahasa</p>
                                                    <!-- <input type="text" class="form-control" id="language_skills" name="language_skills" aria-describedby="basic-addon3" placeholder="Kemampuan Bahasa"> -->
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                            <input type="checkbox" class="new-control-input">
                                                            <span class="new-control-indicator"></span>Success
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                            <input type="checkbox" class="new-control-input">
                                                            <span class="new-control-indicator"></span>Success
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                            <input type="checkbox" class="new-control-input">
                                                            <span class="new-control-indicator"></span>Success
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <p for="skills">Keterampilan</p>
                                                    <!-- <input type="text" class="form-control" id="skills" name="skills" aria-describedby="basic-addon3" placeholder="Keterampilan"> -->
                                                    <!-- <div class="widget-content widget-content-area"> -->

                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                            <input type="checkbox" class="new-control-input">
                                                            <span class="new-control-indicator"></span>Success
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                            <input type="checkbox" class="new-control-input">
                                                            <span class="new-control-indicator"></span>Success
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-rounded checkbox-success">
                                                            <input type="checkbox" class="new-control-input">
                                                            <span class="new-control-indicator"></span>Success
                                                        </label>
                                                    </div>
                                                    <!-- </div> -->

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="pengalaman" class="col-lg-12">
                                    <div class="seperator-header text-center">
                                        <h3 class="">PENGALAMAN BEKERJA</h3>
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <div class="statbox widget box box-shadow">
                                        <div class="widget-content widget-content-area">
                                            <p for="position">Posisi/Jabatan</p>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="position" name="position[]" aria-describedby="basic-addon3" placeholder="Posisi/Jabatan">
                                            </div>
                                            <p for="company">Nama Perusahaan</p>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="company" name="company[]" aria-describedby="basic-addon3" placeholder="Nama Perusahaan">
                                            </div>
                                            <div class="form-row mb-4">
                                                <div class="form-group col-md-6">
                                                    <p for="date_start">Tanggal Masuk</p>
                                                    <input type="date" class="form-control" id="date_start" name="date_start[]" aria-describedby="basic-addon3">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <p for="date_end">Tanggal Keluar</p>
                                                    <input type="date" class="form-control" id="date_end" name="date_end[]" aria-describedby="basic-addon3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php for ($i = 0; $i < 3; $i++) { ?>

                                        <div class="form-group">
                                            <div class="input-group col-sm-8">
                                                <label class="col-sm-2">Nama </label>
                                                <input class="col-sm-4" type="text" name="nama[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group col-sm-8">
                                                <label class="col-sm-2">Alamat </label>
                                                <input class="col-sm-5" type="text" name="alamat[]" class="form-control">
                                            </div>
                                        </div>
                                        <br />
                                    <?php
                                    }
                                    ?>


                                </div>
                            </div>
                            <button class="btn btn-primary btn-block mb-4 mr-2">Daftar</button>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>
            <br>

            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © <?php echo date('Y') ?> <a target="_blank" href="https://ilufa.co.id">iLuFA 168</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <!-- <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p> -->
                </div>
            </div>
        </div>

    </div>

    <script src="<?php echo BACK ?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo BACK ?>bootstrap/js/popper.min.js"></script>
    <script src="<?php echo BACK ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo BACK ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo BACK ?>assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>

    <script src="<?php echo BACK ?>plugins/highlight/highlight.pack.js"></script>
    <script src="<?php echo BACK ?>assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo BACK ?>assets/js/scrollspyNav.js"></script>
    <script src="<?php echo BACK ?>plugins/select2/select2.min.js"></script>

    <script>
        $(".disabled-results").select2();
        $(".placeholder").select2({
            placeholder: "Make a Selection",
            allowClear: true
        });

        function formatState(state) {
            if (!state.id) {
                return state.text;
            }
            var baseClass = "flaticon-";
            var $state = $(
                '<span><i class="' + baseClass + state.element.value.toLowerCase() + '" /> ' + state.text + '</i> </span>'
            );
            return $state;
        };

        $(".templating").select2({
            templateSelection: formatState
        });
    </script>
</body>

</html>