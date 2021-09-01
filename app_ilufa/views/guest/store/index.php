<?php $this->load->view('guest/_/header') ?>

<div class="dsn-slider" data-dsn-header="project">
    <div class="dsn-root-slider" id="dsn-hero-parallax-img">
        <div class="slide-inner">
            <div class="swiper-wrapper">
                <?php
                foreach ($store as $st) {
                    ?>

                    <div class="slide-item swiper-slide">
                        <div class="slide-content">
                            <div class="slide-content-inner">
                                <div class="project-metas">
                                    <div class="project-meta-box project-work cat">
                                        <span>Store</span>
                                    </div>
                                </div>

                                <div class="title-text-header">
                                    <div class="title-text-header-inner">
                                        <a href="<?php echo base_url('store/') ?>" class="effect-ajax" data-dsn-ajax="slider">
                                            <?php echo $st->branch_name ?>
                                        </a>
                                    </div>
                                </div>

                                <!-- <p>Sometimes, we need to check the time, wondering when our work or meeting will finish, without getting caught by others.</p> -->

                                <div class="link-custom">
                                    <a href="<?php echo base_url('store/') ?>" class="image-zoom effect-ajax" data-dsn="parallax" data-dsn-ajax="slider">
                                        <span>Detail Store</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <div class="image-container">
                            <div class="image-bg cover-bg" data-image-src="<?php echo GUEST ?>upload/store/<?php if ($st->img2 == '') {
                                                                                                                    echo "colomadu_front.jpg";
                                                                                                                } else {
                                                                                                                    echo $st->img2;
                                                                                                                } ?>" data-overlay="0">
                                <img src="<?php echo GUEST ?>upload/store/<?php if ($st->img2 == '') {
                                                                                    echo "colomadu_front.jpg";
                                                                                } else {
                                                                                    echo $st->img2;
                                                                                } ?>" alt="">
                            </div>
                        </div>
                    </div>

                <?php
                } ?>
            </div>
        </div>
    </div>

    <div class="dsn-slider-content"></div>

    <div class="nav-slider">
        <div class="swiper-wrapper" role="navigation">

            <?php $no = 0;
            foreach ($store as $st) {
                $no++; ?>
                <div class="swiper-slide">
                    <div class="image-container">
                        <div class="image-bg cover-bg" data-image-src="<?php echo GUEST ?>upload/store/<?php if ($st->img2 == '') {
                                                                                                                echo "colomadu_front.jpg";
                                                                                                            } else {
                                                                                                                echo $st->img2;
                                                                                                            } ?>" data-overlay="2">
                        </div>
                    </div>
                    <div class="content">
                        <p><?php echo $st->branch_name ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <section class="footer-slid" id="descover-holder">
        <div class="main-social">
            <div class="social-icon">
                <div class="social-btn">
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.3 23.2">
                            <path d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <ul class="social-network">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="control-num">
            <span class="sup active">01</span>
        </div>
        <div class="control-nav">
            <div class="prev-container" data-dsn="parallax">
                <svg viewBox="0 0 40 40">
                    <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                    <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                </svg>
            </div>

            <div class="next-container" data-dsn="parallax">
                <svg viewBox="0 0 40 40">
                    <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                    <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                </svg>
            </div>
        </div>
    </section>

</div>

<div class="wrapper">

    <section class="intro-about section-margin">

        <div class="background-mask">
            <div class="background-mask-bg"></div>
            <div class="img-box">
                <div class="img-cent" data-dsn-grid="move-up">
                    <div class="img-container">
                        <img data-dsn-y="30%" src="<?php echo GUEST ?>img/bgg.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services section-margin">
        <div class="container">
            <div class="one-title dsn-active" data-dsn-animate="up">
                <div class="title-sub-container">
                    <p class="title-sub">OUR SERVCIES</p>
                </div>
                <h2 class="title-main">New Branding Agency</h2>
            </div>

            <div class="row">
                <?php foreach ($store as $str) {
                    echo "<div class='col-md-6'>
                            <div class='services-item'>
                                <div class='line-before'></div>
                                <h4 class='subtitle'>$str->branch_name</h4>
                                <p>As Vintage decided to have a closer look into fast-paced New York web design
                                    realm in person, we get to acquaint with most diverse and exceptionally
                                    captivating personalities.
                                </p>
                                <br>
                                <h5>
                                    <a href=''><i class='fas fa-map-marker-alt'></i> Lihat Map</a>
                                </h5>

                            </div>
                        </div>";
                } ?>

                <!-- <div class="col-md-6">
                    <div class="services-item">
                        <div class="line-before"></div>
                        <h4 class="subtitle">Brand Identity</h4>
                        <p>As Vintage decided to have a closer look into fast-paced New York web design
                            realm in person, we get to acquaint with most diverse and exceptionally
                            captivating personalities. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-item">
                        <div class="line-before"></div>
                        <h4 class="subtitle">Brand Identity</h4>
                        <p>As Vintage decided to have a closer look into fast-paced New York web design
                            realm in person, we get to acquaint with most diverse and exceptionally
                            captivating personalities. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="services-item">
                        <div class="line-before"></div>
                        <h4 class="subtitle">Brand Identity</h4>
                        <p>As Vintage decided to have a closer look into fast-paced New York web design
                            realm in person, we get to acquaint with most diverse and exceptionally
                            captivating personalities. </p>
                    </div>
                </div> -->

            </div>
        </div>
    </section>

    <div class="box-seat box-seat-full section-margin">
        <div class="container-fluid">
            <div class="inner-img" data-dsn-grid="move-up">
                <img data-dsn-scale="1" data-dsn-y="30%" src="<?php echo GUEST ?>img/project/project2/3.jpg" alt="">
            </div>
            <div class="pro-text">
                <h3> How is your<br> visual identity?</h3>
                <p>A system that young people around the world with a club culture and techno
                    enthusiasts feel identified. We generated a simple logo that is the basis for
                    generating a geometric and liquid system. </p>
                <div class="link-custom">
                    <a class="image-zoom effect-ajax" href="project-2.html" data-dsn="parallax">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="our-work work-under-header  section-margin" data-dsn-col="3">
        <div class="container">
            <div class="one-title">
                <div class="title-sub-container">
                    <p class="title-sub">Our Work</p>
                </div>
                <h2 class="title-main">Creative Portfolio Designs</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 offset-lg-3">
                    <div class="work-container">
                        <div class="slick-slider">
                            <div class="work-item slick-slide">
                                <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project3/1.jpg" alt="">
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <a href="project-7.html" data-dsn-grid="move-up" class="effect-ajax">

                                        <h5 class="cat">Photography</h5>
                                        <h4>Nile - Kabutha</h4>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide">
                                <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project6/1.jpg" alt="">
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <a href="project-6.html" data-dsn-grid="move-up" class="effect-ajax">

                                        <h5 class="cat">Fashion</h5>
                                        <h4>Bloawshom</h4>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide">
                                <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project4/1.jpg" alt="">
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <a href="project-4.html" data-dsn-grid="move-up" class="effect-ajax">

                                        <h5 class="cat">Photography</h5>
                                        <h4>Bastian Bux</h4>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>

                            <div class="work-item slick-slide">
                                <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project5/1.jpg" alt="">
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <a href="project-5.html" data-dsn-grid="move-up" class="effect-ajax">

                                        <h5 class="cat">Fashion</h5>
                                        <h4>Bloawshom</h4>
                                        <span><span>Veiw Project</span></span>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->

</div>
<?php $this->load->view('guest/_/footer') ?>