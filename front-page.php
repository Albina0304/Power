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
                        <?php 
                            // echo wp_get_attachment_image($image['id'], 'primary');
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
        <?php 
        $imgs = get_field('test_repeater');
        foreach($imgs as $img) :?>
        <div class="partners-img">
                <a href="#">
                    <?php $image = get_field('partners_google');?>
                    <img src="<?php echo $img['image']['url'];?>">
                </a>
            </div>
            <!-- echo $img['image']['url']; -->
        <?php endforeach;
        ?>
        </div>
    </div>
</section>
<?php 
 $digital_products = get_field('digital_products');
?>
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
                        <img src="<?php echo $digital_products[0]['image']['url'];?>">
                    </a>
                </div>
                <span class="digital-products-app">
                    App Design - 
                    <?php echo $digital_products[0]['date'];?>
                </span>
                <div class="digital-products-left-title">
                    <h3>
                        <?php echo $digital_products[0]['title'];?>
                    </h3>
                </div>
                <div class="digital-products-left-text">
                    <?php echo $digital_products[0]['description'];?>
                </div>
            </div>
            <div class="digital-products-right">
                <?php 
                array_shift($digital_products);
                foreach($digital_products as $digital_product) :?>
                    <div class="digital-products-right-col">
                        <div class="digital-products-right-img">
                            <a href="#">
                                <?php 
                                echo wp_get_attachment_image($digital_product['image']['id'], 'custom-size');
                                ?>
                            </a>
                        </div>
                        <span class="digital-products-app">
                            App Design - 
                            <?php echo $digital_product['date']; ?>
                        </span>
                        <div class="digital-products-right-title">
                            <h5>
                                <?php echo $digital_product['title']; ?>
                            </h5>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<section class=" section reviews">
    <div class="container">
        <div class="section-title">
            <h2>Let’s hear <br> What they says</h2>
        </div>
        <div class="grid-x grid-padding-x align-center">
            <div class="cell medium-9 small-12"></div>
            <div class="cell medium-10 small-12">
                <div class="quotes"></div>
                <div class="reviews-text-slider slider-for">
                    <div class="review-comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Risus vel lobortis tincidunt fames quisque mauris at diam. Nullam morbi ipsum turpis amet id posuere torto quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
                        </p>
                    </div>
                    <div class="review-comment">
                        <p>
                            Nam nec tellus a odio tincidunt This lorem is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean nisi sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum gravida.Proin gravida nibh vel velit auctor aliquet.
                        </p>
                    </div>
                    <div class="review-comment">
                        <p>
                            Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean tincidunt sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum Photoshop.Proin gravida nibh vel velit auctor aliquet.
                        </p>
                    </div>
                    <div class="review-comment">
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.but the majority have suffered alteration in some form,
                        </p>
                    </div>
                    <div class="review-comment">
                        <p>
                            Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aliquet lorem quis tellus velit bibendum auctor, nisi elit consequat ipsum
                        </p>
                    </div>
                    <div class="review-comment">
                        <p>
                            Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem gravida tincidunt quis bibendum auctor, lorem gravida tincidunt quis bibendum auctor, nisi elit consequat ipsum
                        </p>
                    </div>
                </div>
            </div>
            <div class="cell medium-9 small-12">
                <div class="reviews-slider slider-nav">
                    <div class="review-img">
                        <img src="wp-content/themes/power/assets/images/dot3.png" style="width: 80px">
                        <div class="review-card-info">
                            <h3>
                                Ricky Aprilia
                            </h3>
                            <span>Founder of Varibo</span>
                        </div>
                    </div>
                    <div class="review-img">
                        <img src="wp-content/themes/power/assets/images/dot4.png" style="width: 80px">
                        <div class="review-card-info">
                            <h3>
                                Soyong Sourav
                            </h3>
                            <span>Founder of Varibo</span>
                        </div>
                    </div>
                    <div class="review-img">
                        <img src="wp-content/themes/power/assets/images/dot5.png" style="width: 80px">
                        <div class="review-card-info">
                            <h3>
                                Joker Buzz
                            </h3>
                            <span>Founder of Varibo</span>
                        </div>
                    </div>
                    <div class="review-img">
                        <img src="wp-content/themes/power/assets/images/dot6.png" style="width: 80px">
                        <div class="review-card-info">
                            <h3>
                                M S Nawaz 
                            </h3>
                            <span>Founder of Varibo</span>
                        </div>
                    </div>
                    <div class="review-img">
                        <img src="wp-content/themes/power/assets/images/dot1.png" style="width: 80px">
                        <div class="review-card-info">
                            <h3>
                                Chowchilla Madera
                            </h3>
                            <span>Founder of Varibo</span>
                        </div>
                    </div>
                    <div class="review-img">
                        <img src="wp-content/themes/power/assets/images/dot2.png" style="width: 80px">
                        <div class="review-card-info">
                            <h3>
                                Kattie Luis
                            </h3>
                            <span>Founder of Varibo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>