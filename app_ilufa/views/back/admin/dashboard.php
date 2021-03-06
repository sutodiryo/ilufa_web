<?php $this->load->view('back/_/header'); ?>

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">

        <?php
        $x = $this->session->userdata('log_level');

        if ($x == 0) {
            ?>

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class="">Revenue</h5>
                        <ul class="tabs tab-pills">
                            <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Selengkapnya</a></li>
                        </ul>
                    </div>

                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="revenueMonthly"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class="">Sales by Category</h5>
                    </div>
                    <div class="widget-content">
                        <div id="chart-2" class=""></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-one">
                    <div class="widget-heading">
                        <h5 class="">Transactions</h5>
                    </div>

                    <div class="widget-content">
                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Electricity Bill</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">SP</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Shaun Park</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>
                                </div>
                                <div class="t-rate rate-inc">
                                    <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                            <polyline points="5 12 12 5 19 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="avatar avatar-xl">
                                            <span class="avatar-title rounded-circle">AD</span>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Amy Diaz</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-inc">
                                    <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up">
                                            <line x1="12" y1="19" x2="12" y2="5"></line>
                                            <polyline points="5 12 12 5 19 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>

                        <div class="transactions-list">
                            <div class="t-item">
                                <div class="t-company-name">
                                    <div class="t-icon">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="t-name">
                                        <h4>Netflix</h4>
                                        <p class="meta-date">4 Aug 1:00PM</p>
                                    </div>

                                </div>
                                <div class="t-rate rate-dec">
                                    <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <polyline points="19 12 12 19 5 12"></polyline>
                                        </svg></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">

                <div class="widget widget-activity-four">

                    <div class="widget-heading">
                        <h5 class="">Recent Activities</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">

                                <div class="item-timeline timeline-primary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p><span>Updated</span> Server Logs</p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">Just Now</p>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">2 min ago</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-danger">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Backup <span>Files EOD</span></p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">14:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">16:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                        <span class="badge badge-primary">In progress</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Rebooted Server</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">17:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Send contract details to Freelancer</p>
                                        <span class="badge badge-danger">Pending</span>
                                        <p class="t-time">18:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-dark">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Kelly want to increase the time of the project.</p>
                                        <span class="badge badge-primary">In Progress</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-success">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Server down for maintanence</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">19:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-secondary">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Malicious link detected</p>
                                        <span class="badge badge-warning">Block</span>
                                        <p class="t-time">20:00</p>
                                    </div>
                                </div>

                                <div class="item-timeline  timeline-warning">
                                    <div class="t-dot" data-original-title="" title="">
                                    </div>
                                    <div class="t-text">
                                        <p>Rebooted Server</p>
                                        <span class="badge badge-success">Completed</span>
                                        <p class="t-time">23:00</p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tm-action-btn">
                            <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-two">

                    <div class="widget-heading">
                        <h5 class="">Recent Orders</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">Customer</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Product</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Invoice</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Price</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Status</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="avatar">Andy King</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Nike Sport</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#76894</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$88.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="avatar">Irene Collins</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Speakers</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#75844</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$84.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="avatar">Laurie Fox</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Camera</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#66894</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$126.04</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-danger">Pending</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="avatar">Luke Ivory</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Headphone</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#46894</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$56.07</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="avatar">Ryan Collins</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Sport</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#89891</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$108.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="avatar">Nia Hillyer</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Sunglasses</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#26974</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$168.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content customer-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="avatar">Sonia Shaw</div>
                                        </td>
                                        <td>
                                            <div class="td-content product-brand">Watch</div>
                                        </td>
                                        <td>
                                            <div class="td-content">#76844</div>
                                        </td>
                                        <td>
                                            <div class="td-content pricing"><span class="">$110.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="badge outline-badge-success">Paid</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-table-three">

                    <div class="widget-heading">
                        <h5 class="">Top Selling Product</h5>
                    </div>

                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content">Product</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Price</div>
                                        </th>
                                        <th>
                                            <div class="th-content th-heading">Discount</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Sold</div>
                                        </th>
                                        <th>
                                            <div class="th-content">Source</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="product">Speakers</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$84.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$10.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">240</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Direct</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="product">Sunglasses</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$56.07</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$5.07</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">190</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Google</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="product">Watch</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$88.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$20.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">66</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="product">Laptop</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$110.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$33.00</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">35</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Email</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="product">Camera</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$126.04</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$26.04</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">30</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Referral</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="product">Shoes</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$108.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$47.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">130</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Google</a></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="td-content product-name"><img src="<?php echo BACK ?>assets/img/90x90.jpg" alt="product">Headphone</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="pricing">$168.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content"><span class="discount-pricing">$60.09</span></div>
                                        </td>
                                        <td>
                                            <div class="td-content">170</div>
                                        </td>
                                        <td>
                                            <div class="td-content"><a href="javascript:void(0);" class="">Ads</a></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($x == 1) { ?>

            <?php foreach ($stat_applicant as $sa) { ?>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-account-invoice-one">
                        <div class="widget-content">
                            <div class="invoice-box">
                                <div class="acc-total-info">
                                    <h5><?php echo $sa->posisi ?></h5>
                                    <p class="acc-amount"><?php echo $sa->tot_aplicant ?> Pendaftar</p>
                                </div>
                                <!-- <div class="inv-detail">
                                    <div class="info-detail-3 info-sub">
                                        <div class="info-detail">
                                            <p>Extras this month</p>
                                            <p>$ -0.68</p>
                                        </div>
                                        <div class="info-detail-sub">
                                            <p>Netflix Yearly Subscription</p>
                                            <p>$ 0</p>
                                        </div>
                                        <div class="info-detail-sub">
                                            <p>Others</p>
                                            <p>$ -0.68</p>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="inv-action">
                                    <a href="<?php echo base_url('admin/job/applicant/');
                                                        echo  $sa->id_job; ?>" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        <?php } elseif ($x == 2) { ?>


            <?php foreach ($stat_games as $sg) { ?>

                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-account-invoice-one">
                        <div class="widget-content">
                            <div class="invoice-box">
                                <div class="acc-total-info">
                                    <h5><?php echo $sg->id_branch ?></h5>
                                    <p class="acc-amount"><?php echo $sg->id_branch ?> Pendaftar</p>
                                </div>
                                <div class="inv-action">
                                    <a href="<?php echo base_url('admin/job/applicant/');
                                                        echo  $sg->id_branch; ?>" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        <?php
        }
        ?>
    </div>
</div>

<?php $this->load->view('back/_/footer'); ?>