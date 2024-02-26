<div class="col mb-30">
    <div class="service-item">
        <div class="ser-img mb-25"><img src="<?php echo get_field( 'img_card' )['sizes']['450x600']; ?>"
                                        alt="<?php echo get_field( 'img_card' )['alt']; ?>">
        </div>
        <div class="description">
            <h6><?php the_field( 'title' ); ?></h6>
            <p><?php the_field( 'description' ); ?></p>
            <a href="<?php the_permalink(); ?>"
               class="btn-style-3"><?php the_field( 'btn_card' ); ?>
                <i class="fas fa-caret-right"></i></a>
        </div>
    </div>
</div>