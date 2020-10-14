<?php
get_header();

?>
<main class="main">
     <h3 class="heading-tertiary u-margin-bottom-big">Annonces</h3>
     <nav class="blog__categorie flex u-margin-bottom-big">

          <?php
          $categories = get_categories();
          foreach ($categories as $categorie) { ?>
          <?php echo '<div class="blog__categorie--item"><a href="' . get_category_link($categorie->term_id) . '">' . $categorie->name . '</a></div>';
          } ?>
     </nav>
     <section class="single-categorie container">
          <?php query_posts('cat=2');
          if (have_posts()) : ?>
               <?php while (have_posts()) : the_post(); ?>
                    <div class="single-categorie__list center u-margin-bottom-small">
                         <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    </li>

          <?php endwhile;
          endif; ?>
     </section>
</main>


<?php
get_footer();
?>