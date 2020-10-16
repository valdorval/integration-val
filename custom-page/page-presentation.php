<?php

/**
 * Template Name: Présentation
 *
 */

get_header();

?>
<main class="main">
     <section class="presentation container">
          <h3 class="heading-tertiary u-margin-top-normal u-margin-bottom-normal">Découvrez notre équipe de passionnés!</h3>
          <p class="center u-padding-top-big u-padding-bottom-big p-title">Team SVB est au service des entreprises depuis plusieurs années en proposant des solutions web faciles d’utilisation et adaptées à tous les besoins.</p>

          <article class="flex presentation__box u-margin-bottom-big u-margin-top-big">
               <div class="presentation__profil">
                    <div class="presentation__profil--container">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/001-clown.png" alt="image Safa">
                    </div>
               </div>
               <div class="presentation__content">
                    <h4 class="heading-quaternary u-margin-bottom-xsmall">Safa</h4>
                    <p>Créative et déterminée à offrir à tous les clients une expérience exceptionnelle, Safa se démarque par son élaboration de stratégies novatrices et modernes. Le CSS fait partie de son quotidien, tout comme Photoshop et Illustrator qui n'ont plus aucun secret pour elle. C'est également elle qui réalise les thèmes graphiques pour vous permettre de créer de jolis sites! </p>
               </div>
          </article>
          <article class="flex presentation__box u-margin-bottom-big">
               <div class="presentation__profil">
                    <div class="presentation__profil--container">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/003-wrestler.png" alt="image Valérie">
                    </div>
               </div>
               <div class="presentation__content">
                    <h4 class="heading-quaternary u-margin-bottom-xsmall">Valérie</h4>
                    <p>Avant-gardiste et pragmatique, Valérie possède une expérience solide qui lui offre une forte capacité à envisager toutes les situations dans leur ensemble sans négliger pour autant les détails. Sa devise: "Être à votre service pour que votre application Internet vous convienne à la perfection!". Consciencieuse et méthodique, elle permet de faire aboutir au mieux les projets qui sont confiés à l'équipe.</p>
               </div>
          </article>
          <article class="flex presentation__box u-margin-bottom-big">
               <div class="presentation__profil">
                    <div class="presentation__profil--container">
                         <img src="<?php echo get_template_directory_uri(); ?>/img/002-cat.png" alt="image Bianka">
                    </div>
               </div>
               <div class="presentation__content">
                    <h4 class="heading-quaternary u-margin-bottom-xsmall">Bianka</h4>
                    <p>Volontaire, dynamique et, surtout, toujours résolue à explorer de nouvelles avenues. Bianka apporte un point de vue rafraîchissant pour mener les projets de l'entreprises vers l'avant. Elle affectionne particulièrement la mise au point de nouvelles architectures logicielles et l'élaboration de solutions innovantes dépassant les limites de l'algorithmie classique. Elle est en charge du code et de la stabilité des différentes plateformes.</p>
               </div>
          </article>
     </section>
</main>

<?php
get_footer();
?>