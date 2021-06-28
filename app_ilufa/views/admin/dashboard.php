<?php $this->load->view('admin/_/header'); ?>

<!-- Header -->
<div class="header pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-12 col-12">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <div class="row">

        <div class="col-xl-2 col-md-6">
            <div class="card bg-gradient-success border-0">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Total Member</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?php echo $member_stat->semua; ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a class="text-nowrap text-white font-weight-600">Bulan ini : <?php echo $member_stat->all_now ?></a>
                        <!-- <span class="text-nowrap text-white">Bulan ini : <?php echo $member_stat->all_now ?></span> -->
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6">
            <div class="card bg-gradient-danger border-0">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Stokies</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?php echo $member_stat->sto; ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a class="text-nowrap text-white font-weight-600">Bulan ini : <?php echo $member_stat->sto_now ?></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6">
            <div class="card bg-gradient-warning border-0">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Priority</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?php echo $member_stat->pri; ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a class="text-nowrap text-white font-weight-600">Bulan ini : <?php echo $member_stat->pri_now ?></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6">
            <div class="card bg-gradient-info border-0">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Eksekutif</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?php echo $member_stat->eks; ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a class="text-nowrap text-white font-weight-600">Bulan ini : <?php echo $member_stat->eks_now ?></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6">
            <div class="card bg-gradient-primary border-0">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Bisnis</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?php echo $member_stat->bus; ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a class="text-nowrap text-white font-weight-600">Bulan ini : <?php echo $member_stat->bus_now ?></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-6">
            <div class="card bg-gradient-default border-0">
                <div class="card-body text-center">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Dropship</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?php echo $member_stat->dro; ?></span>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-sm">
                        <a class="text-nowrap text-white font-weight-600">Bulan ini : <?php echo $member_stat->dro_now ?></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Golongan A</h5>
                            <span class="h2 font-weight-bold mb-0"><?php echo $member_stat->ga; ?></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Golongan B</h5>
                            <span class="h2 font-weight-bold mb-0"><?php echo $member_stat->gb; ?></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Golongan C</h5>
                            <span class="h2 font-weight-bold mb-0"><?php echo $member_stat->gc; ?></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Golongan D</h5>
                            <span class="h2 font-weight-bold mb-0"><?php echo $member_stat->gd; ?></span>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Penjualan Produk Perbulan</h3>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="product_name">Produk</th>
                                <th scope="col" colspan="12" class="sort" data-sort="budget">Penjualan</th>
                            </tr>
                        </thead>
                        <tbody class="list">

                            <?php
                            foreach ($produk_stat as $ps) {
                                echo "  <tr>
                                            <th scope='row'>
                                                <div class='media align-items-center'>
                                                    <a href='#' class='avatar rounded-circle mr-3'>
                                                        <img alt='Image placeholder' src='" . ASSETS . "produk/$ps->img_1'>
                                                    </a>
                                                    <div class='media-body'>
                                                        <span class='product_name mb-0 text-sm'>$ps->nama_produk</span>
                                                    </div>
                                                </div>
                                            </th>";

                                $qps = $this->db->query("   SELECT  SUM(quantity) AS pq,
                                                                    SUM(quantity*price) AS pr,
                                                                    (SELECT EXTRACT(YEAR FROM tgl_pesan) FROM transaksi WHERE id_transaksi=transaksi_produk.id_transaksi) AS th,
                                                                    (SELECT EXTRACT(MONTH FROM tgl_pesan) FROM transaksi WHERE id_transaksi=transaksi_produk.id_transaksi) AS bulan
                                                            FROM transaksi_produk
                                                            WHERE transaksi_produk.id_produk='$ps->id_produk' AND transaksi_produk.id_transaksi IN (SELECT id_transaksi FROM transaksi WHERE YEAR(tgl_pesan)=YEAR(CURDATE()))
                                                            GROUP BY bulan,th ORDER BY th ASC, bulan ASC")->result();
                                // var_dump($qps);
                                foreach ($qps as $qps) {
                                    $m          = DateTime::createFromFormat('!m', $qps->bulan);
                                    $bulan      = $m->format('M');

                                    $quantity   = $qps->pq;
                                    $price      = $qps->pr;

                                    echo "<th>
                                            <table class='table align-items-center table-flush table-hover'>
                                                <thead class='thead-light'><th>$bulan</th></thead>
                                                <tbody><tr><td>Jumlah : Rp " . number_format($quantity, 0, ',', '.') . " $ps->satuan</td></tr><tr><td>Total : Rp " . number_format($price, 0, ',', '.') . "</td></tr></tbody>
                                            </table>
                                        </th>";
                                }

                                echo "</tr>";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="card-deck flex-column flex-xl-row">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <h5 class="h3 mb-0">Katalog Produk</h5>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <ul class="list-group list-group-flush list my--3">

                    <?php

                    foreach ($produk as $p) {

                        echo "  <li class='list-group-item px-0'>
                                    <div class='row align-items-center'>
                                        <div class='col-auto'>
                                            <a href='#' class='avatar rounded-circle'>
                                                <img alt='Image placeholder' src='" . ASSETS . "produk/$p->img_1'>
                                            </a>
                                        </div>
                                        <div class='col'>
                                            <h5>$p->nama_produk</h5>
                                        </div>
                                        <div class='col'>
                                            <h5>$p->nilai PV</h5>
                                        </div>
                                    </div>
                                </li>";
                    }
                    ?>

                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-transparent">
                <h6 class="text-muted text-uppercase ls-1 mb-1">*Dalam Juta</h6>
                <h2 class="h3 mb-0">Statistik Total Penjuakan Produk</h2>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="chart-sales" class="chart-canvas"></canvas>
                </div>
            </div>
        </div>
    </div>

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
    'use strict';
    var SalesChart = (function() {

        // Variables

        var $chart = $('#chart-sales');


        // Methods

        function init($this) {
            var salesChart = new Chart($this, {
                type: 'line',
                options: {
                    scales: {
                        yAxes: [{
                            gridLines: {
                                color: Charts.colors.gray[200],
                                zeroLineColor: Charts.colors.gray[200]
                            },
                            ticks: {

                            }
                        }]
                    }
                },
                data: {
                    labels: [<?php
                        foreach ($sales_stat as $ss) {

                            $month    = DateTime::createFromFormat('!m', $ss->bulan);
                            $bulan    = $month->format('M');

                            echo "'$bulan',";
                        }
                        ?> 
                    ],
                    datasets: [{
                        label: 'Performance',
                        data: [<?php
                        foreach ($sales_stat as $ss) {
                            

                            $tot      = ($ss->tot/1000000);
                            echo "$tot,";
                        }
                        ?> ]
                    }]
                }
            });

            // Save to jQuery object

            $this.data('chart', salesChart);

        };


        // Events

        if ($chart.length) {
            init($chart);
        }

    })();
</script>