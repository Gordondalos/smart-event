<!-- Carousel
    ================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
        <li data-target="#myCarousel" data-slide-to="10"></li>
    </ol>


    <div class="carousel-inner">
        <?php $wl_theme_options = weblizar_get_options();
        $ImageUrl1 = WL_TEMPLATE_DIR_URI . "/images/1.png";
        $ImageUrl2 = WL_TEMPLATE_DIR_URI . "/images/2.png";
        $ImageUrl3 = WL_TEMPLATE_DIR_URI . "/images/3.png";
        $ImageUrl4 = WL_TEMPLATE_DIR_URI . "/images/4.png";
        $ImageUrl5 = WL_TEMPLATE_DIR_URI . "/images/5.png";
        $ImageUrl6 = WL_TEMPLATE_DIR_URI . "/images/6.png";
        $ImageUrl7 = WL_TEMPLATE_DIR_URI . "/images/7.png";
        $ImageUrl8 = WL_TEMPLATE_DIR_URI . "/images/8.png";
        $ImageUrl9 = WL_TEMPLATE_DIR_URI . "/images/9.png";
        $ImageUrl10 = WL_TEMPLATE_DIR_URI . "/images/10.png";

        ?>


        <div class="item active">
            <?php if ($wl_theme_options['slide_image_1'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_1']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_1']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl1); ?>" class="img-responsive" alt="First slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_1'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_1']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_1'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_1']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_1'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_1'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_1']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_1']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="item">
            <?php if ($wl_theme_options['slide_image_2'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_2']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_2']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl2); ?>" class="img-responsive" alt="Second slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_2'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_2']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_2'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_2']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_2'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_2'] != '') {
                                       echo esc_attr($wl_theme_options['slide_btn_link_2']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_2']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>







        <div class="item">
            <?php if ($wl_theme_options['slide_image_3'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_3']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_3']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl3); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_3'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_3']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_3'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_3']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_3'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_3'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_3']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_3']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>



        <div class="item">
            <?php if ($wl_theme_options['slide_image_4'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_4']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_4']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl4); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_4'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_4']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_4'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_4']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_4'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_4'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_4']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_4']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="item">
            <?php if ($wl_theme_options['slide_image_5'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_5']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_5']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl5); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_5'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_5']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_5'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_5']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_5'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_5'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_5']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_5']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="item">
            <?php if ($wl_theme_options['slide_image_6'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_6']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_6']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl6); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_6'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_6']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_6'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_6']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_6'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_6'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_6']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_6']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="item">
            <?php if ($wl_theme_options['slide_image_7'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_7']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_7']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl7); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_7'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_7']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_7'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_7']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_7'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_7'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_7']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_7']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>


        <div class="item">
            <?php if ($wl_theme_options['slide_image_8'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_8']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_8']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl8); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_8'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_8']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_8'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_8']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_8'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_8'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_8']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_8']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="item">
            <?php if ($wl_theme_options['slide_image_9'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_9']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_9']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl9); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_9'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_9']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_9'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_9']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_9'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_9'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_9']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_9']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="item">
            <?php if ($wl_theme_options['slide_image_10'] != '') { ?>
                <img src="<?php echo esc_url($wl_theme_options['slide_image_10']); ?>" class="img-responsive"
                     alt="<?php echo esc_attr($wl_theme_options['slide_title_10']); ?>">
            <?php } else { ?>
                <img src="<?php echo esc_url($ImageUrl10); ?>" class="img-responsive" alt="Third slide">
            <?php } ?>
            <div class="container">
                <div class="carousel-caption">
                    <?php if ($wl_theme_options['slide_title_10'] != '') { ?>
                        <div class="carousel-text">
                            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_10']); ?></h1>
                            <?php
                            if ($wl_theme_options['slide_desc_10'] != '') { ?>
                                <ul class="list-unstyled carousel-list">
                                    <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_10']); ?></li>
                                </ul>
                            <?php }
                            if ($wl_theme_options['slide_btn_text_10'] != '') { ?>
                                <a class="enigma_blog_read_btn animated bounceInUp"
                                   href="<?php if ($wl_theme_options['slide_btn_link_10'] != '') {
                                       echo esc_url($wl_theme_options['slide_btn_link_10']);
                                   } ?>"
                                   role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_10']); ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>



    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span
            class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span
            class="glyphicon glyphicon-chevron-right"></span></a>

    <div class="enigma_slider_shadow"></div>
</div><!-- /.carousel -->