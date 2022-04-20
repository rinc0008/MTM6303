<?php
/**
 * Main template file
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
 get_header(); ?> 

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <!--To display the posts page name-->
                <h1><?php _e('Posts', 'mtm6303final'); ?></h1>
              </div>
            </div>
        </div>
     </div>
 </div>

 
<div class="container">
    <div class="row">
        
                <?php
			if ( have_posts() ) :
               
				/* Start the Loop */
				while ( have_posts() ) : the_post();
                
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content');
                   	endwhile;
            endif;
            ?>
      
    </div>
</div>
<?php get_footer(); ?>