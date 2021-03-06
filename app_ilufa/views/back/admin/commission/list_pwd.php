<?php $this->load->view('admin/_/header'); ?>

<!-- Header -->
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-8 col-7">
                    <h6 class="h2 d-inline-block mb-0"><?php echo $title ?></h6>
                </div>
                <div class="col-lg-4 col-5 text-right">
                    <a href="<?php echo base_url('admin/commission/all') ?>" class="btn btn-sm btn-danger" title="Kembali"><i class="fa fa-reply"></i> Kembali</a>
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
                                <th width="30%">Nama</th>
                                <th width="20%">Komisi</th>
                                <th width="49%">Rincian</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 0;
                            foreach ($pwd as $p) {
                                $no++;

                                $date_update  = new DateTime($p->date_update);

                                echo "  <tr>
                                            <td>$no</td>
                                            <td>$p->id_member</td>
                                            <td>Rp " . number_format($p->amount, 0, ',', '.') . "</td>
                                            <td>$date_update</td>
                                        </tr>";
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
                    &copy; <?php echo date('Y');?> <a href="https://najahnet.id" class="font-weight-bold ml-1" target="_blank">Najah Network</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="modal fade" id="modal_add_commission" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Pembelian Official</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="<?php echo base_url('admin/add/commission'); ?>" method="POST">
                <input type="hidden" name="tipe" value="0">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="member">Member</label>
                                <select name="id_member" id="member" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-member="3" tabindex="-3" aria-hidden="true" required>
                                    <?php
                                    $no = 0;
                                    foreach ($sel_member as $sm) {
                                        $no++;
                                        echo "<option data-select2-member='$no' value='$sm->id_member'>$sm->nama - $sm->no_hp</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label class="form-control-label" for="id_produk">Produk</label>
                                <select name="id_produk" id="id_produk" class="form-control select2-hidden-accessible" data-toggle="select" data-select2-id_produk="3" tabindex="-3" aria-hidden="true" required>
                                    <!-- <option value="0">Pilih Produk . . .</option> -->
                                    <?php
                                    $no = 0;
                                    foreach ($sel_product as $sm) {
                                        $no++;
                                        echo "<option data-select2-id_produk='$no' value='$sm->id_produk'>$sm->nama_produk</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label class="form-control-label" for="product_quantity">Jumlah (botol/pack)</label>
                                <input type="number" name="product_quantity" class="form-control" id="product_quantity" placeholder="Jumlah">
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