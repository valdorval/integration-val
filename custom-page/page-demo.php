<?php

/**
 * Template Name: Démo
 *
 */
get_header();
?>

<main class="main">
     <section class="demo">
          <div class="container">
               <h3 class="heading-tertiary u-margin-bottom-big">Découvrez l'extension EZ Tracking</h3>
               <?php echo do_shortcode("[formulairecrm]") ?>
          </div>

          <div class="demo__banner u-margin-top-big u-margin-bottom-big">
               <h3 class="heading-tertiary heading-tertiary--light">Suivis clients</h3>
          </div>

          <?php echo do_shortcode("[suivis]") ?>


     </section>
</main>


<?php
get_footer();
?>