<?php
/**
 * Template part for displaying page content in home.php
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package MTM6303 Final
 * @subpackage MTM6303_Final
 * @since MTM6303 Final 1.0
 */
?>

<br>
<div class="white-text-container background-image-container" style="background-image: url('<?php echo get_stylesheet_directory_uri()?>/assets/images/img-home.jpg')">
    <div class="opacity"></div>
    <div class="container">
        <div class="row">   
           
            <div class="col-md-6">
                <?php
                    $the_query = new WP_Query( 'page_id=12' );
                    while ( $the_query->have_posts() ):
                    $the_query->the_post();
                ?>
                <h1><?php the_title();?></h1>
                
                <p><?php
                    the_excerpt();
                    //echo wp_trim_words(the_content(), 40, '...' );
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </p>
                 <a href="/about" title="" class="btn btn-lg btn-primary">See More</a>
            </div>

        </div>
    </div>
</div>


<div class="section-container background-color-container white-text-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="text-center">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                     </div>   
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mtm6303assignment' ),
                                'after'  => '</div>',
                            ) );
                        ?>
            </div>
        </div>
     </div>
 </div>