<?php
/*
* The template for displaying 404 page (not found) 
*/
get_header();
?>
<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <p>404 Error - page not found</p>
                <h1>Oops! Looks Like Something was Wrong</h1>
                <div class="error_search">
                    <?php echo get_search_form( ); ?>
                </div>
                <a href="<?php echo home_url(); ?>" class="homepage">Home page</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>