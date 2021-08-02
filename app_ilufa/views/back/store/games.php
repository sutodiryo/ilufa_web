<?php $this->load->view('back/_/header'); ?>

<div class="layout-px-spacing">
    
    <div class="row layout-top-spacing" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">

                <div class="widget-header">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <h5>Style 1</h5>
                        </div>
                        <div class="col-md-4 col-12">

                            <form action="javascript:void(0);" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                <!-- <a class="btn btn-primary" href="<?php echo base_url('games') ?>" target="_blank"> -->
                                <a class="btn btn-success" data-toggle="modal" data-target="#modal_main_sekarang">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                    </svg>
                                    Mainkan</a>
                            </form>

                            <!-- <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#modal_main_sekarang">
                                Register
                            </button> -->

                            <!-- Modal -->
                            <div class="modal fade register-modal" id="modal_main_sekarang" tabindex="-1" role="dialog" aria-labelledby="modal_main_sekarang" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header" id="modal_main_sekarang">
                                            <h4 class="modal-title">Isi data member dulu</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                                </svg></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="mt-0">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2" id="full_name" name="full_name" placeholder="Nama Lengkap">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-2" id="invoice_number" name="invoice_number" placeholder="Nomor Invoice">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-2" id="phone" name="phone" placeholder="Nomor Handphone(WA)">
                                                </div>
                                                <input type="hidden" class="form-control mb-4" name="id_lottery_games">
                                                <input type="hidden" class="form-control mb-4" name="id_branch">
                                                <button type="submit" class="btn btn-success mt-2 mb-2 btn-block">Main Sekarang</button>
                                            </form>

                                        </div>
                                        <!-- <div class="modal-footer justify-content-center">
                                            <div class="forgot login-footer">
                                                <span>Already have <a href="javascript:void(0);">Login</a>?</span>
                                            </div>
                                        </div> -->
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