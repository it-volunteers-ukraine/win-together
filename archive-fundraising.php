<?php get_header(); ?>

    <!--    Heading   -->
    <div class="inner-page-title-area"
         style='background-image:url("<?php echo get_field( 'fundraising_img', 'option' )['sizes']['1920x600']; ?>")'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1><span><?php the_field( 'fundraising_title', 'option' ); ?></span></h1>
                </div>
            </div>
        </div>
    </div>

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
<?php get_footer(); ?>