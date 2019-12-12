<?php get_header(); ?>

    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
   
                the_post(); 

                the_content();
                
                ?>
                
                <h2 class="wpcf7_title"> Contactez-nous </h2>
                
                <?php
                echo do_shortcode('[contact-form-7 id="114" title="Contact form 1"]');

            }
        }
    ?>



<?php get_footer(); ?>