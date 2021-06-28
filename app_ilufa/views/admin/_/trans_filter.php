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
                    if ($idp == "transaction") {
                        echo "<a href='".base_url('admin/add_transaction/cart')."' class='btn btn-sm btn-neutral' title='Transaksi Baru'><i class='fa fa-plus'></i> Transaksi Baru</a>";
                    } else {
                        if (empty($commission)) {
                            echo "<a href='" . base_url('admin/commission/all') . "' class='btn btn-sm btn-danger' title='Kembali'><i class='fa fa-reply'></i> Kembali</a>";
                        }
                    }
                    ?>

                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Filter Bulan</h3>
                            <form role="form" class="form-light" action="<?php echo base_url('admin/' . $idp . '/all'); ?>" method="POST">
                                <div class="row">
                                    <div class="col-xl-12 col-md-6">
                                        <div class="form-group">
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


                <div class="col-xl-8 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title mb-3">Filter Range Tanggal</h3>
                            <form role="form" class="form-light" action="<?php echo base_url('admin/transaction/all') ?>" method="POST">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <input name="tgl_1" class="form-control" placeholder="Tanggal Awal" type="date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative">
                                                <input name="tgl_2" class="form-control" placeholder="Tanggal Akhir" type="date" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <button type="submit" class="form-control btn btn-block btn-info" title="Set Periode Laporan">Set Periode <i class="fa fa-wrench"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>