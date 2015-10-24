<div class="wrap">

  <div id="icon-options-general" class="icon32"></div>
  <h2>Blog Widget Options</h2>

  <div id="poststuff">

    <div id="post-body" class="metabox-holder columns-2">

      <!-- main content -->
      <div id="post-body-content">

        <div class="meta-box-sortables ui-sortable">

          <div class="postbox">

            <h3>Articles récents (Actuellement: <?php echo $nsy_nb_articles ?>)</h3>

            <div class="inside">


            <form name="nsy_blog_settings_nb_articles_form" method="post" action="">
            <input type="hidden" name="nsy_blog_settings_form_submitted" value="Y"> <!-- add this hidden input -->
              <table class="form-table">

                <tr valign="top">
                    <td>
                      <label for="nsy_nb_articles">Montrer combien d'articles ?</label>
                    </td>
                    <td><input name="nsy_nb_articles" id="nsy_nb_articles" type="number" value="<?php echo $nsy_nb_articles ?>" class="small" /><br></td>
                </tr>
              </table>
              <p>
                <input name="nsy_nb_articles_submit" class="button-primary" type="submit" name="Example" value="Enregistrer" />
              </p>

            </form>



            </div>
            <!-- .inside -->

          </div>
          <!-- .postbox -->

        </div>
        <!-- .meta-box-sortables .ui-sortable -->

      </div>
      <!-- post-body-content -->

      <!-- sidebar -->
      <div id="postbox-container-1" class="postbox-container">

        <div class="meta-box-sortables">

          <div class="postbox">

            <h3><span>Articles récents (Affichage)</span></h3>

            <div class="inside">

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
                <li><?php the_title(); ?> <a href="<?php the_permalink() ?>">(lien)</a></li>
              <?php endwhile; ?>
              </ul>

            </div>

    </ul>
  </div>





            <!-- .inside -->

          </div>
          <!-- .postbox -->

        </div>
        <!-- .meta-box-sortables -->

      </div>
      <!-- #postbox-container-1 .postbox-container -->

    </div>
    <!-- #post-body .metabox-holder .columns-2 -->

    <br class="clear">
  </div>
  <!-- #poststuff -->

</div> <!-- .wrap -->