<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */

get_header(); ?>

	<section class="contenedor u-padding">

		<?php if ( have_posts() ) : ?>

	        <section class="">            

	            <!-- Título -->
	            <h1 class="">
	                <?php printf( __( 'Resultados para: %s', '' ), '<span>' . get_search_query() . '</span>' ); ?>
	            </h1>		
	    		<!-- Artículos -->
	            <?php while ( have_posts() ) : the_post(); ?>
	                
	                <article class="u-padding">
	                	<h1><?php the_title(); ?></h1>
	                	<div>
	                		<?php the_excerpt(); ?>
	                	</div>
	                	<a href="<?php the_permalink(); ?>">Leer más</a>
	                </article>
	      
	            <?php endwhile; ?>

	        </section>

	    <?php else : ?>
	        
	        <article class=""> 
	            
	            <h1 class="">Sin resultados</h1>            
	            <p>Parece que lo que buscas no existe. ¿Por qué no intentas de nuevo buscar el contenido que deseas? <strong>¡Suerte!</strong></p>
	        
	        </article>
	  
	    <?php endif; ?>

	</section>


<?php get_footer(); ?>