<?php
/*
*
*/
?>


<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header_area" class="<?php echo get_theme_mod( 'aw_menu_position')?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
            
                     <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod( 'aw_logo')?>" alt=""></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu( array('theme_location' => 'main_menu', 'menu_id' => 'nav') ); ?>
                </div>
            </div>
        </div>
</header>
<h1>this is error page</h1>
<h4>if any error load this page</h4>
<footer id="footer_area">
    <div id="copyright_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?php echo get_theme_mod( 'aw_footer_section'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>


<?php wp_footer(); ?>
</body>
</html>