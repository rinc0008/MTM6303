<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */

?>
<?php 
//To add img banner in wordpress dashboard
    $featured_img_url = get_the_post_thumbnail_url (); 
        if (empty($featured_img_url)){
            $featured_img_url = get_stylesheet_directory_uri () . "/assets/images/img-home.jpg"; 
        }
?>

<div class="">
    <div class="container">
        <div class="row">

		<div class="col-xs-12 background-image-container" style="background-image: url('<?php echo $featured_img_url; ?>)">
            </div>
        </div>
    </div>
</div>

<div class="text-center">
    <h1><?php echo get_the_title(); ?></h1>
</div> 

<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                     </div>   
					 <p class="section-container-spacer">
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mtm6303final' ),
                                'after'  => '</div>',
                            ) );
                        ?>
					</p>
               </div>
            </div>
        </div>
    </div>
</div>
