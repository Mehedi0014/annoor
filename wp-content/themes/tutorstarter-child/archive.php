<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tutor_Starter
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="container-archive-page">
    <div class="container-fluid pr-0 pl-0">
        <div class="background-overlay" style="background-image : url(<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/image/archive-page-title-bg-img.jpg' ); ?>)">
            <div class="content">
                <header>
                    <?php
                        the_archive_title( '<h1 class="page-title">', '</h1>' );
                        the_archive_description( '<div class="archive-description">', '</div>' );
                    ?>
                </header>                            
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-3">		

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">



            <?php if ( have_posts() ) : ?>

<div class="row">
    <?php while ( have_posts() ) : ?>                
        <div class="col-md-4 col-sm-6">
            <?php the_post(); ?>

            <div class="archive-post">
                <div class="archive-post-thumbnail-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="archive-post-content-wrapper">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="post-meta"><?php echo get_the_date(); ?></div>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="post-read-more">
                            <a href="<?php the_permalink(); ?>">
                            বিস্তারিত পড়ুন »
                                </a>
                        </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php
the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( '« Previous', 'tutorstarter' ),
    'next_text' => __( 'Next »', 'tutorstarter' ),
) );
?>

<?php else : ?>
<?php get_template_part( 'views/content', 'none' ); ?>
<?php endif; ?>


                

            </main>
        </div>	

    </div>
</div>

<?php
get_footer();