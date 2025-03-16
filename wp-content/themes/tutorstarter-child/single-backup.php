<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tutor_Starter
 */

defined( 'ABSPATH' ) || exit;

get_header();
$sidebar = get_theme_mod( 'sidebar_type_single' );
?>

<div class="container-fluid">
    <div class="row">
        <?php if ( 'sidebar_left' === $sidebar ) : ?>
            <div id="sidebar" class="col-sm-3">
                <?php get_sidebar(); ?>
            </div><!-- .col- -->
        <?php endif; ?>
        
        <div class="<?php echo 'sidebar_none' === $sidebar || false === $sidebar ? 'col-lg-10 col-sm-10 m-auto' : 'col-sm-9'; ?>">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">

                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'views/content', get_post_format() );
                    ?>

                    <!-- Related Posts Section -->
                    <div class="related-posts">
                        <h3 class="related-title">সম্পর্কিত পোস্ট</h3>
                        <div class="row">
                            <?php
                            $categories = get_the_category();
                            if ($categories) {
                                $category_ids = array();
                                foreach ($categories as $category) {
                                    $category_ids[] = $category->term_id;
                                }

                                $related_args = array(
                                    'category__in'   => $category_ids,
                                    'post__not_in'   => array(get_the_ID()), // Exclude current post
                                    'posts_per_page' => 3, // Show 3 related posts
                                    'orderby'        => 'rand' // Random order
                                );

                                $related_query = new WP_Query($related_args);

                                if ($related_query->have_posts()) {
                                    while ($related_query->have_posts()) {
                                        $related_query->the_post();
                                        ?>
                                        <div class="col-md-4">
                                            <div class="card related-card">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top img-fluid" alt="<?php the_title(); ?>">
                                                    </a>
                                                <?php endif; ?>
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h5>
                                                    <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                                                    <a href="<?php the_permalink(); ?>" class="read-more">পড়তে পড়ুন</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                wp_reset_postdata();
                            }
                            ?>
                        </div>
                    </div>
                    <!-- End Related Posts -->

                    <?php
                        // Comments Section
                        if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .col- -->
        
        <?php if ( 'sidebar_right' === $sidebar ) : ?>
            <div id="sidebar" class="col-sm-3">
                <?php get_sidebar(); ?>
            </div><!-- .col- -->
        <?php endif; ?>
    </div><!-- .row -->
</div><!-- .container -->

<?php
get_footer();
?>

