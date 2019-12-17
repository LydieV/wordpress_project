<?php get_header(); ?>

    <?php
    ?>

    <div class="article_complet">
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                ?>
        
                <h2> <?php the_title()?></h2>
        
                <?php
                    
                the_post(); 
                the_content();
    ?>
        
    

    <?php
            }
        }
    ?>
</div>


<?php get_footer(); ?>