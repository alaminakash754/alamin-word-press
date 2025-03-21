<?php
/*
* This template for displaying pages 
*/


get_header();
?>
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php get_template_part('template_part/post_setup'); ?>
                <!-- <img src="<?php esc_url($post->guid); ?>" alt="<?php exc_url(get_the_title()); ?>" > -->
                 <?php var_export($pos); ?>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="com-md-12">
            <h3>Template: attachment.php</h3>
        </div>
    </div>
</div>
<?php
get_footer();
?>