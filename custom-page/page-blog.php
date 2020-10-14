<?php

/**
 * Template Name: Blog
 *
 */
get_header();
?>
<main class="main">
     <section class="blog container">
          <h3 class="heading-tertiary u-margin-bottom-big">Quoi de neuf?</h3>
          <nav class="blog__categorie flex u-margin-bottom-big">

               <?php
               $categories = get_categories();
               foreach ($categories as $categorie) { ?>
               <?php echo '<div class="blog__categorie--item"><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></div>';
               } ?>
          </nav>
          <?php

          // affiche les 6 articles les plus récents


          $wp_query = new WP_Query(array('posts_per_page' => 6));

          if ($wp_query->have_posts()) :
               while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <article class="blog__article flex u-margin-bottom-big">
                         <div class="blog__article--thumb">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                         </div>
                         <div class="blog__article--item">
                              <div class="blog__text">
                                   <h4 class="heading-quaternary u-margin-bottom-xsmall"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <h5 class="heading-category u-padding-bottom-normal"> Catégorie:
                                             <?php foreach ((get_the_category()) as $cat) {
                                                  echo $cat->name;
                                             }
                                             ?>
                                        </h5>
                                        <p><?php the_excerpt('Suite'); ?></p>
                              </div>
                         </div>

                    </article>


          <?php endwhile;
          endif; ?>

     </section>

</main>


<?php
get_footer();
?>