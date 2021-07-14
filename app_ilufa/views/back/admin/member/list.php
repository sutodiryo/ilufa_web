<?php $this->load->view('admin/_/header'); ?>

<?php $this->session->set_userdata('ref_member', current_url()); ?>

<!-- Header -->
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 d-inline-block mb-0"><?php echo $title ?></h6>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a data-toggle="modal" href="#modal_add_member" class="btn btn-sm btn-neutral" title="Tambah Member Baru"><i class="fa fa-plus"></i> Tambah Member</a>
                </div>
            </div>

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <a href="<?php echo base_url('admin/member/all') ?>">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Semua</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $all; ?></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="<?php echo base_url('admin/member/executive') ?>">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Stokies</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $stokies; ?></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="<?php echo base_url('admin/member/priority') ?>">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Priority</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $priority; ?></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3 col-md-6">
                    <a href="<?php echo base_url('admin/member/business') ?>">
                        <div class="card card-stats">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Others</h5>
                                        <span class="h2 font-weight-bold mb-0"><?php echo $others; ?></span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-gradient-yellow text-white rounded-circle shadow">
                                            <i class="fa fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">

                <div class="table-responsive py-4">
                    <table class="table table-flush" id="datatable-buttons">
                        <thead class="thead-light">
                            <tr>
                                <th width="1%">No</th>
                                <th width="25%">Nama</th>
                                <th width="15%">Kontak</th>
                                <th width="10%">Level</th>
                                <th width="10%">No Rekening</th>
                                <th width="29%">Penjualan</th>
                                <th width="10%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 0;
                            foreach ($member as $m) {
                                $no++;

                                date_default_timezone_set('UTC');
                                $tgl_reg  = new DateTime($m->tgl_reg);

                                echo "<tr>
                                <td>$no</td>
                                <td>
                                    <a>" . substr($m->nama, 0, 30) . "</a>
                                    <br>
                                    <span style='font-size:80%;'>Kota/Kabupaten : <font color='red'>$m->kota2</font></span>
                                    <br>
                                    <textarea class='form-control' cols='30' rows='2' style='font-size:80%;' readonly>$m->alamat</textarea>
                                </td>
                                <td><a href='https://wa.me/62$m->no_hp' class='btn btn-sm btn-slack btn-icon'><i class='fab fa-whatsapp'></i> 0$m->no_hp</a></td>";

                                
                                if ($m->level == 0) {
                                    $col = "danger";
                                } else if ($m->level == 1) {
                                    $col = "warning";
                                } else if ($m->level == 2) {
                                    $col = "yellow";
                                } else if ($m->level == 3) {
                                    $col = "info";
                                } else if ($m->level == 4) {
                                    $col = "success";
                                } else {
                                    $col = "default";
                                }

                                echo "  <td>
                                            <a class='badge badge-dot mr-4'><i class='bg-$col'></i><span class='status'>$m->nama_level</span></a>
                                            <br>
                                            <a class='badge badge-dot mr-4' data-toggle='modal' href='#modal_downline_$m->id_member'><i class='bg-$col'></i><span class='status'>$m->downline Mitra</span></a>
                                        </td>";

                                //                     <button type='button' class='btn btn-slack btn-icon'>
                                //     <span class='btn-inner--icon'><i class='fab fa-slack'></i></span>
                                //     <span class='btn-inner--text'>Slack</span>
                                //   </button>
                                // ALAMAT
                                if (empty($m->no_rekening)) {
                                    echo "<td>Belum diisi</td>";
                                } else {
                                    echo "<td><span style='font-size:80%;'>$m->bank<br>$m->no_rekening<br>$m->nama_rekening</span></td>";
                                }
                                echo "<td></td>";

                                //AKSI
                                echo "  <td class='text-center'>
                                            <ul class='navbar-nav align-items-center ml-auto ml-md-0'>
                                                <li class='nav-item dropdown'>
                                                    <button title='Update Status' data-toggle='dropdown' class='btn btn-icon btn-sm btn-default'><span class='btn-inner--icon'><i class='ni ni-settings-gear-65'></i></span></button>
                                                        <div class='dropdown-menu dropdown-menu-right'>
                                                            <a href='" . base_url('admin/member_detail/') . "$m->id_member' class='dropdown-item text-info'><i class='fa fa-info-circle'></i><span>Detail</span></a>
                                                            <a href='" . base_url('admin/act/password_member/') . "$m->id_member' onclick=\"return confirm('Anda yakin ingin mereset password akun ini?')\" class='dropdown-item text-warning'><i class='fa fa-sync'></i><span>Reset Password</span></a>
                                                            <a href='javascript:void(0)' onclick=\"edit_member('$m->id_member')\"  class='dropdown-item text-green'><i class='fa fa-edit'></i><span>Edit</span></a>
                                                            <div class='dropdown-divider'></div>
                                                            <a href='" . base_url('admin/del/member/') . "$m->id_member/member' onclick=\"return confirm('Anda yakin ingin menghapus data ini?')\" class='dropdown-item text-red'><i class='fa fa-trash'></i><span>Hapus</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                        </td>";

                                echo "</tr>";
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12">
                <div class="copyright text-center text-lg-center text-muted">
                    &copy; <?php echo date('Y'); ?> <a href="https://najahnet.id" class="font-weight-bold ml-1" target="_blank">Najah Network</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<?php
foreach ($member as $mm) {
    ?>
    <div class="modal fade" id="modal_downline_<?php echo $mm->id_member ?>" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><small>Daftar Mitra</small> <?php echo $mm->nama ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th width="10%">N0</th>
                                <th width="50%">Nama</th>
                                <th width="30%">Level</th>
                                <th width="10%" class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $q = $this->db->query(" SELECT  id_member,nama,no_hp,
                                                                (SELECT nama_level FROM member_level WHERE id_member_level=member.level) as lvl
                                                        FROM member WHERE id_upline='$mm->id_member' ORDER BY nama ASC")->result();
                                $no = 0;
                                foreach ($q as $q) {
                                    $no++;
                                    echo "  <tr>
                                                <td>$no</td>
                                                <td class='table-user'>
                                                    <b>" . substr($q->nama, 0, 30) . "</b>
                                                    <br>(0$q->no_hp)
                                                </td>
                                                <td>
                                                    <span class='text-muted'>$q->lvl</span>
                                                </td>
                                                <td class='table-actions'>
                                                    <a href='" . base_url('admin/#') . "' onclick=\"return confirm('Anda yakin ingin menghapus data ini dari mitra $q->nama?')\" class='table-action table-action-delete' data-toggle='tooltip' data-original-title='Hapus mitra'>
                                                        <i class='fas fa-user-times'></i>
                                                    </a>
                                                </td>
                                            </tr>";
                                } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="modal fade" id="modal_add_member" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Tambah Member Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="<?php echo base_url('admin/add/member'); ?>" method="POST">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label" for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama lengkap sesuai KTP" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="level_add">Level</label>
                                <select class="form-control" id="level_add" name="level">
                                    <?php
                                    foreach ($level as $lv) {
                                        echo "<option value='$lv->id_member_level'>$lv->nama_level</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php date_default_timezone_set('Asia/Jakarta'); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="id_upline_add">Upline</label>
                                <select name="id_upline" id="id_upline_add" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id_upline_add="1" tabindex="-1" aria-hidden="true" required>
                                    <option value="0">Tidak ada</option>
                                    <?php
                                    $no = 0;
                                    foreach ($sel_member as $sm) {
                                        $no++;
                                        echo "<option data-select2-id_upline_add='$no' value='$sm->id_member'>$sm->nama - $sm->no_hp</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_hp">No HP (WA)</label>
                                <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="No HP aktif" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="id_location_add">Kota/Kabupaten</label>
                                <select name="id_location" id="id_location_add" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id_location_add="1" tabindex="-1" aria-hidden="true" required>
                                    <?php
                                    $no = 0;
                                    foreach ($lokasi as $lk) {
                                        $no++;
                                        echo "<option data-select2-id_location_add='$no' value='$lk->id_location'>$lk->location_name</option>";
                                    }
                                    ?>
                                </select>
                                <!-- 
                                <select name="kota" id="select_location" class="form-control" style="width: 100%;" required>
                                    <option value="">-- Pilih Kota --</option>
                                </select>
                                -->
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="alamat">Alamat Lengkap</label>
                                <textarea name="alamat" class="form-control" id="alamat" rows="3" required placeholder="Alamat lengkap"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_member" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="<?php echo base_url('admin/act/update_member/0'); ?>" method="POST">
                <input type="hidden" name="id_member">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label class="form-control-label" for="nama">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama lengkap sesuai KTP" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-control-label" for="level">Level</label>
                                <select class="form-control" id="level" name="level">
                                    <?php
                                    foreach ($level as $lv) {
                                        echo "<option value='$lv->id_member_level'>$lv->nama_level</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php date_default_timezone_set('Asia/Jakarta'); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="id_upline">Upline</label>
                                <select name="id_upline" id="id_upline" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id_upline="1" tabindex="-1" aria-hidden="true" required>
                                    <option value="0">Tidak ada</option>
                                    <?php
                                    $no = 0;
                                    foreach ($sel_member as $sm) {
                                        $no++;
                                        echo "<option data-select2-id_upline='$no' value='$sm->id_member'>$sm->nama - $sm->no_hp</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_hp">No HP (WA)</label>
                                <input type="number" name="no_hp" class="form-control" id="no_hp" placeholder="No HP aktif" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="kota">Kota/Kabupaten</label>
                                <select name="kota" id="kota" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id_admin="1" tabindex="-1" aria-hidden="true" required>
                                    <?php
                                    $no = 0;
                                    foreach ($lokasi as $lk) {
                                        $no++;
                                        echo "<option data-select2-id_location='$no' value='$lk->id_location'>$lk->location_name</option>";
                                    }
                                    ?>
                                </select>
                                <!-- 
                                <select name="kota" id="select_location" class="form-control" style="width: 100%;" required>
                                    <option value="">-- Pilih Kota --</option>
                                </select>
                                -->
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" for="alamat">Alamat Lengkap</label>
                                <textarea name="alamat" class="form-control" id="alamat" rows="3" required placeholder="Alamat lengkap"></textarea>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('admin/_/footer'); ?>

<script type="text/javascript">
    function edit_member(id_member) {
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo base_url('admin/get/member') ?>/" + id_member,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id_member"]').val(data.id_member);
                $('[name="id_upline"]').val(data.id_upline);
                $('[name="nama"]').val(data.nama);
                $('[name="no_hp"]').val(data.no_hp);
                $('[name="email"]').val(data.email);
                $('[name="level"]').val(data.level);
                $('[name="kota"]').val(data.id_location);
                $('[name="alamat"]').val(data.alamat);

                $('#modal_edit_member').modal('show');
                $('.modal-title').text('Edit Member');
                $('#id_upline').select2().trigger('change');
                $('#kota').select2().trigger('change');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax server');
            }
        });
    }
</script>