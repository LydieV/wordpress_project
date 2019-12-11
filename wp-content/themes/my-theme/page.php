<?php get_header(); ?>
<h1>page.php</h1>
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
                the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
                the_content();
                
                echo do_shortcode('[contact-form-7 id="114" title="Contact form 1"]');
        ?>

<!-- VOTRE CODE HTML COMMENCE ICI -->



    <?php
            }
        }
    ?>



<?php get_footer(); ?>