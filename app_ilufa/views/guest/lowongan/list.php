<?php $this->load->view('guest/_/header') ?>

<header>
    <div class="container header-hero">
        <div class="row">
            <div class="col-lg-6">
                <div class="contenet-hero">
                    <h5>Lowongan Pekerjaan</h5>
                    <h1>Karir</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="wrapper">
    <div class="root-blog">
        <div class="container">

            <div class="row">

                <?php foreach ($job as $j) {
                    $date_start = new DateTime($j->date_start);
                    $date_end   = new DateTime($j->date_end);

                    $tgl1 = $date_start->format('d M Y');
                    $tgl2 = $date_end->format('d M Y');

                    // $t2 = new DateTime($tgl_2);
                    // $tg1 = $t1->format('d M Y');

                    ?>

                    <div class="col-lg-4">
                        <article class="post-list-item" style="border: 3px solid white; padding:5px;">
                            <figure>
                                <a class="image-zoom effect-ajax" href="<?php echo "" . base_url('lowongan/detail/') . "$j->id_job"; ?>" data-dsn-animate="up">
                                    <img src="<?php echo GUEST ?>img/blog/4.jpg" alt="">
                                </a>
                            </figure>
                            <div class="post-list-item-content text-center">
                                <div class="post-info-top">
                                    <div class="post-info-date">
                                        <span><?php echo "$tgl1 - $tgl2"; ?></span>
                                    </div>
                                    <br>
                                    <div class="post-info-category">
                                        <a href="<?php echo "" . base_url('lowongan/detail/') . "$j->id_job"; ?>">iLuFA <?php echo $j->cabang ?></a>
                                    </div>
                                </div>
                                <h3>
                                    <a href="<?php echo "" . base_url('lowongan/detail/') . "$j->id_job"; ?>"><?php echo $j->posisi ?></a>
                                </h3>

                                <div class="post-info-top">
                                    <div class="post-info-date">
                                        <span><?php echo $j->kota ?></span>
                                    </div>

                                    <div class="post-info-category">
                                        <a href="<?php echo "" . base_url('lowongan/') . ""; ?>"><?php echo $j->tipe; ?></a>
                                    </div>
                                </div>
                                <div class="link-custom" data-dsn-animate="up">
                                    <a class="image-zoom effect-ajax" href="<?php echo "" . base_url('lowongan/detail/') . "$j->id_job"; ?>" data-dsn="parallax">
                                        <span>Detail</span>
                                    </a>
                                </div>
                            </div>
                            <br>
                        </article>
                    </div>

                <?php
                } ?>
                <!-- 
                <div class="col-lg-4">
                    <article class="post-list-item" style="border: 3px solid white; padding:5px;">
                        <figure>
                            <a class="image-zoom effect-ajax" href="<?php echo base_url('lowongan/detail/1') ?>" data-dsn-animate="up">
                                <img src="<?php echo GUEST ?>img/blog/4.jpg" alt="">
                            </a>
                        </figure>
                        <div class="post-list-item-content text-center">
                            <div class="post-info-top">
                                <div class="post-info-date">
                                    <span>02 Sep 2021 - 25 Aug 2021</span>
                                </div>

                                <div class="post-info-category">
                                    <a href="#">Ilufa 168</a>
                                </div>
                            </div>
                            <h3>
                                <a href="#">Digital Multimedia Marketing</a>
                            </h3>

                            <div class="post-info-top">
                                <div class="post-info-date">
                                    <span>Bojonegoro</span>
                                </div>

                                <div class="post-info-category">
                                    <a href="#">Fulltime</a>
                                </div>
                            </div>
                            <div class="link-custom" data-dsn-animate="up">
                                <a class="image-zoom effect-ajax" href="<?php echo base_url('lowongan/detail/1') ?>" data-dsn="parallax">
                                    <span>Detail</span>
                                </a>
                            </div>
                        </div>
                        <br>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="post-list-item" style="border: 3px solid white; padding:5px;">
                        <figure>
                            <a class="image-zoom effect-ajax" href="<?php echo base_url('lowongan/detail/1') ?>" data-dsn-animate="up">
                                <img src="<?php echo GUEST ?>img/blog/4.jpg" alt="">
                            </a>
                        </figure>
                        <div class="post-list-item-content text-center">
                            <div class="post-info-top">
                                <div class="post-info-date">
                                    <span>02 Sep 2021 - 25 Aug 2021</span>
                                </div>

                                <div class="post-info-category">
                                    <a href="#">Ilufa 168</a>
                                </div>
                            </div>
                            <h3>
                                <a href="#">Digital Multimedia Marketing</a>
                            </h3>

                            <div class="post-info-top">
                                <div class="post-info-date">
                                    <span>Bojonegoro</span>
                                </div>

                                <div class="post-info-category">
                                    <a href="#">Fulltime</a>
                                </div>
                            </div>
                            <div class="link-custom" data-dsn-animate="up">
                                <a class="image-zoom effect-ajax" href="<?php echo base_url('lowongan/detail/1') ?>" data-dsn="parallax">
                                    <span>Detail</span>
                                </a>
                            </div>
                        </div>
                        <br>
                    </article>
                </div>

                <div class="col-lg-4">
                    <article class="post-list-item" style="border: 3px solid white; padding:5px;">
                        <figure>
                            <a class="image-zoom effect-ajax" href="<?php echo base_url('lowongan/detail/1') ?>" data-dsn-animate="up">
                                <img src="<?php echo GUEST ?>img/blog/4.jpg" alt="">
                            </a>
                        </figure>
                        <div class="post-list-item-content text-center">
                            <div class="post-info-top">
                                <div class="post-info-date">
                                    <span>02 Sep 2021 - 25 Aug 2021</span>
                                </div>

                                <div class="post-info-category">
                                    <a href="#">Ilufa 168</a>
                                </div>
                            </div>
                            <h3>
                                <a href="#">Digital Multimedia Marketing</a>
                            </h3>

                            <div class="post-info-top">
                                <div class="post-info-date">
                                    <span>Bojonegoro</span>
                                </div>

                                <div class="post-info-category">
                                    <a href="#">Fulltime</a>
                                </div>
                            </div>
                            <div class="link-custom" data-dsn-animate="up">
                                <a class="image-zoom effect-ajax" href="<?php echo base_url('lowongan/detail/1') ?>" data-dsn="parallax">
                                    <span>Detail</span>
                                </a>
                            </div>
                        </div>
                        <br>
                    </article>
                </div>
                -->

            </div>

            <div class="dsn-pagination">
                <span class="page-numbers current ">
                    <span class="dsn-numbers">
                        <span class="number">1</span></span>
                </span>
                <a class="page-numbers" href="#">
                    <span class="dsn-numbers">
                        <span class="number">2</span>
                    </span>
                </a>

                <a class="page-numbers" href="#">
                    <span class="dsn-numbers">
                        <span class="number">3</span>
                    </span>
                </a>
                <a class="next page-numbers" href="#">
                    <span class="button-m">
                        <svg viewBox="0 0 52 52" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
                            <path d="M3 26.7h39.5v3.5c0 .3.1.5.4.6.2.1.5.1.7-.1l5.9-4.2c.2-.1.3-.3.3-.5s-.1-.4-.3-.5l-5.9-4.2c-.1-.1-.3-.1-.4-.1-.1 0-.2 0-.3.1-.2.1-.4.3-.4.6v3.5H3c-.4 0-.7.3-.7.7 0 .3.3.6.7.6z">
                            </path>
                        </svg>
                        <span>NEXT</span>
                    </span>
                </a>
            </div>

        </div>
    </div>
</div>

<?php $this->load->view('guest/_/footer') ?>