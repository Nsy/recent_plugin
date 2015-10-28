
<div id="sidebar-news" class="section-container clearfix" style="padding-bottom: 10px;">
  <div class="section-header with-icon" style="margin-bottom: 10px;"><div class="icon"><span class="glyphicon glyphicon-th-list"></span></div><h5 class="text"><?php echo $title ?></h5></div>
  <div class="section-content clearfix">

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

      <ul class="vertical-simple-list w-dates">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li class="item clearfix">

          <!--<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>-->
          <div class="item-content" style="margin-left: -5px;">
            <div class="date">
              <div class="day"><?php echo get_the_date('d'); ?></div>
              <div class="month"><?php echo get_the_date("M"); ?></div>
            </div>
            <h6 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h6>
          </div>

        </li>
      <?php endwhile; ?>
    </ul>
  </p>
</div>
</div>