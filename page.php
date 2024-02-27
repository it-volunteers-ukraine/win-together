<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-it-volunteers
 */

get_header();
?>

	<main id="primary" class="site-main">

        <!--    Card grid   -->
        <div class="services-area pt-80 pb-50">
            <div class="container">
                <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1">
					<?php $args = ( [
						'posts_per_page' => - 1,
						'post_type'      => 'fundraising',
					] );
						$query  = new WP_Query( $args );
						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) :
								$query->the_post(); ?>

								<?php get_template_part( 'template-parts/content', 'fundraising-card' ); ?>

							<?php endwhile;
							wp_reset_postdata();
						endif; ?>
                </div>
            </div>
        </div>

	</main>

<?php
get_sidebar();
get_footer();
