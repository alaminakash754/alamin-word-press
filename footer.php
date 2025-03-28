<?php
/**
 *Theme footer section
 * it will be visible on every page 
 */
?>

<footer id="footer_area">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">               
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
                <div class="col-md-4">               
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
                <div class="col-md-4">               
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?php echo get_theme_mod( 'aw_footer_section'); ?>
                    </p>
                </div>
            </div>
        </div>
</section>

</footer>

<?php wp_footer(); ?>
</body>
</html>