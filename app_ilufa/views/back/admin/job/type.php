<?php $this->load->view('back/_/header'); ?>

<div class="layout-px-spacing">

    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <!-- <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Style 3</h4>
                        </div>
                    </div>
                </div> -->
                <div class="widget-content widget-content-area">


                    <div class="widget-header">
                        <div class="row">
                            <div class="col-md-8 col-12">
                                <!-- <h5>Style 1</h5> -->
                            </div>
                            <div class="col-md-4 col-12">

                                <form action="javascript:void(0);" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                    <!-- <a class="btn btn-primary" href="<?php echo base_url('games') ?>" target="_blank"> -->
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new_type">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        Jenis Baru</a>
                                </form>

                                <!-- <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#modal_add_new_type">
                                    Register
                                </button> -->

                                <!-- Modal -->
                                <div class="modal fade register-modal" id="modal_add_new_type" tabindex="-1" role="dialog" aria-labelledby="modal_add_new_type" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header" id="modal_add_new_type">
                                                <h4 class="modal-title">Tambah Jenis Lowongan Baru</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                    </svg></button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="mt-0" method="POST" action="<?php echo base_url('admin/job/add/job_type') ?>">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control mb-2" id="name" name="name" placeholder="Nama Jenis Pekerjaan">
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control form-control-sm" id="status" name="status">
                                                            <option disabled selected>Pilih Status Keaktifan</option>
                                                            <option value="0">Tidak Aktif</option>
                                                            <option value="1">Aktif</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Simpan </button>
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
                    <div class="table-responsive mb-4">
                        <table id="job_type" class="table style-3  table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th>Nama Jenis</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jenis as $j) { ?>

                                    <tr>
                                        <td class="checkbox-column text-center"> <?php echo "$j->id_job_type "; ?> </td>
                                        <td class="user-name"><?php echo $j->name ?></td>
                                        <td class="text-center"><span class="shadow-none badge badge-primary"><?php if ($j->status == 0) {
                                                                                                                        echo "Tidak Aktif";
                                                                                                                    } elseif ($j->status == 1) {
                                                                                                                        echo "Aktif";
                                                                                                                    }
                                                                                                                    ?></span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->load->view('back/_/footer'); ?>