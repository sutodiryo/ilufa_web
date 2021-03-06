<?php $this->load->view('back/_/header'); ?>

<div class="layout-px-spacing">

    <div class="row layout-top-spacing layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">

                    <div class="widget-header">
                        <div class="row">
                            <div class="col-md-8 col-12"></div>
                            <div class="col-md-4 col-12">

                                <form action="javascript:void(0);" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                    <a class="btn btn-primary" href="<?php echo base_url('admin/master/add/product') ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-square">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="12" y1="8" x2="12" y2="16"></line>
                                            <line x1="8" y1="12" x2="16" y2="12"></line>
                                        </svg>
                                        Product Baru</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-responsive mb-4">
                        <table id="multi-column-ordering" class="table table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="multi-column-ordering_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc">Nama Produk</th>
                                    <th class="sorting">Kategori</th>
                                    <th class="sorting">Brand</th>
                                    <th class="sorting">Deskripsi</th>
                                    <th class="sorting">Status</th>
                                    <th class="sorting"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($product as $pr) {
                                    echo "<tr role='row'>
                                            <td class='sorting_1 sorting_2'>
                                                <div class='d-flex'>
                                                    <div class='usr-img-frame mr-2 rounded-circle'>
                                                        <img alt='avatar' class='img-fluid rounded-circle' src='" . GUEST . "upload/product/$pr->image'>
                                                    </div>
                                                    <p class='align-self-center mb-0 admin-name'> $pr->name </p>
                                                </div>
                                            </td>
                                            <td>$pr->category_name</td>
                                            <td>$pr->brand_name</td>
                                            <td><textarea disabled>$pr->description</textarea></td>
                                            <td>OK</td>
                                            <td class='text-center'>
                                            <div class='btn-group'>
                                                <button type='button' class='btn btn-dark btn-sm dropdown-toggle dropdown-toggle-split' id='dropdownMenuReference5' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' data-reference='parent'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'>
                                                        <polyline points='6 9 12 15 18 9'></polyline>
                                                    </svg>
                                                </button>
                                                <div class='dropdown-menu' aria-labelledby='dropdownMenuReference5' style='will-change: transform;'>
                                                    <a class='dropdown-item' href='#'>Detail</a>
                                                    <a class='dropdown-item' href='#'>Edit</a>
                                                    <div class='dropdown-divider'></div>
                                                    <a class='dropdown-item' href='" . base_url('admin/master/del/supplier/') ."$pr->id_product'>Hapus</a>
                                                </div>
                                            </div>
                                            </td>
                                        </tr>";
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Nama Produk</th>
                                    <th rowspan="1" colspan="1">Kategori</th>
                                    <th rowspan="1" colspan="1">Brand</th>
                                    <th rowspan="1" colspan="1">Deskripsi</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php $this->load->view('back/_/footer'); ?>