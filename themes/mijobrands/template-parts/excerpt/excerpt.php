<div class="excerpt">
	<?php the_excerpt(); ?>
</div>

<div class="excerpt_meta">
	<div class="fecha">
		<?php echo get_the_date(); ?>
	</div>
	<div class="leerMas">
		<a href="<?php the_permalink(); ?>">Leer más</a>
	</div>
</div>
