<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="lufa 168" />
    <meta name="keyword" content="lufa 168" />

    <title>Ilufa 168 | Official Website</title>

    <link rel="icon" type="image/png" href="<?php echo GUEST ?>img/favicons.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo BACK ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo BACK ?>assets/css/plugins.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo BACK ?>assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>assets/css/forms/switches.css">

    <link rel="stylesheet" type="text/css" href="<?php echo BACK ?>plugins/select2/select2.min.css">

</head>

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

    <div class="main-container" id="container">

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="container">

                <div class="container">

                    <div id="navSection" data-spy="affix" class="nav  sidenav">
                        <div class="sidenav-content">
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
                                <!-- <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12 text-center">
                                            <h3></h3>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="widget-content widget-content-area">

                                    <label for="nik">Nomor KTP (NIK)</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="nik" name="nik" aria-describedby="basic-addon3" placeholder="Masukkan 16 digit NIK">
                                    </div>

                                    <label for="full_name">Nama Lengkap (Sesuai KTP)</label>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="basic-addon3" placeholder="Nama Lengkap">
                                    </div>

                                    <div class="col-12 row">
                                        <div class="col-sm-7 col-12 input-fields">
                                            <label for="birth_place">Tempat Lahir</label>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="birth_place" name="birth_place" aria-describedby="basic-addon3" placeholder="Tempat Lahir">
                                            </div>
                                        </div>
                                        <div class="col-sm-5 col-12 input-fields">
                                            <label for="birth_date">Tanggal Lahir</label>
                                            <div class="input-group mb-4">
                                                <input type="date" class="form-control" id="birth_date" name="birth_date" aria-describedby="basic-addon3">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <label for="birth_date">Tanggal Lahir</label>
                                    <div class="input-group mb-4">
                                        <input type="date" class="form-control" id="birth_date" name="birth_date" aria-describedby="basic-addon3">
                                    </div> -->

                                    <label for="gender">Jenis Kelain</label>
                                    <div class="input-group mb-4">
                                        <div class="col-sm-12 col-12 input-fields">
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-primary">
                                                    <input type="radio" class="new-control-input" name="gender" id="gender" value="L" required>
                                                    <span class="new-control-indicator"></span>Laki-laki
                                                </label>
                                            </div>
                                            <div class="n-chk">
                                                <label class="new-control new-radio radio-primary">
                                                    <input type="radio" class="new-control-input" name="gender" id="gender" value="P" required>
                                                    <span class="new-control-indicator"></span>Perempuan
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="email">Email</label>
                                    <div class="input-group mb-4">
                                        <input type="email" class="form-control" id="email" name="email" aria-describedby="basic-addon3" placeholder="Alamat Email anda">
                                    </div>

                                    <label for="no_hp">Nomor Handphone (WA)</label>
                                    <div class="input-group mb-4">
                                        <input type="number" class="form-control" id="no_hp" name="no_hp" aria-describedby="basic-addon3" placeholder="Nomor Whatsapp anda">
                                    </div>

                                    <label for="id_location_province">Provinsi</label>
                                    <div class="input-group mb-4">
                                        <select class="form-control disabled-results" name="id_location_province" id="id_location_province">
                                            <option disabled="disabled">Pilih provinsi anda</option>
                                            <option value="one">First</option>
                                            <option value="three">Third</option>
                                        </select>
                                    </div>


                                    <!-- 
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon5">@</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                                    </div>

                                    <div class="input-group mb-5">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon6">@example.com</span>
                                        </div>
                                    </div>

                                    <label for="basic-url">Your vanity URL</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon7">https://</span>
                                        </div>
                                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="example.com/users/">
                                    </div>

                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>

                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">With textarea</span>
                                        </div>
                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                    </div> -->
                                </div>

                            </div>
                        </div>

                        <!-- <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Simple Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>

                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                </svg></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification" aria-describedby="basic-addon1">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                                </svg></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Spinning Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin">
                                                    <line x1="12" y1="2" x2="12" y2="6"></line>
                                                    <line x1="12" y1="18" x2="12" y2="22"></line>
                                                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                                    <line x1="2" y1="12" x2="6" y2="12"></line>
                                                    <line x1="18" y1="12" x2="22" y2="12"></line>
                                                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                                </svg></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners" aria-describedby="basic-addon3">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners" aria-describedby="basic-addon4">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader spin">
                                                    <line x1="12" y1="2" x2="12" y2="6"></line>
                                                    <line x1="12" y1="18" x2="12" y2="22"></line>
                                                    <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
                                                    <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
                                                    <line x1="2" y1="12" x2="6" y2="12"></line>
                                                    <line x1="18" y1="12" x2="22" y2="12"></line>
                                                    <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
                                                    <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
                                                </svg></span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dropdown Icon</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                                </svg> </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown">
                                        <div class="input-group-append">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                                </svg> </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Checkboxes</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <div class="n-chk align-self-end">
                                                    <label class="new-control new-checkbox checkbox-danger" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                                        <input type="checkbox" class="new-control-input" checked>
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox" aria-describedby="basic-addon1">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <div class="n-chk align-self-end">
                                                    <label class="new-control new-checkbox checkbox-warning" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                                        <input type="checkbox" class="new-control-input" checked>
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Radios</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <div class="n-chk align-self-end">
                                                    <label class="new-control new-radio radio-info" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                                        <input type="radio" class="new-control-input" name="custom-radio-1" checked>
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Radio" aria-label="radio">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Radio" aria-label="Radio">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <div class="n-chk align-self-end">
                                                    <label class="new-control new-radio radio-success" style="height: 21px; margin-bottom: 0; margin-right: 0">
                                                        <input type="radio" class="new-control-input" name="custom-radio-1" checked>
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Switch</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <label class="switch s-primary mb-0">
                                                    <input type="checkbox" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <label class="switch s-danger mb-0">
                                                    <input type="checkbox" checked="">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->
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

                                            <label for="nik">Nomor KTP (NIK)</label>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="basic-addon3" placeholder="Masukkan 16 digit NIK">
                                            </div>

                                            <label for="full_name">Nama Lengkap (Sesuai KTP)</label>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="basic-addon3" placeholder="Nama Lengkap">
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
                                        <!-- <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Multiple inputs</h4>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="widget-content widget-content-area">

                                            <label for="nik">Nomor KTP (NIK)</label>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="nik" name="nik" aria-describedby="basic-addon3" placeholder="Masukkan 16 digit NIK">
                                            </div>

                                            <label for="full_name">Nama Lengkap (Sesuai KTP)</label>
                                            <div class="input-group mb-4">
                                                <input type="text" class="form-control" id="full_name" name="full_name" aria-describedby="basic-addon3" placeholder="Nama Lengkap">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Multiple addons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <div class="input-group-append">
                                            <span class="input-group-text">$</span>
                                            <span class="input-group-text">0.00</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="Input_group_action" class="col-lg-12">
                            <div class="seperator-header">
                                <h4 class="">Input Group with Action</h4>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Buttons with dropdowns</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Segmented buttons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <button type="button" class="btn btn-info">Action</button>
                                            <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                                        <div class="input-group-append">
                                            <button type="button" class="btn btn-outline-info">Action</button>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                                <div role="separator" class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Button addons</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" aria-label="">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">Button</button>
                                        </div>
                                    </div>

                                    <p class="">Left</p>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary" type="button">Button</button>
                                            <button class="btn btn-outline-primary" type="button">Button</button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="" aria-label="">
                                    </div>

                                    <p class="">Right</p>
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="button">Button</button>
                                            <button class="btn btn-outline-primary" type="button">Button</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div> -->

                    </div>

                </div>
            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p>
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
    <script src="<?php echo BACK ?>plugins/select2/custom-select2.js"></script>
</body>

</html>