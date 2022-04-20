<?php
/**
 * Template part for displaying page content in template-contact.php
 *
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

<br>
<div class="section-container no-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="col-xs-12 background-image-container" style="background-image: url('<?php echo $featured_img_url; ?>)">
            </div>
        </div>
    </div>
</div>
<body>

<div class="text-center">
    <h1><?php echo get_the_title(); ?></h1>
</div> 

<div class="section-container no-padding">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12">

                <div class="row">
                    <div class="col-md-6">
                        <form action="" class="reveal-content contact-form">
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mtm6303final' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                        </form>
                    </div>
                    <?php get_sidebar(); ?>


<!--
<div class="section-container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <?php /* the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                     </div>   
                        <?php
                            the_content();

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . __( 'Pages:', 'mt6303assignment' ),
                                'after'  => '</div>',
                            ) );
                        */?>
               </div>
            </div>
        </div>
    </div>
</div> -->