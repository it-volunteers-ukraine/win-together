<?php get_header(); ?>

    <!-- ================ Banner area ================ -->
    <div class="inner-page-title-area"
         style='background-image:url("<?php echo esc_url( get_field( 'fundraising_img', 'option' )['sizes']['1920x600'] ); ?>")'>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <h1><span><?php the_field( 'fundraising_title', 'option' ); ?></span></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- ================ Banner area end ================ -->


    <!-- ================ Card grid ================ -->
    <div class="services-area pt-80 pb-50">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1 row-cols-1">
				<?php $args       = ( [
//					'posts_per_page' => 6,  // page size set with WP reading setting
					'post_type'      => 'fundraising',
					'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
				] );
					$query        = new WP_Query( $args );
					$total_pages  = $query->max_num_pages;
					$current_page = max( 1, get_query_var( 'paged' ) );
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post(); ?>

							<?php get_template_part( 'template-parts/content', 'fundraising-card' ); ?>

						<?php endwhile;
						wp_reset_postdata();
					endif; ?>
            </div>

            <div class="custom-pagination d-flex justify-content-center">
				<?php
					echo paginate_links( [
						'base'      => get_pagenum_link( 1 ) . '%_%',
						'format'    => '/page/%#%',
						'current'   => $current_page,
						'total'     => $total_pages,
						'prev_text'          => '<',
						'next_text'          => '>',
						'show_all'  => $total_pages <= 5,
						'end_size'  => 1,
						'mid_size'  => ( $current_page === 1 ) || ( $current_page == $total_pages ) ? 3 : 1,
					] );
				?>
            </div>
        </div>
    </div>
    <!-- ================ Card grid end ================ -->


<?php get_footer(); ?>