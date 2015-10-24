<p>
	<label>Titre</label>
	<input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
	Vous affichez:
	<?php echo $nsy_tax; ?>
</p>
<p>
	<label>Que voulez-vous afficher ?</label>
	<select name="<?php echo $this->get_field_name('nsy_tax'); ?>">
	 <option <?php if ($nsy_tax == 'tags') { ?> selected="selected" <?php } ?> value="tags">Tags</option>
	 <option <?php if ($nsy_tax == 'categories') { ?> selected="selected" <?php } ?> value="categories">Categories</option>
	</select>
</p>