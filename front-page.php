<?php get_header();?>
<section class=" section hero">
    <div class="container">
        <div class="hero-global">
            <div class="hero-colon-left">
                <div class="hero-title">
                    <h1>
                        <?php echo get_field('hero_title')?>
                        <span class="hero-products">
                            <?php 
                                $link = get_field('hero_products_link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="hero-products-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </span>
                        <span class="hero-background"></span>
                    </h1> 
                </div>
                <div class="hero-text">
                    <?php echo get_field('hero_text')?>
                </div>
                <div class="section-button-wrapper">
                    <div class="section-button">
                        <?php 
                            $link = get_field('btn_secondary');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <a class="btn btn-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="section-button">
                    <a class="btn-video" data-bs-toggle="modal" data-bs-target="#hero-modal" href="#">
                        <?php $image = get_field('hero_btn_modal');?>
                        <img src="<?php echo $image['url'];?>">
                    </a>
                    <?php 
                        $link = get_field('btn_video');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                        <a class="btn-video" data-bs-toggle="modal" data-bs-target="#hero-modal" href="<?php echo esc_url( $link_url ); ?>"target="<?php echo esc_attr( $link_target );?>"><?php echo esc_html( $link_title );?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="hero-colon-right">
                <div class="hero-colon-right-images">
                    <div class="hero-img-bg">
                    <?php $image = get_field('hero_image_bg');?>
                    <img src="<?php echo $image['url'];?>">
                    </div>
                    <div class="hero-img-global">
                        <?php $image = get_field('hero_image');?>
                        <img src="<?php echo $image['url'];?>">
                        <?php 
                            // echo wp_get_attachment_image($image['id'], 'medium');
                        ?>
                    </div>
                    <div class="hero-img-first">
                        <?php $image = get_field('hero_img_first');?>
                        <img src="<?php echo $image['url'];?>">
                    </div>
                    <div class="hero-img-second">
                        <?php $image = get_field('hero_img_second');?>
                        <img src="<?php echo $image['url'];?>">
                    </div>
                    <div class="hero-img-last">
                        <?php $image = get_field('hero_img_last');?>
                        <img src="<?php echo $image['url'];?>">
                    </div>
                    <div class="hero-img-local">
                        <a href="#">
                            <?php $image = get_field('hero_img_local');?>
                            <img src="<?php echo $image['url'];?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="hero-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="hero-modal">
                        <iframe autoplay='1' width="560" height="315" src="https://www.youtube.com/embed/XH5OW46yO8I" tallowfullscreen data-bs-dismiss="modal"></iframe>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section partners">
    <div class="container">
        <div class="partners-title">
            <h4>
                <?php echo get_field('partners_title')?>
            </h4>
        </div>
        <div class="partners-images">
            <div class="partners-img">
                <a href="#">
                    <?php $image = get_field('partners_google');?>
                    <img src="<?php echo $image['url'];?>">
                </a>
            </div>
            <div class="partners-img">
                <a href="#">
                    <?php $image = get_field('partners_airbnb');?>
                    <img src="<?php echo $image['url'];?>">
                </a>
            </div>
            <div class="partners-img">
                <a href="#">
                    <?php $image = get_field('partners_creative');?>
                    <img src="<?php echo $image['url'];?>">
                </a>
            </div>
            <div class="partners-img">
                <a href="#">
                    <?php $image = get_field('partners_shopify');?>
                    <img src="<?php echo $image['url'];?>">
                </a>
            </div>
            <div class="partners-img">
                <a href="#">
                    <?php $image = get_field('partners_amazon');?>
                    <img src="<?php echo $image['url'];?>">
                </a>
            </div>
        </div>
    </div>
</section>
<section class=" section digital-products">
    <div class="container">
        <div class="digital-products-title">
            <h2>
                <?php echo get_field('digital_products_title')?>
            </h2>
        </div>
        <div class="digital-products-text">
            <?php echo get_field('digital_products_text')?>
        </div>
        <div class="digital-products-global">
            <div class="digital-products-left">
                <div class="digital-products-left-image">
                    <a href="#">
                        <?php $image = get_field('digital_products_left_image');?>
                        <img src="<?php echo $image['url'];?>">
                    </a>
                </div>
                <span class="digital-products-app">
                    <?php echo get_field('digital_products_app')?>
                </span>
                <div class="digital-products-left-title">
                    <h3>
                        <?php echo get_field('digital_products_left_title')?>
                    </h3>
                </div>
                <div class="digital-products-left-text">
                    <?php echo get_field('digital_products_left_text')?>
                </div>
            </div>
            <div class="digital-products-right">
                <div class="digital-products-right-col">
                    <div class="digital-products-right-img-first">
                        <a href="#">
                            <?php $image = get_field('вigital_products_right_img_first');?>
                            <img src="<?php echo $image['url'];?>">
                        </a>
                    </div>
                    <span class="digital-products-app">
                        <?php echo get_field('digital_products_app')?>
                    </span>
                    <div class="digital-products-right-first-title">
                        <h5>
                            <?php echo get_field('вigital_products_right_first_title')?>
                        </h5>
                    </div>
                </div>
                <div class="digital-products-right-col">
                    <div class="digital-products-right-img-second">
                        <a href="#">
                            <?php $image = get_field('вigital_products_right_img_second');?>
                            <img src="<?php echo $image['url'];?>">
                        </a>
                    </div>
                    <span class="digital-products-app">
                        <?php echo get_field('digital_products_app')?>
                    </span>
                    <div class="digital-products-right-second-title">
                        <h5>
                            <?php echo get_field('вigital_products_right_second_title')?>
                        </h5>
                    </div>
                </div>
                <div class="digital-products-right-col">
                    <div class="digital-products-right-img-third">
                        <a href="#">
                            <?php $image = get_field('вigital_products_right_img_third');?>
                            <img src="<?php echo $image['url'];?>">
                        </a>
                    </div>
                    <span class="digital-products-app">
                        <?php echo get_field('digital_products_app')?>
                    </span>
                    <div class="digital-products-right-third-title">
                        <h5>
                            <?php echo get_field('вigital_products_right_third_title')?>
                        </h5>
                    </div>
                </div>
                <div class="digital-products-right-col">
                    <div class="digital-products-right-img-fourth">
                        <a href="#">
                            <?php $image = get_field('вigital_products_right_img_fourth');?>
                            <img src="<?php echo $image['url'];?>">
                        </a>
                    </div>
                    <span class="digital-products-app">
                        <?php echo get_field('digital_products_app')?>
                    </span>
                    <div class="digital-products-right-fourth-title">
                        <h5>
                            <?php echo get_field('вigital_products_right_fourth_title')?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>