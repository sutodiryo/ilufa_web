<?php $this->load->view('back/_/header'); ?>

<div class="layout-px-spacing">

    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">

                    <div class="widget-header">
                        <div class="row">
                            <div class="col-md-8 col-12">
                            </div>
                            <div class="col-md-4 col-12">

                                <form action="javascript:void(0);" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new_supplier">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-git-pull-request">
                                            <circle cx="18" cy="18" r="3"></circle>
                                            <circle cx="6" cy="6" r="3"></circle>
                                            <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                            <line x1="6" y1="9" x2="6" y2="21"></line>
                                        </svg>
                                        Supplier Baru</a>
                                </form>
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
                                    <th>Nama Supplier</th>
                                    <th>Kontak</th>
                                    <th>Lokasi</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($supplier as $s) {
                                    $no++; ?>

                                    <tr>
                                        <td class="checkbox-column text-center"> <?php echo $no ?> </td>
                                        <td class="checkbox-column text-center user-name"> <?php echo $s->name ?> </td>
                                        <td class="user-name"><?php echo $s->owner_name ?></td>
                                        <td><?php echo "$s->address"; ?></td>
                                        <td><?php echo $s->official_phone ?>
                                            <br>
                                            <textarea class="form-control"><?php echo $s->address ?></textarea>
                                        </td>
                                        <td class="text-center"><?php if ($s->status == 0) {
                                                                        echo "<span class='shadow-none badge badge-warning'>On Progress</span>";
                                                                    } elseif ($s->status == 1) {
                                                                        echo "<span class='shadow-none badge badge-primary'>Aktif</span>";
                                                                    } elseif ($s->status == 2) {
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
<div class="modal fade register-modal" id="modal_add_new_supplier" tabindex="-1" role="dialog" aria-labelledby="modal_add_new_supplier" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" id="modal_add_new_supplier">
                <h4 class="modal-title">Tambah Supplier Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg></button>
            </div>
            <div class="modal-body">
                <form class="mt-0" method="POST" action="<?php echo base_url('admin/master/add/supplier') ?>">
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
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Simpan Data</button>
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