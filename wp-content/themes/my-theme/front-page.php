<?php get_header(); ?>

    <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                 
                $background_img_banner = get_field('banner_background_image');
                $img_section3 = get_field('programme_image');
                $img_bas_section3 = get_field('image_bas_programme');
                $img_section7 = get_field('actu_image');
                $background_img_infos = get_field('infospratiques_background_image');
                
                $img_video_droite_principale = get_field('video_principale_droite');
                $img_video_gauche_principale = get_field('video_principale_gauche');
                $img_droite1 = get_field('video_droite1');
                $img_droite2 = get_field('video_droite2');
                $img_gauche1 = get_field('video_gauche1');
                $img_gauche2 = get_field('video_gauche2');
                
                the_post(); 
                the_content();
                
        ?>

    <section class="section-1" style="background-image: url('<?php echo $background_img_banner['url']?>')">
        <p class="section-title1"><?php the_field('banner_baseline'); ?> </p>
        <p class="section-title title2"> <?php the_field('banner_title_brown'); ?> </p>
        <p class="section-title title3"> <?php the_field('banner_title_green'); ?></p>
        <a href="<?php the_field('banner_register_link')?>" class="button_sinscrire"> <?php the_field('register_title_link')?></a>
    </section>

    <section class="section-2">
        <p class="section-title1"> <?php the_field('conference_title'); ?></p>
        <p class="text1"> <?php the_field('conference_texte'); ?></p>
    </section>

    <section class="section-3">
        <div class="img_section3" style="background-image: url('<?php echo $img_section3['url']?>')"> <br/> </div>
        <div class="fond_programme">
            <p class="section-title1"> <?php echo get_field('programme_title');?> </p>
            <div class="programme">
                <div>
                    <p class="titre_programme"> <?php the_field('programme_title_left'); ?> </p>
                    <div>
                        <?php 
                            $programmeLeft = get_field('programme_list_left');
                            foreach($programmeLeft as $program){
                                echo "<div class='jour_programme'>";
                                    $heure = $program['programme_hour'];
                                    $descrip = $program['programme_description'];
                                    echo "<p>" . $heure . "</p>";
                                    echo "<p>" . $descrip . "</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
                <div>
                    <p class="titre_programme"> <?php the_field('programme_title_right'); ?> </p>
                    <div>
                        <?php 
                            $programmeRight = get_field('programme_list_right');
                            foreach($programmeRight as $program){
                                echo "<div class='jour_programme'>";
                                    $heure = $program['programme_hour2'];
                                    $descrip = $program['programme_description2'];
                                    echo "<p>" . $heure . "</p>";
                                    echo "<p>" . $descrip . "</p>";
                                echo "</div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
            <img src="<?php echo $img_bas_section3['url'] ?>" class="img_bas_prog" alt="img_bas_programme"/>
            <a href="<?php the_field('programme_link')?>" class="button_sinscrire"> <?php the_field('programme_title_link')?></a>
        </div>
        
        
    </section>

    <section class="section-4">
        <p class="section-title1"> <?php echo get_field('orateur_title');?></p>
        <p> Lorem ipsum calidae por portittor et sit amet dolor callis</p>
        <div class="groupe_personne">
            <?php 
                $orateurCard = get_field('orateur_card');
                foreach($orateurCard as $orateur){
                    echo "<div class='personne'>";
                        $img = $orateur['orateur_img'];
                        $title = $orateur['orateur_title'];
                        $contenu = $orateur['orateur_contenu'];
                        echo "<img src='" . $img['url'] . "' class='img_orateur'/>";
                        echo "<p class='titre_personne'>" . $title . "</p>";
                        echo "<p class='contenu_personne'>" . $contenu . "</p>";
                    echo "</div>";
                }
            ?>
        </div>    
    </section>
    <section class="section-5">
        <p class="section-title1" > <?php echo get_field('infospratiques_title');?></p>
        
        <div class="infopratique_fond" style="background-image: url('<?php echo $background_img_infos['url']?>')">
            <div class="cote_vert">
                <div class="contenu_carte">
                   <svg xmlns="http://www.w3.org/2000/svg" width="56" height="75" viewBox="0 0 56 75">
                       <path fill="none" fill-rule="evenodd" stroke="#FFF" stroke-width="3.5" d="M28 2c14.36 0 26 11.54 26 25.775 0 9.49-8.667 24.33-26 44.521-17.333-20.19-26-35.03-26-44.52C2 13.54 13.64 2 28 2zm0 11.556c-7.446 0-13.481 6.035-13.481 13.481S20.554 40.519 28 40.519s13.481-6.036 13.481-13.482S35.446 13.556 28 13.556z"/>
                    </svg>
                    <p class="title_icone"> <?php echo get_field('infospratiques_icone_title1') ?></p>
                </div>
                <div class="contenu_carte">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                        <path fill="#FFF" fill-rule="evenodd" d="M30.765.405c4.177 0 8.178.832 11.993 2.46 7.642 3.258 13.162 8.769 16.41 16.343a29.912 29.912 0 0 1 2.46 11.962c0 4.177-.825 8.182-2.46 11.994-3.251 7.574-8.772 13.12-16.41 16.378a30.271 30.271 0 0 1-11.993 2.456c-4.18 0-8.15-.821-11.962-2.456-7.575-3.25-13.12-8.79-16.378-16.378C.797 39.363 0 35.347 0 31.17c0-4.18.797-8.16 2.425-11.962C5.682 11.62 11.228 6.116 18.803 2.865A29.973 29.973 0 0 1 30.765.405zm0 3.707c-4.886 0-9.404 1.215-13.545 3.64-4.145 2.425-7.459 5.72-9.873 9.873-2.405 4.135-3.605 8.66-3.605 13.545 0 3.671.691 7.217 2.123 10.544 1.432 3.346 3.352 6.252 5.76 8.662 2.411 2.408 5.29 4.31 8.627 5.761 3.335 1.45 6.841 2.158 10.513 2.158 4.886 0 9.43-1.22 13.577-3.64 4.176-2.432 7.49-5.724 9.908-9.873 2.432-4.174 3.636-8.726 3.636-13.612 0-4.886-1.21-9.403-3.636-13.545-2.429-4.145-5.735-7.44-9.908-9.873-4.15-2.418-8.691-3.64-13.577-3.64zM30.879 12c1.057 0 1.98.843 1.98 1.89v17.466l9.57 9.507c.737.73.786 1.854 0 2.631-.68.675-1.948.675-2.632 0L29.58 33.414c-.41-.407-.58-.913-.513-1.521 0-.098-.067-.235-.067-.267V13.89c0-1.047.886-1.89 1.88-1.89z"/>
                    </svg>
                    <p class="title_icone"> <?php echo get_field('infospratiques_icone_title2') ?></p>
                </div>
                <div class="contenu_carte">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="61" viewBox="0 0 31 61">
                        <path fill="#FFF" fill-rule="evenodd" d="M30.184 2.985v16.93c0 .9-2.794 3.1-4.662 4.474v4.99a2.451 2.451 0 0 1 1.659 2.312v26.496c0 1.354-1.1 2.454-2.454 2.454h-1.719a2.453 2.453 0 0 1-2.451-2.454V31.691a2.45 2.45 0 0 1 1.655-2.312v-4.94c-1.982-1.363-5.029-3.611-5.029-4.525V2.985c0-1.357.657-2.454 2.121-2.454h.878v17.658c0 .423.534.762 1.193.762.66 0 1.196-.34 1.196-.762V.531h2.21v17.658c0 .423.536.762 1.195.762s1.196-.34 1.196-.762V.531h.36c1.466 0 2.652 1.097 2.652 2.454zM6.529.64S0 4.907 0 16.205v2.235c0 11.152 2.451 16.064 4.094 18.908v21.806c0 .999.811 1.81 1.813 1.81H7.18c.999 0 1.814-.811 1.814-1.81V36.282c.028-.158.047-.323.047-.49V3.146c0-1.386-.542-3.304-2.511-2.508z"/>
                    </svg>
                    <p class="title_icone"> <?php echo get_field('infospratiques_icone_title3') ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-6">
        <p class="section-title1"> <?php echo get_field('video_title');?></p>
        <div class="section-6_contenu">
            <div>
                <img src="<?php echo $img_video_gauche_principale['url']; ?>"/>
                <div>
                    <div class="rubrique">
                        <img src="<?php echo $img_gauche1['url']; ?>"/>
                        <div>
                            <p class="title_video"> <?php echo get_field('video_gauche1_title')?></p>
                            <p class="subtitle_video"> <?php echo get_field('video_gauche_soustitre1')?> </p>
                        </div>
                    </div>
                    <div class="rubrique">
                        <img src="<?php echo $img_gauche2['url']; ?>"/>
                        <div>
                            <p class="title_video"> <?php echo get_field('video_gauche2_title')?></p>
                            <p class="subtitle_video">  <?php echo get_field('video_gauche_soustitre2')?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img src="<?php echo $img_video_droite_principale['url']; ?>"/>
                <div class="rubrique">
                    <img src="<?php echo $img_droite1['url']; ?>"/>
                    <div>
                        <p class="title_video"> <?php echo get_field('video_droite1_title')?></p>
                        <p class="subtitle_video"> <?php echo get_field('video_droite_soustitre1')?> </p>
                    </div>
                </div>
                <div class="rubrique">
                    <img src="<?php echo $img_droite2['url']; ?>"/>
                    <div>
                        <p class="title_video"> <?php echo get_field('video_droite2_title')?> </p>
                        <p class="subtitle_video">  <?php echo get_field('video_droite_soustitre2')?>  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-7">
        <p class="section-title1"><?php echo get_field('actu_title');?></p>
         <div class="actu">
        <?php
                
            $query = new WP_Query(array('post_type' => 'post')); 
                while($query->have_posts()){  
                    $query->the_post();
                    
                    ?>
                    <div class="card_actu">
                            <div class="img_actu"> <?php echo the_post_thumbnail()?></div>
                            <p class="card_titre"> <?php echo get_the_title(); ?></p>
                            <p class="card_contenu"> <?php echo get_the_excerpt();?></p>
                            <a href="<?php the_permalink();?>" class="card_button"> Lire la suite </a>
                            <p class="card_date"> <?php echo get_the_date();?></p>
                    </div>
        
                    <?php
                    
                }            
            
            ?>
        </div>
    </section>

    <?php
            }
        }
    ?>



<?php get_footer(); ?>