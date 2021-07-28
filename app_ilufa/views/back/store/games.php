<?php $this->load->view('back/_/header'); ?>

<div class="layout-px-spacing">
    <div class="row layout-top-spacing" id="cancel-row">

        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">

                <div class="widget-header">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <h4>Style 1</h4>
                        </div>
                        <div class="col-md-4 col-12">
                            <form action="javascript:void(0);" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                <a class="btn btn-primary" href="<?php echo base_url('games') ?>" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                    </svg>
                                    Mainkan</a>
                            </form>

                            <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#registerModal">
                                Register
                            </button>

                            <!-- Modal -->
                            <div class="modal fade register-modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header" id="registerModalLabel">
                                            <h4 class="modal-title">Register</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="mt-0">
                                                <div class="form-group">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                    <input type="text" class="form-control mb-2" id="exampleInputUsername1" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                                        <circle cx="12" cy="12" r="4"></circle>
                                                        <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                    </svg>
                                                    <input type="email" class="form-control mb-2" id="exampleInputEmail2" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                                    </svg>
                                                    <input type="password" class="form-control mb-4" id="exampleInputPassword2" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Register</button>
                                            </form>

                                            <div class="division">
                                                <span>OR</span>
                                            </div>

                                            <div class="social">
                                                <a href="javascript:void(0);" class="btn social-fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                                    </svg> <span class="brand-name">Facebook</span></a>
                                                <a href="javascript:void(0);" class="btn social-github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                                                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                                                    </svg> <span class="brand-name">Github</span></a>
                                            </div>

                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <div class="forgot login-footer">
                                                <span>Already have <a href="javascript:void(0);">Login</a>?</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-responsive mb-4 mt-4">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Nomor Invoice</th>
                                <th>WA</th>
                                <th>Cabang</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($games as $g) {

                                echo "<tr>
                                <td>$g->id_lottery_games</td>
                                <td>$g->full_name</td>
                                <td>$g->invoice_number</td>
                                <td>$g->phone</td>
                                <td>$g->id_branch</td>
                                <td>$g->date_add</td>
                                <td>$g->status</td>
                                <td>
                                    <div class='btn-group'>
                                        <button type='button' class='btn btn-dark btn-sm'>Open</button>
                                        <button type='button' class='btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split' id='dropdownMenuReference1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' data-reference='parent'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'>
                                                <polyline points='6 9 12 15 18 9'></polyline>
                                            </svg>
                                        </button>
                                        <div class='dropdown-menu' aria-labelledby='dropdownMenuReference1'>
                                            <a class='dropdown-item' href='#'>Action</a>
                                            <a class='dropdown-item' href='#'>Another action</a>
                                            <a class='dropdown-item' href='#'>Something else here</a>
                                            <div class='dropdown-divider'></div>
                                            <a class='dropdown-item' href='#'>Separated link</a>
                                        </div>
                                    </div>
                                </td>
                                </tr>
                                ";
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('back/_/footer'); ?>