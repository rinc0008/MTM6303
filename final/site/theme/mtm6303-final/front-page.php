<?php
/**
 * Front page template template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 */
get_header() ;?>

<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'home' );

			endwhile; // End of the loop.
			?>

<div class="container"><br>
<?php 
do_shortcode("[mtm6303finalplugin]");?>
<div><br>

<?php get_footer() ; ?> 
