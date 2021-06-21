<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mijobrands
 */

?>
<?php if (!is_404()): ?>
    
	<footer id="colophon" class="footer u-padding">
        <div class="col-2 contenedor">
            <div class="col footer_firma">
                <p>
                    <a href="https://mijobrands.com/" target="_blank"><strong>Mijo! Brands</strong></a> <?php echo date('Y'); ?> Todos los derechos reservados
                </p>
            </div>
            <div class="col footer_redes">
                <a href="https://www.instagram.com/mijobrands/?hl=es" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://twitter.com/mijobrands?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/company/mijo-brands/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
	</footer>
</div>
<?php endif ?>


<?php wp_footer(); ?>

</body>
</html>
