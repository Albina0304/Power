<?php 
// Template Name: Events
get_header();
$events = get_field('review_slider');

$args = array(  
    'post_type' => 'review_slider',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC', 
);
$events = new WP_Query( $args ); ?>
<div class="container">
    <div class="col">
        <?php 
        if ($events->posts) {
            foreach($events->posts as $event):?>
                <h4>
                    <?php echo get_the_title($event); ?>
                </h4>
            <?php endforeach;
        } ?>
    </div>
</div>
<?php
get_footer();