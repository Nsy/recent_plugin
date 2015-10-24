<p>
	<label>Title</label>
	<input class="widefat" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
	Nombres à afficher:
	<?php echo $nsy_nb_articles; ?>
</p>
<p>
	<label>Combien d'articles récents voulez-vous afficher ?</label>
	<input size="4", name="<?php echo $this->get_field_name('nsy_nb_articles'); ?>" type="number" value="<?php echo $nsy_nb_articles; ?>" />
</p>