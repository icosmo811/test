<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
   
    <article class="pagina contenedor">	
		
		<?php if ( has_post_thumbnail() ) : ?>
			<figure class="pagina_thumbnail">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			</figure>
		<?php endif; ?>

		<section>
			<h1 class="pagina_titulo"><?php the_title(); ?></h1>
			<div class="pagina_meta">
				<h3 class="pagina_meta_autor">Escrito por <?php echo get_the_author_meta('first_name'); ?> <?php echo get_the_author_meta('last_name'); ?></h3> <p><?php echo get_the_date(); ?></p>
			</div>
			<div class="pagina_contenido">
				<?php the_content(); ?>	
			</div>
		</section>
	</article>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
