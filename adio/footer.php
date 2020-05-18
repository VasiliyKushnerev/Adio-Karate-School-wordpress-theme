<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adio
 */

?>

	</div><!-- #content -->
<?php global $adio_options ?>
<!--===============FOOTER========-->
<footer>
	<div class="container footer">
		<div class="row no-gutters">
			<div class="footer__one col-xs-12 col-sm-12 col-md-6 col-lg-3">
				<figure>
					<img src="<?php echo esc_url($adio_options['footer_logo']['url'])?>" alt="">
					<h4><?php echo wordwrap(esc_html(($adio_options['footer_first_title'])),3,"<br />\n")?></h4>
				</figure>
				<p><?php echo esc_attr($adio_options['footer_first_description']) ?></p>
				<ul class="d-flex">
                    <?php if ($adio_options['fb']){ ?>
						<li>
							<a href="<?php echo esc_url($adio_options['fb'])?>">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
                    <?php } ?>
                    <?php if ($adio_options['twit']){ ?>
						<li>
							<a href="<?php echo esc_url($adio_options['twit'])?>">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
					<?php } ?>
                    <?php if ($adio_options['insta']){ ?>
						<li>
							<a href="<?php echo esc_url($adio_options['insta'])?>">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
                    <?php } ?>
                    <?php if ($adio_options['pin']){ ?>
						<li>
							<a href="<?php echo esc_url($adio_options['pin'])?>">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
                    <?php } ?>
				</ul>
			</div>
			<div class="footer__two col-xs-3 col-sm-3  col-lg-3">
				<div>
					<h3><?php echo esc_html($adio_options['footer_second_title']) ?></h3>
				</div>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main menu',
                    'menu_id'        => 'primary-menu',
                    'menu_class' => 'navigations__menu',
                    'fallback_cb' => false,
                    'container'      => false,
	                'before' => '<i class="fas fa-caret-right"></i>'
                ) );
                ?>
			</div>
			<div class="footer__three col-xs-3 col-sm-3  col-lg-3">
				<div>
					<h3><?php echo esc_html($adio_options['footer_third_title']) ?></h3>
				</div>

					<?php
	                    $args = array(
	                        'post_type' => 'post',
	                        'posts_per_page' => 3
	                    );

	                    $recent = new WP_Query($args);

	                    if ($recent->have_posts()) : while ( $recent->have_posts()) : $recent->the_post();?>

					<div class="row no-gutters">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
							<a href="#">
                                <?php echo get_the_post_thumbnail( $post->ID ); ?>
							</a>
						</div>
						<div class="footer__three__text col-xs-6 col-sm-6 col-md-6 col-lg-8">
							<span><?php  echo get_the_date()?></span>
							<p><?php the_title()?></p>
						</div>
					</div>

                    <?php endwhile; endif; wp_reset_query(); ?>

			</div>
			<div class="footer__four col-xs-12 col-sm-12 col-md-6 col-lg-3">
				<div>
					<h3><?php echo esc_html($adio_options['footer_fourth_title']) ?></h3>
				</div>
				<div class="row">
					<div class="footer__four__left col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<i class="fas fa-phone"></i>
					</div>
					<div class="footer__four__right col">
						<p><?php echo esc_html($adio_options['footer_fourth_phone_1']) ?></p>
						<p><?php echo esc_html($adio_options['footer_fourth_phone_2']) ?></p>
					</div>
				</div>
				<div class="row">
					<div class="footer__four__left col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<i class="fas fa-spider"></i>
					</div>
					<div class="footer__four__right col">
						<p><?php echo esc_html($adio_options['email']) ?></p>
					</div>
				</div>
				<div class="row">
					<div class="footer__four__left col-xs-1 col-sm-1 col-md-1 col-lg-1">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="footer__four__right col">
						<p><?php echo esc_html($adio_options['footer_fourth_address']) ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="row copyr">
			<div class="footer__copyright col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><?php echo esc_html($adio_options['footer_fourth_copy']) ?></p>
			</div>
		</div>
	</div>
</footer><!--end footer-->
</div><!--end content-->
</div><!--end row-->
</div><!--end main-->

<?php wp_footer(); ?>

</body>
</html>
