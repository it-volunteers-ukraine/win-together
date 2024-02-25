<footer class="theme-bg-dark pt-30 pb-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 mb-20">
				<?php wp_nav_menu( array(
					'theme_location' => 'footer',
					'container'      => false,
					'menu_class'     => false,
					'menu_id'        => false,
					'echo'           => true,
					'items_wrap'     => '<ul id="%1$s" class="footer-links %2$s">%3$s</ul>',
				) );
				?>
            </div>
            <div class="col-lg-4 col-md-4 text-lg-end text-md-end text-sm-center text-center mb-20">
                <div class="footer-copyright"> © <span
                            class="current-year"></span> <?php the_field( 'copyright', 'option' ) ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- ================ Top scroll ================ -->
<a href="#" class="scroll-top"><i class="fas fa-chevron-up"></i></a>

<?php wp_footer(); ?>
</body>
</html>
