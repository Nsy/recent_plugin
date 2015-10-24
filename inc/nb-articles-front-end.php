<div class="section-header with-icon"><div class="icon"><span class="glyphicon glyphicon-th-list"></span></div><h5 class="text"><?php echo $title ?></h5></div>
  <p>
    <?php

    wp_reset_postdata();

    $args = array(
      'orderby' => 'date',
      'order'   => 'DESC',
      'posts_per_page'   => $nsy_nb_articles,
      );
    $query = new WP_Query($args);
    ?>

    <ul>
      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
      <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul>
</p>