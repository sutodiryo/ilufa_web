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
                        <table id="supplier" class="table style-3  table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Nama Supplier</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Kontak</th>
                                    <th>Owner</th>
                                    <th class="text-center">Attachment</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                foreach ($supplier as $s) {
                                    $no++; ?>

                                    <tr>
                                        <td class="text-center"> <?php echo $no ?> </td>
                                        <td class="user-name"> <?php echo $s->name ?> </td>
                                        <td><span data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php echo $s->address ?>"><?php echo $s->city ?></span>
                                            <!-- <textarea class="form-control" readonly rows="3">
                                                <?php echo $s->address ?>
                                            </textarea> -->
                                        </td>
                                        <td class="text-center">
                                            <a href="https://api.whatsapp.com/send/?phone=62<?php echo $s->owner_phone ?>" target="_blank" class="badge badge-pills outline-badge-primary"><i class="fab fa-whatsapp"></i> <?php echo $s->owner_phone ?></a>
                                        </td>
                                        <td><?php echo $s->owner_name ?></td>
                                        <td class="text-center">
                                            <a href="<?php echo "" . base_url('public/back/upload/supplier/') . "$s->attachment"; ?>" target="_blank" class="badge badge-pills outline-badge-primary"><i class="fa fa-download"></i> Download</a>
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <!-- <button type="button" class="btn btn-dark btn-sm">Open</button> -->
                                                <button type="button" class="btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference5" style="will-change: transform;">
                                                    <a class="dropdown-item" href="#">Detail</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="<?php echo "" . base_url('admin/master/del/supplier/') . "$s->id_supplier "; ?>">Hapus</a>
                                                </div>
                                            </div>
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
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form class="mt-0" method="POST" action="<?php echo base_url('admin/master/add/supplier') ?>">

                    <div class="form-group">
                        <label for="name">Nama Supplier</label>
                        <input type="text" class="form-control mb-2" id="name " name="name" placeholder="Nama Supplier" value="<?php echo set_value('name'); ?>" required>
                        <?php echo form_error('name', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                    </div>

                    <div class="form-group">
                        <label for="address">Alamat Lengkap Supplier</label>
                        <textarea type="text" class="form-control mb-2" id="address" name="address" placeholder="Alamat Lengkap Supplier" rows="4" required><?php echo set_value('address'); ?></textarea>
                        <?php echo form_error('address', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="city">Kota/Kabupaten</label>
                                <input type="text" class="form-control mb-2" id="city" name="city" placeholder="Kota/Kabupaten" value="<?php echo set_value('city'); ?>" required>
                                <?php echo form_error('city', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="postal_code">Kode POS</label>
                                <input type="number" class="form-control mb-2" id="postal_code" name="postal_code" placeholder="Kode Pos" value="<?php echo set_value('postal_code'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="official_phone">Nomor Telepon 1</label>
                                <input type="text" class="form-control mb-2" id="official_phone" name="official_phone" placeholder="Nomor Telepon 1" value="<?php echo set_value('official_phone'); ?>" required>
                                <?php echo form_error('official_phone', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="official_phone_2">Nomor Telepon 2</label>
                                <input type="text" class="form-control mb-2" id="official_phone_2" name="official_phone_2" placeholder="Nomor Telepon 2" value="<?php echo set_value('official_phone'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="fax">Nomor Fax</label>
                                <input type="number" class="form-control mb-2" id="fax" name="fax" placeholder="Nomor Fax" value="<?php echo set_value('fax'); ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="official_email">Email Supplier</label>
                                <input type="email" class="form-control mb-2" id="official_email" name="official_email" placeholder="Email Supplier" value="<?php echo set_value('official_email'); ?>" required>
                                <?php echo form_error('official_email', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="siup">Nomor SIUP</label>
                        <input type="text" class="form-control mb-2" id="siup" name="siup" value="<?php echo set_value('siup'); ?>">
                        <?php echo form_error('siup', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="npwp">Nomor NPWP</label>
                                <input type="text" class="form-control mb-2" id="npwp" name="npwp" value="<?php echo set_value('npwp'); ?>">
                                <?php echo form_error('npwp', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="npwp_name">Nama NPWP</label>
                                <input type="text" class="form-control mb-2" id="npwp_name" name="npwp_name" placeholder="Nama NPWP Pemilik" value="<?php echo set_value('npwp_name'); ?>">
                            </div>
                        </div>
                    </div>

                    <h5 class="modal-heading mb-4 mt-2">Data Pemilik</h5>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_name">Nama Pemilik</label>
                                <input type="text" class="form-control mb-2" id="owner_name " name="owner_name" placeholder="Nama Pemilik" value="<?php echo set_value('owner_name'); ?>" required>
                                <?php echo form_error('owner_name', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_id">NIK Pemilik</label>
                                <input type="number" class="form-control mb-2" id="owner_id" name="owner_id" placeholder="NIK Pemilik" value="<?php echo set_value('owner_id'); ?>" required>
                                <?php echo form_error('owner_id', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                        <!-- <div class="col">
                                <div class="form-group">
                                    <label for="owner_id_card">Foto KTP</label>
                                    <input type="file" class="form-control mb-2" id="owner_id_card" name="owner_id_card" placeholder="Foto KTP" value="<?php echo set_value('owner_id_card'); ?>" required>
                                </div>
                            </div> -->
                    </div>

                    <div class="form-group">
                        <label for="owner_address">Alamat Lengkap Pemilik</label>
                        <textarea type="text" class="form-control mb-2" id="owner_address" name="owner_address" placeholder="Alamat Lengkap Pemilik" rows="4"><?php echo set_value('owner_address'); ?></textarea>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_city">Kota/Kabupaten</label>
                                <input type="text" class="form-control mb-2" id="owner_city" name="owner_city" placeholder="Kota" value="<?php echo set_value('owner_city'); ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_postal_code">Kode Pos</label>
                                <input type="number" class="form-control mb-2" id="owner_postal_code" name="owner_postal_code" placeholder="Kode Pos" value="<?php echo set_value('owner_postal_code'); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_phone">Nomor Telepon Pemilik</label>
                                <input type="text" class="form-control mb-2" id="owner_phone" name="owner_phone" placeholder="Nomor Telepon Pemilik" value="<?php echo set_value('owner_phone'); ?>" required>
                                <?php echo form_error('owner_phone', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_fax">Nomor Fax Pemilik</label>
                                <input type="number" class="form-control mb-2" id="owner_fax" name="owner_fax" placeholder="Nomor Fax Pemilik" value="<?php echo set_value('owner_fax'); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_email">Alamat Email Pemilik</label>
                                <input type="email" class="form-control mb-2" id="owner_email" name="owner_email" placeholder="Email Pemilik" value="<?php echo set_value('owner_email'); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_npwp">Nomor NPWP Pemilik</label>
                                <input type="text" class="form-control mb-2" id="owner_npwp" name="owner_npwp" value="<?php echo set_value('owner_npwp'); ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="owner_npwp_name">Nama NPWP Pemilik</label>
                                <input type="text" class="form-control mb-2" id="owner_npwp_name" name="owner_npwp_name" placeholder="Nama NPWP Pemilik" value="<?php echo set_value('owner_npwp_name'); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bank">Bank</label>
                        <input type="text" class="form-control mb-2" id="bank" name="bank" placeholder="Bank Pemilik" value="<?php echo set_value('bank'); ?>" required>
                        <?php echo form_error('bank', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="bank_account">Nomor Rekeing Bank</label>
                                <input type="number" class="form-control mb-2" id="bank_account" name="bank_account" placeholder="Nomor Rekeing Bank" value="<?php echo set_value('bank_account'); ?>" required>
                                <?php echo form_error('bank_account', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="bank_account_name">Nama Rekeing Bank</label>
                                <input type="text" class="form-control mb-2" id="bank_account_name" name="bank_account_name" placeholder="Nama Rekeing Bank" value="<?php echo set_value('bank_account_name'); ?>" required>
                                <?php echo form_error('bank_account_name', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                            </div>
                        </div>
                    </div>

                    <h5 class="modal-heading mb-4 mt-2">Company Profile</h5>

                    <div class="form-group">
                        <label for="company_name">Nama Perusahaan</label>
                        <input type="text" class="form-control mb-2" id="company_name" name="company_name" placeholder="Nama Perusahaan" value="<?php echo set_value('company_name'); ?>" required>
                        <?php echo form_error('company_name', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="company_field">Bergerak Dibidang</label>
                                <input type="text" class="form-control mb-2" id="company_field" name="company_field" placeholder="Bergerak Dibidang" value="<?php echo set_value('company_field'); ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="company_established">Berdiri Sejak</label>
                                <select class="form-control" name="company_established" id="company_established" value="<?php echo set_value('company_established'); ?>" required>
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
                                <label for="company_headquarter">Kantor Pusat</label>
                                <input type="text" class="form-control mb-2" id="company_headquarter" name="company_headquarter" placeholder="Kantor Pusat" value="<?php echo set_value('company_headquarter'); ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="company_pic">Penanggung Jawab</label>
                                <?php echo form_error('company_pic', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                                <input type="text" class="form-control mb-2" id="company_pic" name="company_pic" placeholder="Penanggung Jawab" value="<?php echo set_value('company_pic'); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="company_director">Nama Direktur</label>
                                <input type="text" class="form-control mb-2" id="company_director" name="company_director" placeholder="Nama Direktur" value="<?php echo set_value('company_director'); ?>" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="company_phone">Nomor Telepon Perusahaan</label>
                                <input type="text" class="form-control mb-2" id="company_phone" name="company_phone" placeholder="Nomor Telepon" value="<?php echo set_value('company_phone'); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row mb-4">
                        <div class="col">
                            <div class="form-group">
                                <label for="company_website">Alamat Website</label>
                                <input type="text" class="form-control mb-2" id="company_website" name="company_website" placeholder="Alamat Website" value="<?php echo set_value('company_website'); ?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="company_email">Alamat Email</label>
                                <input type="email" class="form-control mb-2" id="company_email" name="company_email" placeholder="Alamat Email" value="<?php echo set_value('company_email'); ?>">
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="attachment">File Lampiran</label>
                        <input type="file" class="form-control mb-2" id="attachment" name="attachment" value="<?php echo set_value('owner_id_card'); ?>" required>
                        <div class="invalid-feedback" style="display: block;"><?php echo $this->session->flashdata('report'); ?></div>
                        <small id="text_attachment" class="form-text text-muted">*Semua Lampiran Dijadikan satu file (.zip atau .rar)</small>
                        <?php echo form_error('attachment', '<div class="invalid-feedback" style="display: block;">', '</div>') ?>
                    </div> -->

                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-block">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('back/_/footer'); ?>