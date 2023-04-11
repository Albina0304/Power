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
                            $link = get_field('hero_btn_secondary');
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
        <?php 
        $imgs = get_field('test_repeater');
        foreach($imgs as $img) :?>
            <div class="partners-img">
                <a href="#">
                    <?php $image = get_field('partners_google');?>
                    <img src="<?php echo $img['partners_google']['url'];?>">
                </a>
            </div>
        <?php endforeach;
        ?>
        </div>
    </div>
</section>
<?php 
 $digital_products = get_field('digital_products_posts');
?>
<section class=" section digital-products">
    <div class="container">
        <div class="digital-products-description">
            <div class="digital-products-title">
                <h2>
                    <?php echo get_field('digital_products_title')?>
                </h2>
            </div>
            <div class="digital-products-text">
                <?php echo get_field('digital_products_text')?>
            </div>
        </div>
        <div class="digital-products-global">
            <div class="digital-products-left">
                <div class="digital-products-left-image">
                    <a href="#">
                        <?php print_r(get_the_post_thumbnail($digital_products[0]))?>
                    </a>
                </div>
                <span class="digital-products-app">
                    <?php print_r(get_field('post_date', $digital_products[0]->ID))?>
                </span>
                <div class="digital-products-left-title">
                    <h3>
                        <a href="<?php echo get_permalink($digital_products[0]->ID)?>">
                            <?php echo $digital_products[0]->post_title;?>
                        </a>
                    </h3>
                </div>
                <div class="digital-products-left-text">
                    <?php print_r($digital_products[0]->post_content);?>
                </div>
            </div>
            <div class="digital-products-right">
                <?php 
                array_shift($digital_products);
                foreach($digital_products as $digital_product) :?>
                    <div class="digital-products-right-col">
                        <div class="digital-products-right-img">
                            <?php print_r(get_the_post_thumbnail($digital_product))?>
                        </div>
                        <span class="digital-products-app">
                            <?php print_r(get_field('post_date',$digital_product->ID));?>
                        </span>
                        <div class="digital-products-right-title">
                            <h5>
                                <a href="<?php echo get_permalink($digital_product->ID)?>">
                                    <?php echo $digital_product->post_title ?> 
                                </a>
                            </h5>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php $review_repeat_images = get_field('review_repeat_images');?>
<section class=" section reviews">
    <div class="container">
        <div class="reviews-global">
            <div class="reviews-decor-top">
                <img src="<?php echo get_template_directory_uri().'/assets/images/bg.png';?>">
            </div>
            <div class="section-title">
                <h2>
                    <?php echo get_field('reviews_title')?>
                </h2>
            </div>
            <div class="grid-x grid-padding-x align-center">
                <div class="cell medium-9 small-12"></div>
                <div class="cell medium-10 small-12">
                    <div class="quotes"></div>
                    <div class="reviews-text-slider slider-for">
                    <?php 
                    $revcoms = (get_field('review_comment'));
                    foreach($revcoms as $revcom):?>
                        <div class="review-comment">
                            <?php echo $revcom['comment'];?> 
                        </div>
                    <?php endforeach;?>
                    </div>
                </div>
                <div class="cell medium-9 small-12">
                    <div class="reviews-slider slider-nav">
                    <?php 
                    $repeat_images = (get_field('review_repeat_image'));
                    foreach($repeat_images as $repeat_img):?>
                        <div class="review-img">
                            <div class="review-image">
                                <?php echo wp_get_attachment_image($repeat_img['review_repeat_img']['id'], 'sm-img');?>
                            </div>
                            <div class="review-card-info">
                                <h3>
                                    <?php echo $repeat_img['review_repeat_title']; ?>
                                </h3>
                                <span>
                                    <?php echo $repeat_img['review_repeat_text']; ?>
                                </span>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="reviews-decor-bottom">
                <img src="<?php echo get_template_directory_uri().'/assets/images/bg.png';?>">
            </div>
        </div>
    </div>
</section>
<section class=" section support">
    <div class="container">
        <div class="support-global">
            <div class="support-left">
                <div class="support-left-title">
                    <h2>
                        <?php echo get_field('support_left_title')?>
                    </h2>
                </div>
                <div class="support-left-text">
                    <?php echo get_field('support_left_text')?>
                </div>
                <?php $form_img = get_field('support_form_img');?>
                <div class="support-form">
                    <form action="">
                    <div class="support-form-img">
                        <img src="<?php echo $form_img['url'];?>">
                    </div>
                        <div class="support-button">
                            <input name="name" type="text" placeholder="Enter your email address">
                        </div>
                        <div class="support-form-button">
                        <?php 
                            $link = get_field('support_form_button');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="btn btn-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="support-right">
                <div class="support-colons">
                    <?php 
                    $supcols = (get_field('support_col'));
                    foreach($supcols as $supcol):?>
                    <div class="support-col">
                        <div class="support-col-img">
                            <a href="#">
                                <?php echo wp_get_attachment_image($supcol['support_col_img']['id'], 'sm-img');?>
                            </a>
                        </div>
                        <div class="support-col-title">
                            <h4>
                                <?php echo $supcols[0]['support_col_title'];?>
                            </h4>
                        </div>
                        <div class="support-col-text">
                            <p>
                                <?php echo $supcols[0]['support_col_text'];?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>