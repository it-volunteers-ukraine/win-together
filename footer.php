<footer class="theme-bg-dark pt-30 pb-10">
    <div class="container">

        <div class="mb-12">
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

        <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 mb-2 mb-md-0">
                <div class="footer-copyright text-md-start text-center"> © <span
                            class="current-year"></span> <?php the_field( 'copyright', 'option' ) ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 mb-2 mb-md-0 text-lg-end text-center">
                <div class="footer-creators">Cайт розроблено
                    <a href="https://it-volunteers.com/" target="_blank">IT-Volunteers</a>
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
