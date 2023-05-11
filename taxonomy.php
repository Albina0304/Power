<?php 
// The Template for displaying taxonomy pages ...
get_header();?>
<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php  
        // Start the loop.
        while ( have_posts() ) : the_post();?>
            <div class="col">
                <a href="<?php echo get_permalink();?>"><?php the_title();?></a>
                <?php the_content();?>
            </div>
        <?php
        endwhile;
    endif;?>
</div>
<?php get_footer();?>
