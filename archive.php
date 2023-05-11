<?php 
// The Template for displaying archive pages ...
get_header();?>
<div class="container">
category
    <?php if ( have_posts() ) : ?>
        <?php  
        // Start the loop.
        while ( have_posts() ) : the_post();
            the_title();
            the_content();
        endwhile;
    endif;
    ?>
</div>

<?php get_footer();?>
