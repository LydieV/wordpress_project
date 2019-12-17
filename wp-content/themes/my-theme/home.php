<?php get_header(); ?>

<div class="section-7 pageactu">
    <h1> Les actus </h1>
    <?php
        if ( have_posts() ) {
            echo "<div class='actu'>";
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
     */?>
                <div class="card_actu">
                            <div class="img_actu"> <?php echo the_post_thumbnail()?></div>
                            <p class="card_titre"> <?php echo get_the_title(); ?></p>
                            <p class="card_contenu"> <?php echo get_the_excerpt();?></p>
                            <a href="<?php the_permalink();?>" class="card_button"> Lire la suite </a>
                            <p class="card_date"> <?php echo get_the_date();?></p>
                    </div>

    <?php
            }
            echo "</div>";
        }
    ?>

</div>

<?php get_footer(); ?>