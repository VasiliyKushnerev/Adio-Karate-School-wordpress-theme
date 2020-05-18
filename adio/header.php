<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php global $adio_options ?>
<div class="main container-fluid">
	<div class="row no-gutters">
		<!--===============MOBILE MENU========-->
		<div class="mobile-menu d-md-none col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row no-gutters">
				<div class="mobile-menu__left col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p><?php echo esc_html(mb_substr($adio_options['adioslogan'],0,4,'utf-8'))?></p>
				</div>
				<div class="mobile-menu__right col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="toggle-switch">
						<span></span>
					</div>
				</div>
			</div>
			<div class="toggle-block">
				<div class="toggle-block-container">
					<div class="contact">
						<?php if($adio_options['phone']){?>
						<ul class="contact__phone">
							<li><i class="fa fa-phone"></i></li>
							<li><?php echo esc_html($adio_options['phone']) ?></li>
						</ul>
						<?php }?>
                        <?php if($adio_options['email']){?>
							<ul class="contact__mail">
								<li><i class="fa fa-spider"></i></li>
								<li><?php echo esc_html($adio_options['email']) ?> </li>
							</ul>
                        <?php }?>
					</div>
					<?php wp_nav_menu( array(
						'theme_location' => 'main menu',
						'menu_id'        => 'primary-menu',
                        'fallback_cb' => false,
						'menu_class' => 'main__nav',
						'container'      => false
					) );
					?>
				</div>
			</div>
		</div>
		<div class="clear"></div>

		<!--===============SIDEBAR========-->
		<div class="sidebar">
			<button class="sidebar__click">
				<i class="fa fa-angle-left"></i>
			</button>
			<div class="navigation">
				<ul class="navigation__top-nav">
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><p><?php echo esc_html(mb_substr($adio_options['adioslogan'],0,4,'utf-8'))?></p></a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($adio_options['adiologo']['url'])?>" alt="" width="73" height="108"></a>
					</li>
				</ul>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'main menu',
                    'menu_id'        => 'primary-menu',
	                'fallback_cb' => false,
	                'menu_class' => 'navigation__menu',
	                'container'      => false
                ) );
                ?>
				<ul class="social">
                    <?php if ($adio_options['fb']){ ?>
						<li>
							<form action="<?php echo esc_url($adio_options['fb'])?>">
								<button class="btn social__btn-icon">
									<i class="fab fa-facebook-f"></i>
								</button>
							</form>
						</li>
                    <?php } ?>
					<?php if ($adio_options['twit']){ ?>
						<li>
							<form action="<?php echo esc_url($adio_options['twit'])?>">
								<button class="btn social__btn-icon">
									<i class="fab fa-twitter"></i>
								</button>
							</form>
						</li>
					<?php } ?>
                    <?php if ($adio_options['insta']){ ?>
						<li>
							<form action="<?php echo esc_url($adio_options['insta'])?>">
								<button class="btn social__btn-icon">
									<i class="fab fa-instagram"></i>
								</button>
							</form>
						</li>
					<?php } ?>
                    <?php if ($adio_options['pin']){ ?>
						<li>
							<form action="<?php echo esc_url($adio_options['pin'])?>">
								<button class="btn social__btn-icon">
									<i class="fab fa-pinterest-p"></i>
								</button>
							</form>
						</li>
                    <?php } ?>
				</ul>
			</div>
		</div><!--end sidebar-->
		<!--===============CONTENT========-->
		<div class="content col">
			<!--===============HEADER========-->
			<header>
				<div class="container-fluid">
					<div class="row no-gutters">
						<div class="main_head-hp1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="header__slide">
								<div class="slide">
									<div style="background: url(<?php echo esc_attr($adio_options['background']['url'])?>) 50% 0 no-repeat; background-size: cover;"class="header__slide__part__one one">
										<div class="contact">
                                            <?php if($adio_options['phone']){?>
												<ul class="contact__phone">
													<li><i class="fa fa-phone"></i></li>
													<li><?php echo esc_html($adio_options['phone']) ?></li>
												</ul>
											<?php } ?>
                                            <?php if($adio_options['email']){?>
												<ul class="contact__mail">
													<li><i class="fa fa-spider"></i></li>
													<li><?php echo esc_html($adio_options['email']) ?> </li>
												</ul>
                                            <?php } ?>
										</div>
										<div data-aos="fade-up" data-aos-duration="1500" class="header">
											<h1><?php echo esc_html($adio_options['header']) ?></h1>
											<p><span><?php echo esc_html($adio_options['sub_title_open']) ?></span> <?php echo esc_html($adio_options['sub_title_first']) ?></p>
											<p><?php echo esc_html($adio_options['sub_title_second']) ?></p>

										</div>
									</div>
								</div>
							</div>
							<div class="main_head__buttons">
								<?php if($adio_options['switch_button']== 1){?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="btn main_head__buttons__btn-main"><?php echo esc_attr($adio_options['title_button']) ?></a>
								<?php } ?>

							</div>
						</div>
					</div>
				</div>

			</header>
			<div id="content" class="site-content">












