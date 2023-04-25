<?php get_header();?>
<section class=" section hero">
    <div class="container">
        <?php $hero = get_field('hero') ;?>
        <div class="hero-global">
            <div class="hero-colon-left">
                <div class="hero-title">
                    <h1>
                        <?php echo $hero['title']?>
                        <span class="hero-products">
                            <?php 
                            $link = get_field('hero_products_link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';?>
                                <a class="hero-products-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php endif; ?>
                        </span>
                        <span class="hero-background"></span>
                    </h1> 
                </div>
                <div class="hero-text">
                    <?php echo $hero['text']?>
                </div>
                <div class="section-button-wrapper">
                    <div class="section-button">
                        <?php 
                        $link = get_field('hero_btn_secondary');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="btn btn-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                <?php echo esc_html( $link_title ); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="section-button">
                        <a class="btn-video" data-bs-toggle="modal" data-bs-target="#hero-modal" href="#">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/Button.png';?>">
                        </a>
                        <?php 
                        $link = get_field('btn_video');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="btn-video" data-bs-toggle="modal" data-bs-target="#hero-modal" href="<?php echo esc_url( $link_url ); ?>"target="<?php echo esc_attr( $link_target );?>">
                                <?php echo esc_html( $link_title );?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="hero-colon-right">
                <div class="hero-colon-right-images">
                    <div class="hero-img-bg">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/background-girl.png';?>"> 
                    </div>
                    <div class="hero-img-global">
                        
                        <?php echo wp_get_attachment_image($hero['image'] ['ID'], 'main-size') ?>
                    </div>
                    <div class="hero-img-first">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/xd.png';?>">
                    </div>
                    <div class="hero-img-second">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/figma.png';?>">
                    </div>
                    <div class="hero-img-last">
                        <img src="<?php echo get_template_directory_uri().'/assets/images/diamond.png';?>">
                    </div>
                    <div class="hero-img-local">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/local.png';?>">
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
<?php $comrep = get_field('companies_repeater'); ?>
<section class="section partners">
    <div class="container">
        <div class="partners-title">
            <h4>
                <?php echo get_field('partners_title')?>
            </h4>
        </div>
        <div class="partners-images">
        <?php 
            foreach($comrep as $img) :
                if($img['partners']): ?>
                    <div class="partners-img">
                        <a href="<?php echo $img['partners_link']['url'] ?>" target="blank">
                            <?php echo wp_get_attachment_image($img['partners']['ID']); ?>
                        </a>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</section>
<?php $digital_products = get_field('digital_products_posts');?>
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
                <?php if (($digital_products[0])):?>
                    <div class="digital-products-left-image">
                        <a href="<?php echo get_permalink($digital_products[0])?>">
                            <?php echo get_the_post_thumbnail($digital_products[0], 'custom-size')?>
                        </a>
                    </div>
                <?php endif;?>
                <span class="digital-products-app">
                    <?php if (($digital_products[0])):?>
                        <?php echo get_field('post_date', $digital_products[0])?>
                    <?php endif;?>
                </span>
                <?php $left_title = get_field('digital_products_left_title');?>
                <div class="digital-products-left-title">
                    <?php if ($left_title):?>
                        
                        <h3>
                            <a href="<?php echo get_permalink($left_title)?>">
                                <?php echo $left_title;?>
                            </a>
                        </h3>
                    <?php endif;?>
                </div>
                <?php $left_text = get_field('digital_products_left_text');?>
                <div class="digital-products-left-text">
                    <?php if ($left_text):?>
                        <?php echo $left_text;?>
                    <?php endif;?>
                </div>
            </div>
            <div class="digital-products-right">
            <?php 
            array_shift($digital_products);
                foreach($digital_products as $digital_product) :?>
                    <div class="digital-products-right-col">
                        <?php if ($digital_product):?>
                            <div class="digital-products-right-img">
                                <a href="<?php echo get_permalink($digital_product)?>">
                                    <?php echo get_the_post_thumbnail($digital_product, 'primary')?>
                                </a>
                            </div>
                        <?php endif;?>
                        <span class="digital-products-app">
                            <?php if ('post_date'):?>
                                <?php echo get_field('post_date',$digital_product);?>
                            <?php endif;?>
                        </span>
                        <div class="digital-products-right-title">
                            <?php if ($digital_product->post_title):?>
                                <h5>
                                    <a href="<?php echo get_permalink($digital_product->ID)?>">
                                        <?php echo $digital_product->post_title ?> 
                                    </a>
                                </h5>
                            <?php endif;?>
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
                <div class="reviews-wrapper">
                    <div class="cell cell-global"></div>
                    <div class="cell">
                        <div class="quotes"></div>
                        <div class="reviews-text-slider">
                            <?php 
                            $revcoms = get_field('review_comment');
                            if ($revcoms) {
                                foreach($revcoms as $revcom):?>
                                    <?php if ($revcom['comment']):?>
                                        <div class="review-comment">
                                            <?php echo $revcom['comment'];?> 
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;
                            } ?>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="reviews-slider slider-nav">
                            <?php 
                            $repeat_images = get_field('review_repeat_image');
                            if ($repeat_images) {
                                foreach($repeat_images as $repeat_img):?>
                                    <div class="review-img">
                                        <?php if ($repeat_img['review_repeat_img']):?>
                                            <div class="review-image">
                                                <?php echo wp_get_attachment_image($repeat_img['review_repeat_img']['id'], 'sm-img');?>
                                            </div>
                                        <?php endif;?>
                                        <div class="review-card-info">
                                            <?php if ($repeat_img['review_repeat_title']):?>
                                                <h3>
                                                    <?php echo $repeat_img['review_repeat_title']; ?>
                                                </h3>
                                            <?php endif;?>
                                            <?php if ($repeat_img['review_repeat_text']):?>
                                                <span>
                                                    <?php echo $repeat_img['review_repeat_text']; ?>
                                                </span>
                                            <?php endif;?>
                                        </div>
                                    </div>
                                <?php endforeach;
                            } ?>
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
                                <a class="btn btn-secondary" href="<?php echo esc_url( $link_url ); ?>" target="
                                    <?php echo esc_attr( $link_target ); ?>">
                                    <?php echo esc_html( $link_title ); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="support-right">
                <div class="support-colons">
                    <?php 
                    $supcols = get_field('support_col');
                    if ($supcols) {
                        foreach($supcols as $supcol):?>
                            <div class="support-col">
                                <?php if ($supcol['support_col_img']):?>
                                    <div class="support-col-img">
                                        <a href="#">
                                            <?php echo wp_get_attachment_image($supcol['support_col_img']['id'], 'sm-img');?>
                                        </a>
                                    </div>
                                <?php endif;?>
                                <?php if ($supcol['support_col_title']):?>
                                    <div class="support-col-title">
                                        <h4>
                                            <?php echo $supcol['support_col_title'];?>
                                        </h4>
                                    </div>
                                <?php endif;?>
                                <?php if ($supcol['support_col_text']) :?>
                                    <div class="support-col-text">
                                        <p>
                                            <?php echo $supcol['support_col_text'];?>
                                        </p>
                                    </div>
                                <?php endif;?>
                            </div>
                        <?php endforeach;
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>