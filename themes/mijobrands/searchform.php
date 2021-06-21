<?php
/**
 * The template for displaying search forms in SH Base
 *
 * @package WordPress
 * @subpackage SH_Base
 * @since SH Base 1.0
 */
?>
<form id="searchform" class="header_search_form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Buscar..." value="<?php echo get_search_query(); ?>">
    <!-- <input type="submit" value="Search"> -->
</form>
