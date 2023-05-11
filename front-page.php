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
                                $link_target = $link['target'] ? $link['target'] : '_self';?>
                                <a class="hero-products-link" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['title'] ); ?>">
                                    <?php echo esc_html( $link['title'] ); ?>
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
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <a class="btn btn-secondary" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['title'] ); ?>">
                                <?php echo esc_html( $link['title'] ); ?>
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
                            <a class="btn-video" data-bs-toggle="modal" data-bs-target="#hero-modal" href="<?php echo esc_url( $link['url'] ); ?>"target="<?php echo esc_attr( $link['title'] );?>">
                                <?php echo esc_html( $link['title'] );?>
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
                        
                        <?php echo wp_get_attachment_image($hero['image']['ID'], 'main-size') ?>
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
<?php $digital_products = get_field('digital_products');?>
<section class=" section digital-products">
    <div class="container">
        <div class="digital-products-description">
            <div class="digital-products-title">
                <h2>
                    <?php echo $digital_products['title'] ?>
                </h2>
            </div>
            <div class="digital-products-text">
                <?php echo $digital_products['description']?>
            </div>
        </div>
        <div class="digital-products-global">
            <div class="digital-products-left">
                <?php if ($digital_products['posts'][0]):?>
                    <div class="digital-products-left-image">
                        <a href="<?php echo get_permalink($digital_products['posts'][0])?>">
                            <?php echo get_the_post_thumbnail($digital_products['posts'][0], 'custom-size')?>
                        </a>
                    </div>
                <?php endif;?>
                <span class="digital-products-app">
                    <?php if (isset($digital_products['posts'][0])):?>
                        <?php echo get_field('post_date', $digital_products['posts'][0]->ID)?>
                    <?php endif;?>
                </span>
                <?php $left_title = get_field('digital_products_left_title');?>
                <?php if (isset($digital_products['posts'][0]->post_title)):?>
                    <div class="digital-products-left-title">
                        <h3>
                            <a href="<?php echo get_permalink($left_title)?>">
                                <?php echo $digital_products['posts'][0]->post_title;?>
                            </a>
                        </h3>
                    </div>
                <?php endif;?>
                <?php $left_text = get_field('digital_products_left_text');?>
                <?php if (isset($digital_products['posts'][0]->post_content)):?>
                    <div class="digital-products-left-text">
                        <?php echo $digital_products['posts'][0]->post_content;?>
                    </div>
                <?php endif;?>
            </div>
            <div class="digital-products-right">
            <?php 
            array_shift($digital_products['posts']);
                foreach($digital_products['posts'] as $digital_product) :?>
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
                                <?php echo get_field('post_date',$digital_product->ID);?>
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
<?php $reviews_group = get_field('reviews_group');?>
    <section class=" section reviews">
        <div class="container">
            <div class="reviews-global">
                <div class="reviews-decor-top">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/bg.png';?>">
                </div>
                <div class="section-title">
                    <h2>
                        <?php echo $reviews_group['reviews_title']; ?>
                    </h2>
                </div>
                <div class="reviews-wrapper">
                    <div class="cell cell-global"></div>
                    <div class="cell">
                        <div class="quotes"></div>
                        <div class="reviews-text-slider">
                            <?php 
                            if($reviews_group['reviews']):
                                foreach($reviews_group['reviews'] as $revcom):?>
                                    <?php if($revcom):?>
                                        <div class="review-comment">
                                            <?php echo $revcom->post_content;?> 
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="cell">
                        <div class="reviews-slider slider-nav">
                            <?php 
                            if ($reviews_group['reviews']) {
                                foreach($reviews_group['reviews'] as $review_comment):?>
                                    <div class="review-img">
                                        <?php 
                                        $image = get_the_post_thumbnail($review_comment);
                                        if ($image):?>
                                            <div class="review-image">
                                                <?php echo $image ;?>
                                            </div>
                                        <?php endif;?>
                                        <div class="review-card-info">
                                            <?php if (isset($review_comment)):?>
                                                <h3>
                                                    <?php echo get_the_title($review_comment); ?>
                                                </h3>
                                            <?php endif;?>
                                            <?php 
                                            $position = get_field('position', $review_comment->ID);
                                            if ($position):?>
                                                <span>
                                                    <?php echo $position; ?>
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
    <?php $supgroup = get_field('support_group') ;?>
        <div class="support-global">
            <div class="support-left">
                <div class="support-left-title">
                    <h2>
                        <?php echo $supgroup['left_title']?>
                    </h2>
                </div>
                <div class="support-left-text">
                    <?php echo $supgroup['left_text']?>
                </div>
                <div class="support-form">
                    <form action="">
                        <div class="support-form-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/images/email.png';?>">
                        </div>
                        <div class="support-button">
                            <input name="name" type="text" placeholder="Enter your email address">
                        </div>
                        <div class="support-form-button">
                            <?php 
                            $link = $supgroup['form_button'];
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
                    foreach($supgroup['support_colons'] as $supcol):?>
                        <div class="support-col">
                                <div class="support-col-img">
                                    <a href="#">
                                        <?php echo wp_get_attachment_image($supcol['image']['ID'], 'sm-img');?>
                                    </a>
                                </div>
                            <?php if ($supcol['title']):?>
                                <div class="support-col-title">
                                    <h4>
                                        <?php echo $supcol['title'];?>
                                    </h4>
                                </div>
                            <?php endif;?>
                            <?php if ($supcol['text']) :?>
                                <div class="support-col-text">
                                    <p>
                                        <?php echo $supcol['text'];?>
                                    </p>
                                </div>
                            <?php endif;?>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>