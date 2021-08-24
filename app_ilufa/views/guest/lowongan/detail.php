<?php $this->load->view('guest/_/header') ?>

<header>
    <div class="header-single-post" data-dsn-header="project">
        <div class="post-parallax-wrapper" data-overlay="3">
            <img id="dsn-hero-parallax-img" class="w-100 has-top-bottom" src="<?php echo GUEST ?>img/blog/4.jpg" alt="" data-dsn-header="blog" data-dsn-ajax="img">
        </div>
        <div class="container">
            <div class="inner-box m-section">
                <div class="post-info">
                    <a href="#" class="blog-post-date dsn-link"><?php
                                                                $date_start = new DateTime($detail_job->date_start);
                                                                $date_end   = new DateTime($detail_job->date_end);

                                                                $tgl1       = $date_start->format('d M Y');
                                                                $tgl2       = $date_end->format('d M Y');

                                                                echo "$tgl1 - $tgl2"; ?>
                    </a>
                    <div class="blog-post-cat dsn-link">
                        <a href="#"><?php echo $detail_job->tipe ?></a>
                    </div>
                </div>
                <h3 class="title-box mt-10"><?php echo $detail_job->posisi ?></h3>
            </div>
        </div>
    </div>
</header>

<div class="wrapper">
    <div class="container">
        <div class="news-content">
            <div class="news-content-inner">
                <div class="News-socials-wrapper">

                    <div>

                        <div class="cat">
                            <h5 class="title-caption">Diposting : </h5>
                            <a href="#"><span><?php echo $tgl1 ?></span></a>
                        </div>
                    </div>

                    <div>
                        <div class="cat">
                            <h5 class="title-caption">Paling Lambat :</h5>
                            <a href="#"><span><?php echo $tgl2 ?></span></a>
                        </div>
                    </div>
                </div>

                <div class="post-content">
                    <p>
                        <?php echo $detail_job->deskripsi ?>
                    </p>

                </div>
            </div>

            <div class="comments-post m-section">

                <div class="comments-form text-center">
                    <div class="submit-div image-zoom mb-30" data-dsn="parallax">
                        <button onclick="window.location.href='<?php echo "" . base_url('lowongan/apply/') . "" . $detail_job->id_job . ""; ?> ';">Daftar Sekarang</button>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

<?php $this->load->view('guest/_/footer'); ?>