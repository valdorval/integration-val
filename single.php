<?php

get_header();
?>

<main class="main">
     <nav class="blog__categorie flex u-margin-bottom-big">

          <?php
          $categories = get_categories();
          foreach ($categories as $categorie) { ?>
          <?php echo '<div class="blog__categorie--item"><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></div>';
          } ?>
     </nav>


     <section class="single-page container">
          <?php while (have_posts()) : the_post(); ?>

               <h3 class="heading-tertiary"><?php the_title(); ?></h3>
               <div class="single-page__info flex u-margin-top-xsmall">
                    <p>Auteur: <?php the_author(); ?></p>
                    <p>Date de publication: <?php the_date(); ?></p>
               </div>
               <div class="single-page__excerpt u-margin-top-big">
                    <?php the_excerpt(); ?>
               </div>
               <div class="single-page__img center u-margin-top-normal u-margin-bottom-big">
                    <?php the_post_thumbnail(); ?>

               </div>

               <div class="single-page__content">
                    <?php the_content(); ?>
               </div>

     </section>


<?php endwhile; ?>
</main>

<?php
get_footer();
?>