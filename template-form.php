<?php 
get_header();
// Template Name: Form
;?>
<div class="container">
    <div class="section record">
        <div class="form-title">
            <h2>
                <?php echo get_field('form_title')?>
            </h2>
        </div>
        <?php $records = get_field('record_repeater');?>
        <div class="records-form">
            <form action="">
                <?php echo do_shortcode('[contact-form-7 id="357" title="Record Form"]');?>
            </form>
        </div>
    </div>
</div>
<?php 
get_footer();