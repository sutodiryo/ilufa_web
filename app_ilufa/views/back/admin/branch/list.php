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
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new_branch">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-pull-request">
                                            <circle cx="18" cy="18" r="3"></circle>
                                            <circle cx="6" cy="6" r="3"></circle>
                                            <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                            <line x1="6" y1="9" x2="6" y2="21"></line>
                                        </svg>
                                        Cabang Baru</a>
                                </form>

                                <!-- <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#modal_add_new_branch">
                                    Register
                                </button> -->
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive mb-4">
                        <table id="branch" class="table style-3  table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="checkbox-column text-center"> Kode </th>
                                    <th>Nama Cabang</th>
                                    <th>Kontak</th>
                                    <th>Lokasi</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($branch as $b) {
                                    $no++; ?>

                                    <tr>
                                        <td class="checkbox-column text-center"> <?php echo $no ?> </td>
                                        <td class="checkbox-column text-center user-name"> <?php echo $b->id_branch ?> </td>
                                        <td class="user-name"><?php echo $b->branch_name ?></td>
                                        <td><?php echo "$b->phone $b->email $b->instagram"; ?></td>
                                        <td><?php echo $b->city ?>
                                            <br>
                                            <textarea class="form-control"><?php echo $b->address ?></textarea>
                                        </td>
                                        <td class="text-center"><?php if ($b->status == 0) {
                                                                        echo "<span class='shadow-none badge badge-warning'>On Progress</span>";
                                                                    } elseif ($b->status == 1) {
                                                                        echo "<span class='shadow-none badge badge-primary'>Aktif</span>";
                                                                    } elseif ($b->status == 2) {
                                                                        echo "<span class='shadow-none badge badge-danger'>Tidak Aktif</span>";
                                                                    } ?>
                                        </td>
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



<!-- Modal -->
<div class="modal fade register-modal" id="modal_add_new_branch" tabindex="-1" role="dialog" aria-labelledby="modal_add_new_branch" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" id="modal_add_new_branch">
                <h4 class="modal-title">Tambah Cabang Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            <div class="modal-body">
                <form class="mt-0" method="POST" action="<?php echo base_url('admin/job/add/job') ?>">
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" id="id_branch " name="id_branch" placeholder="Kode Cabang">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" id="branch_name" name="branch_name" placeholder="Nama Cabang">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control mb-2" id="deskripsi" name="deskripsi" placeholder="Deskripsi Pekerjaan" rows="4"></textarea>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <select class="form-control" id="id_job_type" name="id_job_type">
                                <option disabled selected>Jenis Lowongan</option>
                                <?php foreach ($jenis as $jn) {
                                    echo "<option value='" . $jn->id_job_type . "'>iLuFA " . $jn->name . "</option>";
                                } ?>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-control" id="status" name="status">
                                <option disabled selected>Status Lowongan</option>
                                <option value="1">Dibuka</option>
                                <option value="0">Ditutup</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col">
                            <label for="date_start">Tanggal Mulai</label>
                            <input type="date" name="date_start" name="date_start" class="form-control">
                        </div>
                        <div class="col">
                            <label for="date_end">Tanggal Ditutup</label>
                            <input type="date" name="date_end" class="form-control" placeholder="Tanggal Ditutup">
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control form-control-sm basic" id="basic" name="lokasi">
                            <option disabled selected>Pilih Lokasi Lowongan</option>
                            <?php foreach ($cabang as $cb) {
                                echo "<option value='" . $cb->id_branch . "'>iLuFA " . $cb->branch_name . "</option>";
                            } ?>

                        </select>
                        <!-- <select type="t" class="form-control mb-2" id="phone" name="phone" placeholder="Nomor Handphone(WA)"> -->
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Simpan Lowongan</button>
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

<?php $this->load->view('back/_/footer'); ?>