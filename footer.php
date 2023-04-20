        </div>
        <footer class="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-top-logo">
                        <a href="<?php echo get_site_url()?>" class="brand">
                            <svg width="94" height="38" viewBox="0 0 94 38" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.592 16.688V12.464H17.824C19.456 12.464 20.152 13.28 20.152 14.576C20.152 15.872 19.456 16.688 17.824 16.688H15.592ZM24.328 14.576C24.328 11.48 22.264 9.152 18.136 9.152H11.488V26H15.592V19.952H18.136C22.432 19.952 24.328 17.36 24.328 14.576ZM39.6436 19.304C39.6436 15.056 36.6196 12.416 32.6836 12.416C28.7716 12.416 25.7236 15.056 25.7236 19.304C25.7236 23.552 28.6996 26.192 32.6356 26.192C36.5716 26.192 39.6436 23.552 39.6436 19.304ZM29.8996 19.304C29.8996 17.024 31.1956 15.968 32.6836 15.968C34.1236 15.968 35.4676 17.024 35.4676 19.304C35.4676 21.56 34.0996 22.64 32.6356 22.64C31.1476 22.64 29.8996 21.56 29.8996 19.304ZM44.1518 26H48.6638L50.8478 17.312L52.9598 26H57.4958L61.1198 12.608H57.2558L55.3838 22.136L53.1038 12.608H48.7598L46.5038 22.184L44.6078 12.608H40.5038L44.1518 26ZM68.6639 15.704C70.0319 15.704 71.1839 16.544 71.1839 18.008H66.0479C66.2879 16.52 67.3199 15.704 68.6639 15.704ZM75.0719 21.56H70.7039C70.3679 22.28 69.7199 22.856 68.5679 22.856C67.2479 22.856 66.1679 22.04 66.0239 20.288H75.3119C75.3599 19.88 75.3839 19.472 75.3839 19.088C75.3839 15.008 72.6239 12.416 68.7119 12.416C64.7279 12.416 61.9439 15.056 61.9439 19.304C61.9439 23.552 64.7759 26.192 68.7119 26.192C72.0479 26.192 74.4239 24.176 75.0719 21.56ZM81.7279 19.784C81.7279 17.48 82.8559 16.808 84.7999 16.808H85.9279V12.464C84.1279 12.464 82.6639 13.424 81.7279 14.84V12.608H77.6239V26H81.7279V19.784Z" fill="white"/><circle cx="91" cy="24" r="3" fill="#706FE5"/><path d="M16 30C16 31.5823 15.5308 33.129 14.6518 34.4446C13.7727 35.7602 12.5233 36.7855 11.0615 37.391C9.59966 37.9965 7.99113 38.155 6.43928 37.8463C4.88743 37.5376 3.46197 36.7757 2.34315 35.6569C1.22433 34.538 0.4624 33.1126 0.153718 31.5607C-0.154964 30.0089 0.00346269 28.4003 0.608964 26.9385C1.21446 25.4767 2.23984 24.2273 3.55544 23.3482C4.87103 22.4692 6.41775 22 8 22L8 30H16Z" fill="#706FE5"/></svg>
                        </a>
                    </div>
                    <div class="footer-top-socials">
                        <?php 
                        $socials = (get_field('footer_top_social'));
                        if ($socials) {
                            foreach($socials as $social):?>
                                <div class="footer-top-social"> 
                                    <?php if ($social['footer_top_icon']):?>
                                        <div class="footer-top-icon">
                                            <a href="<?php echo $social['social_link']['url'] ?>" target="blank">
                                                <?php echo wp_get_attachment_image($social['footer_top_icon']['id'], 'sm-img');?>
                                            </a>
                                        </div>
                                    <?php endif;?>
                                </div>
                            <?php endforeach;
                        } ?>
                    </div>
                </div>
                <div class="footer-border"></div>
                <div class="accordion" id="accordionFlushExample">
                        <div class="footer-colon">
                            <div id="footer-nav-1">
                                <span class="footer-colon-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#footer-item-1" aria-expanded="false" aria-controls="footer-item-1">
                                    <h5 class="footer-bottom-title-accordion">
                                        <?php echo get_field('footer_bottom_title')?>
                                        <span class="footer-plus">
                                            <svg version='1.1' xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 20 20'><path d='M17.418 6.109c0.272-0.268 0.709-0.268 0.979 0s0.271 0.701 0 0.969l-7.908 7.83c-0.27 0.268-0.707 0.268-0.979 0l-7.908-7.83c-0.27-0.268-0.27-0.701 0-0.969s0.709-0.268 0.979 0l7.419 7.141 7.418-7.141z'></path></svg>
                                        </span>
                                    </h5>
                                </span>
                            </div>
                            <div id="footer-item-1" class="collapse hide" aria-labelledby="footer-nav-1" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="footer-wrapper footer-nav">
                                        <?php
                                        $menu_args = array(
                                            'theme_location' => 'footer_menu',
                                            'menu_class' => 'footer-navigation'
                                        );
                                        wp_nav_menu($menu_args);?>
                                    </ul>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <h5 class="footer-bottom-title">
                            <?php echo get_field('footer_bottom_title')?>
                        </h5>
                        <div class="footer-bottom-navigation">
                            <div class="footer-bottom-nav">
                                <ul class="footer-wrapper footer-nav">
                                    <?php
                                    $menu_args = array(
                                        'theme_location' => 'footer_menu',
                                        'menu_class' => 'footer-navigation'
                                    );
                                    wp_nav_menu($menu_args);?>
                                </ul>
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
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom-copy">
                        <span>
                            &copy; power 2021 - All Rights Reserved
                        </span>
                    </div>
                </div>
            </footer>
        <?php wp_footer()?>
    </body>
</html>