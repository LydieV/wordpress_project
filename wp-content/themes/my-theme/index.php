<?php get_header(); ?>

<div class="container">

    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                
                $background_img_banner = get_field('banner_background_image');
                $img_section3 = get_field('programme_image');
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
        ?>

<!-- VOTRE CODE HTML COMMENCE ICI -->
    <section class="section-1" style="background-image: url('<?php echo $background_img_banner['url']?>')">
        <p class="section-title1"><?php the_field('banner_baseline'); ?> </p>
        <p class="section-title title2"> <?php the_field('banner_title_brown'); ?> </p>
        <p class="section-title title3"> <?php the_field('banner_title_green'); ?></p>
        <input type="button" value="S'INSCRIRE AUX RENCONTRES" class="button_banniere"/>
    </section>

    <section class="section-2">
        <p class="section-title1"> <?php the_field('conference_title'); ?></p>
        <p class="text1"> <?php the_field('conference_texte'); ?></p>
    </section>

    <section class="section-3">
        <div class="img_section3" style="background-image: url('<?php echo $img_section3['url']?>')"> <br/> </div>
        <div class="fond_programme">
            <p class="section-title1"> AU PROGRAMME </p>
            <div class="programme">
                <div>
                    <p class="titre_programme"> Les végétaux dans la chaîne alimentaire </p>
                    <div class="jour_programme">
                        <p> 8:30 </p>
                        <p> Introduction par Christophe Fondation </p>
                    </div>
                    <div class="jour_programme">
                        <p> 9:00 </p>
                        <p> Wim de Vries Wageningen University </p>
                    </div>
                    <div class="jour_programme">
                        <p> 9:45 </p>
                        <p> Benjamin Alles Paris XIII University </p>
                    </div>
                    <div class="jour_programme">
                        <p> 10:15 </p>
                        <p> Armando Perez Cueto Copenhagen University </p>
                    </div>
                    <div class="jour_programme">
                        <p> 10:45 </p>
                        <p> Cofee break </p>
                    </div>
                </div>
                <div>
                    <p class="titre_programme"> Les activités de la fondation </p>
                    <div class="jour_programme">
                        <p> 11:15 </p>
                        <p> Jacynthe Lafrenière, Lauréate du Prix de Recherche </p>
                    </div>
                    <div class="jour_programme">
                        <p> 11:35 </p>
                        <p> Le projet EPICALIM de la Fondation </p>
                    </div>
                    <div class="jour_programme">
                        <p> 12:00 </p>
                        <p> Cérémonie du Prix de Recherche </p>
                    </div>
                    <div class="jour_programme">
                        <p> 12:30 </p>
                        <p> Lunch </p>
                    </div>
                </div>
            </div>
            <input type="button" value="S'INSCRIRE AUX RENCONTRES" class="button_banniere"/>
        </div>
        
        
    </section>
    <section>
        <p> Les orateurs</p>
        <p> Lorem ipsum calidae por portittor et sit amet dolor callis</p>
        <div>
            <img src="assets/img/portrait.jpg"/>
            <p> Wim de Vries</p>
            <p> Lorem ipsum calidae (1)</p>
            <input type="button"/>
        </div>
        <div>
        
        </div>
        <div>
        
        </div>
        <div>
        
        </div>
        <div>
        
        </div>
        <div>
        
        </div>
    
    
    </section>


    <?php
            }
        }
    ?>

</div>

<?php get_footer(); ?>