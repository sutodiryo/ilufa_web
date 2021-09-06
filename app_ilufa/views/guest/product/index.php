<?php $this->load->view('guest/_/header') ?>

<header>
    <div class="container header-hero">
        <div class="row">
            <div class="col-lg-6">
                <div class="contenet-hero">
                    <h5>Product</h5>
                    <h1>Produk iLuFA</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="wrapper">
    <div class="root-work">
        <div class="container">
            <div class="box-title" data-dsn-title="cover">
                <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Produk</h2>
            </div>

            <div class="filterings">
                <div class="filtering-wrap">
                    <div class="filtering">
                        <div class="selector"></div>
                        <button type="button" data-filter="*" class="active">
                            Semua
                        </button>

                        <?php
                        foreach ($category as $cat) {
                            echo "<button type='button' data-filter='.$cat->name'>$cat->name</button>";
                        }
                        ?>

                        <!-- <button type="button" data-filter=".photography">Photography</button>
                        <button type="button" data-filter=".architecture">Architecture</button>
                        <button type="button" data-filter=".video">video</button> -->

                    </div>
                </div>
            </div>

            <div class="projects-list gallery">
                <?php
                foreach ($product as $pr) {
                    echo "<div class='item $pr->category_name'>
                    <a href='" . base_url('p/') . "$pr->slug' class='effect-ajax' data-dsn-ajax='work' data-dsn-grid='move-up'>
                        <img class='has-top-bottom' src='" . GUEST . "upload/product/$pr->image' alt='$pr->name' />
                        <div class='item-border'></div>
                        <div class='item-info'>
                            <h5 class='cat'>$pr->brand_name</h5>
                            <h4>$pr->name</h4>
                            <span><span>Lihat Detail Produk</span></span>
                        </div>
                    </a>
                </div>";
                }
                ?>

                <!-- <div class="item brand">
                    <a href="project-9.html" class="effect-ajax" data-dsn-ajax="work" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>upload/product/softcase-foomee.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">Brand</h5>
                            <h4>Time Tag Watch</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item brand">
                    <a href="project-4.html" class="effect-ajax" data-dsn-ajax="work" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>upload/product/foomee-ja02-wireless-charger-ok.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">Brand</h5>
                            <h4>Under Armour</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item photography">
                    <a href="project-3.html" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project3/1.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">Photography</h5>
                            <h4>Re Styling</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item video">
                    <a href="project-8.html">
                        <img class="hidden" src="<?php echo GUEST ?>img/project/project8/1.jpg" alt="" />
                        <div data-dsn="video" data-overlay="4" style="height: 80vh">
                            <video class="has-top-bottom dsn-video" preload="none" poster="<?php echo GUEST ?>img/project/project8/1.jpg" autoplay loop muted>
                                <source src="http://theme.dsngrid.com/video/droow.mp4" type="video/mp4" type="video/mp4">
                                <source src="http://theme.dsngrid.com/video/droow.webm" type="video/webm">
                                Your browser does not support HTML5 video.
                            </video>
                        </div>
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">video</h5>
                            <h4>Toast 2019 Reel</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item photography">
                    <a href="project-7.html" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project7/1.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">Photography</h5>
                            <h4>Nile - Kabutha</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item photography">
                    <a href="project-6.html" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project6/1.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">Photography</h5>
                            <h4>Sleep Walker</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item brand">
                    <a href="project-1.html" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project1/1.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">brand</h5>
                            <h4>Magista</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item photography">
                    <a href="project-2.html" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project2/1.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">Photography</h5>
                            <h4>Bastian Bux</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div>

                <div class="item architecture">
                    <a href="project-5.html" data-dsn-grid="move-up">
                        <img class="has-top-bottom" src="<?php echo GUEST ?>img/project/project5/1.jpg" alt="" />
                        <div class="item-border"></div>
                        <div class="item-info">
                            <h5 class="cat">Architecture</h5>
                            <h4>Novara Conic</h4>
                            <span><span>Veiw Project</span></span>
                        </div>
                    </a>
                </div> -->

            </div>
        </div>
    </div>

    <section class="contact-up section-margin section-padding">
        <div class="container">
            <div class="c-wapp">
                <a href="#" class="effect-ajax">
                    <span class="hiring">
                        Lihat Semua Produk
                    </span>
                    <!-- <span class="career">
                        Dare and contact us immediately!
                    </span> -->
                </a>
            </div>
        </div>
    </section>

</div>

<?php $this->load->view('guest/_/footer') ?>