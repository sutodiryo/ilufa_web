<?php $this->load->view('admin/_/header'); ?>

<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-8 col-7">
                    <h6 class="h2 d-inline-block mb-0"><?php
                                                        date_default_timezone_set('Asia/Jakarta');
                                                        if (empty($date)) {
                                                            $bulan = date("F Y");
                                                        } else {
                                                            $bulan = date_format(date_create($date), "F Y");
                                                        }

                                                        echo "$title <small>($bulan)</small>"; ?>
                    </h6>
                </div>
                <div class="col-lg-4 col-5 text-right">
                    <?php
                    echo "<a href='" . base_url('admin/add_transaction/cart') . "' class='btn btn-sm btn-neutral' title='Transaksi Baru'><i class='fa fa-plus'></i> Transaksi Baru</a>";
                    ?>

                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Filter Bulan</h3>
                            <form role="form" class="form-light" action="<?php echo base_url('admin/transaction/' . $idp . ''); ?>" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="form-group">
                                            <input name="status" type="hidden" value="<?php
                                                                                    if (!isset($status)) {
                                                                                        echo 0;
                                                                                    } else {
                                                                                        echo $status;
                                                                                    }
                                                                                    ?>">
                                            <input name="date" class="form-control" onchange="this.form.submit()" type="month" value="<?php
                                                                                                                                        if (empty($date)) {
                                                                                                                                            $date = date("Y-m");
                                                                                                                                        }

                                                                                                                                        echo $date;
                                                                                                                                        ?>" id="example-month-input">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-xl-9 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Filter</h3>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <a href="<?php echo base_url('admin/transaction/all') ?>" type="submit" class="form-control btn btn-block btn-default" title="Set Periode Laporan">Semua</a>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <a href="<?php echo base_url('admin/transaction/purchase') ?>" type="submit" class="form-control btn btn-block btn-info" title="Set Periode Laporan">Pembelian</a>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <a href="<?php echo base_url('admin/transaction/sales') ?>" class="form-control btn btn-block btn-warning" title="Set Periode Laporan">Penjualan</a>
                                </div>
                                <div class="col-xl-3 col-md-6">

                                    <form role="form" class="form-light" action="<?php echo base_url('admin/transaction/' . $idp . ''); ?>" method="POST">
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <input name="date" type="hidden" value="<?php
                                                                                        if (empty($date)) {
                                                                                            $date = date("Y-m");
                                                                                        }

                                                                                        echo $date;
                                                                                        ?>">
                                                <select name="status" value="1" onchange="this.form.submit()" class="form-control" id="status">
                                                    <option disabled selected value>Status Transaksi</option>
                                                    <option value="0">Belum Bayar/Dikonfirmasi</option>
                                                    <option value="1">Dikemas</option>
                                                    <option value="2">Dikirim</option>
                                                    <option value="3">Diterima/Selesai</option>
                                                    <option value="4">Transaksi Pertama</option>
                                                    <option value="5">Dibatalkan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- <button type="submit" class="form-control btn btn-block btn-info" title="Set Periode Laporan">Set Periode <i class="fa fa-wrench"></i></button> -->
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <th width="20%">ID Transaksi</th>
                                <th width="25%">Member</th>
                                <th width="34%">Rincian</th>
                                <th width="5%">Tipe</th>
                                <th width="10%">Status</th>
                                <th width="5%" class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 0;
                            foreach ($transaction as $t) {
                                $no++;

                                $tgl_pesan  = new DateTime($t->tgl_pesan);

                                echo "<tr>
                                <td>$no</td>
                                <th><a href='" . base_url('admin/transaction_detail/') . "$t->id_transaksi' target='_blank'>00" . $t->id_member . "00" . $t->id_transaksi . "</a></th>
                                <td>
                                <a href='https://wa.me/62$t->no_hp' class='btn btn-sm btn-success btn-icon'><i class='fab fa-whatsapp'></i> " . substr($t->member, 0, 15) . "</a>";
                                if ($t->tipe == 1) {
                                    echo "<br><small>Pembeli : " . substr($t->member_to, 0, 25) . "</small>";
                                }

                                echo "</a></td>";

                                // echo "  <td>$t->produk (Rp " . number_format($t->product_price, 0, ',', '.') . ") x $t->product_quantity = Rp " . number_format($t->total, 0, ',', '.') . "</td>";
                                if ($t->tipe == 0) {
                                    echo "<th>
                                    <table style=\"padding:0px;\" class='table table-flush table-hover'>
                                        <thead style=\"padding:0px;\" >
                                            <tr style=\"padding:0px;\">
                                                <th style=\"padding:1px; text-align:right;\" width='40%'>(Total + Ongkir)</th>
                                                <th style=\"padding:1px; text-align:right;\" width='5%'></th>
                                                <th style=\"padding:1px; text-align:center;\" width='20%'>Promo</th>
                                                <th style=\"padding:1px; text-align:right;\" width='5%'></th>
                                                <th style=\"padding:1px; text-align:right;\" width='30%'>Tagihan</th>
                                            </tr>  
                                        </thead>
                                        <tbody style=\"padding:0px;\" >  
                                            <tr style=\"padding:0px;\">
                                                <td style=\"padding:1px; text-align:right;\">(" . number_format($t->total, 0, ',', '.') . " + " . number_format($t->ongkir, 0, ',', '.') . ")</td>
                                                <td style=\"padding:1px; text-align:right;\"> - </td>
                                                <td style=\"padding:1px; text-align:center;\" >" . number_format($t->nilai_promo, 0, ',', '.') . "</td>
                                                <td style=\"padding:1px; text-align:right;\"> = </td>
                                                <td style=\"padding:1px; text-align:right;\" >" . number_format($t->total - $t->nilai_promo + $t->ongkir, 0, ',', '.') . "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </th>";
                                } elseif ($t->tipe == 1) {
                                    echo "<th>
                                    <table style=\"padding:0px;\" class='table table-flush table-hover'>
                                        <thead style=\"padding:0px;\" >
                                            <tr style=\"padding:0px;\">
                                                <th style=\"padding:1px; text-align:right;\" width='60%'>Bukti Transfer</th>
                                                <th style=\"padding:1px; text-align:right;\" width='40%'>Total</th>
                                            </tr>  
                                        </thead>
                                        <tbody style=\"padding:0px;\" >
                                            <tr style=\"padding:0px;\">
                                                <td style=\"padding:1px; text-align:right;\" ><a href='" . base_url('public/upload/bukti_transfer/') . "$t->bukti_transfer' target='_blank'>Lihat File</a></td>
                                                <td style=\"padding:1px; text-align:right;\" >" . number_format($t->total, 0, ',', '.') . "</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </th>";
                                }

                                echo "<td>";
                                if ($t->tipe == 0) {
                                    echo "<span class='btn btn-sm btn-info'>Beli</span>";
                                    $st0    = "Belum Bayar";
                                    $st1    = "Dikemas";
                                } else if ($t->tipe == 1) {
                                    echo "<span class='btn btn-sm btn-warning'>Jual</span>";
                                    $st0     = "<small>Belum Dikonfirmasi</small>";
                                    $st1    = "<small>Sudah Dikonfirmasi</small>";
                                }
                                echo "</td>";

                                echo "<td>";
                                if ($t->status == 0) {
                                    echo "<a class='badge badge-dot mr-4'><i class='bg-orange'></i><span class='status'>$st0</span></a>";
                                } else if ($t->status == 1) {
                                    echo "<a class='badge badge-dot mr-4'><i class='bg-yellow'></i><span class='status'>$st1</span></a>";
                                } else if ($t->status == 2) {
                                    echo "<a class='badge badge-dot mr-4'><i class='bg-green'></i><span class='status'>Dikirim</span></a>";
                                } else if ($t->status == 3) {
                                    echo "<a class='badge badge-dot mr-4'><i class='bg-info'></i><span class='status'>Diterima</span></a>";
                                } else if ($t->status == 4) {
                                    echo "<a class='badge badge-dot mr-4'><i class='bg-default'></i><span class='status'>Pertama</span></a>";
                                } else if ($t->status == 5) {
                                    echo "<a class='badge badge-dot mr-4'><i class='bg-red'></i><span class='status'>Dibatalkan</span></a>";
                                }
                                echo "</td>";

                                //AKSI
                                echo "  <td class='text-center'>
                                <a href='" . base_url('admin/transaction_detail/') . "$t->id_transaksi' target='_blank' title='Detail Transaksi' class='btn btn-sm btn-info btn-icon'><i class='fa fa-eye'></i> Detail</a>
                                <a href='" . base_url('admin/set/transaksi/5/') . "$t->id_transaksi' title='Set Dibatalkan' class='btn btn-sm btn-danger btn-icon'><i class='fa fa-times'></i> Batal</a>
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

<?php $this->load->view('admin/_/footer'); ?>



<script>
        $("#status").val("<?php echo $status ?>");

</script>