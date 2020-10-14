<?php

get_header();
?>

<main class="main">

     <?php while (have_posts()) : the_post(); ?>

          <h3 class="heading-tertiary"><?php the_title(); ?></h3>
          <p><?php the_author(); ?></p>
          <p><?php the_date(); ?></p>
          <?php

          the_post_thumbnail();
          the_content();

          ?>


          <?php

          ?>

     <?php endwhile; ?>
</main>




<?php

get_footer();
?>