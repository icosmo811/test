<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mijobrands
 */

get_header(); ?>

    <!-- Bloque de inicio -->
    <section class="home_inicio">
        <?php 
        $args = array('page_id' => 5);
        $the_query = new WP_Query( $args ); ?>
        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
    </section>
    <!-- Fin bloque inicio -->

    <!-- Bloque Nosotros -->
    <span id="home_nosotros"></span>
    <section class="contenedor u-margin">
        <div class="home_nosotros">
           <?php 
           $args = array('page_id' => 7);
           $the_query = new WP_Query( $args ); ?>
           <?php if ( $the_query->have_posts() ) : ?>
               <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                   <div class="col-2-mod">
                       <div class="col home_nosotros_contenido">
                           <h3 class="home_nosotros_titulo">
                               <?php the_title(); ?>
                           </h3>
                           <div class="home_nosotros_excerpt">
                               <?php templatePart_excerpt_excerpt(); ?>                   
                           </div>
                       </div>
                       <div class="col home_nosotros_imagen">
                           <figure>
                               <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                           </figure>
                       </div>
                   </div>
               <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
           <?php else : ?>
               <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
           <?php endif; ?> 
        </div>   
    </section>
    <!-- Fin bloque Nosotros -->

    <!-- Bloque Servicios -->
    <span id="home_servicios"></span>
    <section class="home_servicios contenedor u-padding">
        <div class="col-3">
            <?php 
            $args = array('cat' => 2, 'posts_per_page' => 3);
            $the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col home_servicios_servicio">
                        <figure>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </figure>
                        <div class="home_servicios_servicio_contenido">
                            <h3 class="home_servicios_servicio_titulo">
                                <?php the_title(); ?>
                            </h3>
                            <div class="home_servicios_servicio_excerpt">
                                <?php templatePart_excerpt_excerpt(); ?>                   
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <!-- Fin bloque Servicios -->

    <!-- Bloque Blog -->
    <span id="home_blog"></span>
    <section class="home_blog contenedor u-margin">
            <?php 
            $args = array('cat' => 3, 'posts_per_page' => 1);
            $the_query = new WP_Query( $args ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-2">
                        <div class="col home_blog_contenido">
                            <h3 class="home_blog_contenido_titulo">
                                <?php the_title(); ?>
                            </h3>
                            <div class="home_blog_contenido_excerpt">
                                <?php templatePart_excerpt_excerpt(); ?>                   
                            </div>
                        </div>
                        <div class="col home_blog_imagen" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');"></div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
    </section>
    <!-- Fin bloque Blog -->

    <!-- Bloque Contacto -->
    <span id="home_contacto"></span>
    <div class="home_contacto contenedor">
        <h2>Contáctanos</h2>
        <div id="app">
            <contact-form></contact-form>
        </div>
    </div>
    <!-- Fin bloque Contacto -->


<?php get_footer(); ?>
