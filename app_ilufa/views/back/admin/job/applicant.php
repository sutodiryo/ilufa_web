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
                                    <a class="btn btn-primary" data-toggle="modal" data-target="#modal_add_new_loker">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        Lowongan Baru</a>
                                </form>

                                <!-- <button type="button" class="btn btn-secondary mb-2 mr-2" data-toggle="modal" data-target="#modal_add_new_loker">
                                    Register
                                </button> -->
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive mb-4">
                        <table id="job_applicant" class="table style-3  table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Tanggal</th>
                                    <th>Lowongan</th>
                                    <th>Nama</th>
                                    <th>Profil</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Kontak</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($applicant as $app) {

                                    $date = date_format(date_create($app->submit_time), "d M Y");
                                    $datetime = date_format(date_create($app->submit_time), "d M Y - H:i:s");

                                    echo "
                                   <tr>
                                        <td class='text-center'><span title='$datetime'>$date</span></td>
                                        <td><span title='$app->posisi'>" . substr($app->posisi, 0, 15) . "</span></td>
                                        <td>$app->full_name</td>
                                        <td>$app->last_education</td>
                                        <td>$app->address</td>
                                        <td class='text-center'><a class='btn btn-success btn-rounded mb-2' href='https://api.whatsapp.com/send/?phone=62$app->no_hp'><i class='fab fa-whatsapp'></i> $app->no_hp</a></td>
                                        <td class='text-center'>";

                                    if ($app->status ==  0) {
                                        echo "<span class='shadow-none badge badge-warning'>On Process</span>";
                                    } elseif ($app->status == 1) {
                                        echo "<span class='shadow-none badge badge-primary'>Approved</span>";
                                    }

                                    echo "</td>
                                        <td class='text-center'>
                                            <ul class='table-controls'>
                                                <li><a href='javascript:void(0);' class='bs-tooltip' data-toggle='tooltip' data-placement='top' title='' data-original-title='Edit'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-edit-2 p-1 br-6 mb-1'>
                                                            <path d='M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z'></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href='javascript:void(0);' class='bs-tooltip' data-toggle='tooltip' data-placement='top' title='' data-original-title='Delete'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-trash p-1 br-6 mb-1'>
                                                            <polyline points='3 6 5 6 21 6'></polyline>
                                                            <path d='M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2'></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
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

</div>

<?php $this->load->view('back/_/footer'); ?>