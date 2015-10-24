<div id="tags-list" class="section-container clearfix">
  <div class="section-header with-icon"><div class="icon"><span class="glyphicon glyphicon-tag"></span></div><h5 class="text"><?php echo $title ?></h5></div>
  <div class="section-content clearfix">
    <ul class="blog-tag-list">
<?php
      if ($nsy_tax == 'categories') {
        $categories = get_categories();
        foreach($categories as $category) {
?>

          <li><a href="<?php echo get_category_link($category->term_id); ?>">

<?php
            echo $category->name;
            echo '</a></li>';
          }
        }

      if ($nsy_tax == 'tags') {
        $tags = get_tags();
        foreach($tags as $tag) {
?>
          <li><a href="<?php echo get_tag_link($tag->term_id); ?>">


<?php
          echo $tag->name;
          echo '</a></li>';
          }
      }
?>
      </ul>
    </div>
  </div>