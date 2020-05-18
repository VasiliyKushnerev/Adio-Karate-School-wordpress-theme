<?php
/**
 * Template Name: Homepage
 */
get_header();
?>

	<!--===============PHYLOSOPHY========-->
	<section id="phylosophy" class="ident">
        <div class="container philosophy">
            <div class="glav">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_title',true))?></h2>
            </div>
            <div class="row phylosophy__row no-gutters">
                <div class="phylosophy__left col-xs-6 col-sm-12 col-md-12 col-lg-6">
                    <h4 data-aos="fade-up" data-aos-duration="1500"><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_subtitle',true))?></h4>
                    <p data-aos="fade-up" data-aos-duration="1500"><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_description',true))?></p>
                    <figure data-aos="fade-up" data-aos-duration="1500">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_small_title_1',true))?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_small_description_1',true))?></p>
                    </figure>
                    <figure data-aos="fade-up" data-aos-duration="1500">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_small_title_2',true))?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_small_description_2',true))?></p>
                    </figure>
                    <figure data-aos="fade-up" data-aos-duration="1500">
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_small_title_3',true))?></h3>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_philosophy_small_description_3',true))?></p>
                    </figure>
                </div>
                <div class="phylosophy__right col-xs-6 col-sm-10 col-md-9 col-lg-6">
                    <img src="<?php echo esc_url(get_post_meta(get_the_ID(),'adio_philosophy_image',true))?>" alt="">
                    <div class="philosophy__fon"></div>
                </div>
            </div>
        </div>
    </section><!--end phylosophy-->
	<!--===============OFFER========-->
	<?php if((get_post_meta(get_the_ID(),'adio_offer_section',true)) == 'enable'){ ?>
		<section id="offer">
	        <div class="container-fluid offer">
	            <div class="row justify-content-between no-gutters">
	                <div class="offer__left col-xs-12 col-sm-12 col-md-6 col-lg-6">
	                    <div data-aos="fade-right" data-aos-duration="1000" class="offer__left-substrate">
	                        <img src="<?php echo esc_url(get_post_meta(get_the_ID(),'adio_offer_image',true))?>" alt="">
	                    </div>
	                </div>
	                <div class="offer__right col-xs-12 col-sm-12 col-md-12 col-lg-6">
	                    <div class="offer__right-substrate">
	                        <div class="offer__right-substrate__content">
	                            <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_offer_overtitle',true))?></h3>
	                            <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_offer_title',true))?></p>
	                            <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_offer_subtitle',true))?></p>
	                            <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_offer_description',true))?></p>
	                            <a href="<?php the_permalink() ?>" class="btn offer__btn-main"><?php echo esc_html(get_post_meta(get_the_ID(),'adio_offer_button_title',true))?></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
		</section><!--end offer-->
	<?php } ?>
	<!--===============FEATERES========-->
	<?php if((get_post_meta(get_the_ID(),'adio_features_section',true)) == 'enable'){ ?>
		<section id="features">
		    <div class="container features">
		        <div class="glav">
		            <h2><?php echo esc_html(get_post_meta(get_the_ID(),'adio_features_title',true))?></h2>
		        </div>
		        <div class="features__row row no-gutters" style="background: url(<?php echo esc_attr(get_post_meta(get_the_ID(),'adio_features_background',true))?>)   51% 102% no-repeat;">
		            <div data-aos="zoom-in-down" data-aos-duration="1000" class="features__left  col-xs-12 col-sm-12 col-md-5 col-lg-6">
					    <?php
					    $args = array(
					        'post_type' => 'features-left',
					        'posts_per_page' => 3
					    );

					    $featureleft = new WP_Query($args);

					    if ($featureleft->have_posts()) : while ( $featureleft->have_posts()) : $featureleft->the_post();?>
					                <figure>
					                    <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_features_subtitle',true))?></h3>
					                    <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_features_description',true))?></p>
					                    <span>
					                        <i class="<?php echo esc_attr(get_post_meta(get_the_ID(),'adio_features_icon',true))?>"></i>
					                     </span>
					                </figure>
					    <?php endwhile; endif; wp_reset_query(); ?>

					            </div>
		           <div data-aos="zoom-in-down" data-aos-duration="1000" class="features__right col-xs-12 col-sm-12 col-md-5 col-lg-6">
					    <?php
					    $args = array(
					        'post_type' => 'features-right',
					        'posts_per_page' => 3
					    );

					    $featureright = new WP_Query($args);

					    if ($featureright->have_posts()) : while ( $featureright->have_posts()) : $featureright->the_post();?>
						    <figure>
							    <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_features_subtitle_right',true))?></h3>
							    <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_features_description_right',true))?></p>
							    <span>
					                        <i class="<?php echo esc_attr(get_post_meta(get_the_ID(),'adio_features_icon_right',true))?>"></i>
					                     </span>
						    </figure>
					    <?php endwhile; endif; wp_reset_query(); ?>
		            </div>
		        </div>
		    </div>
        </section><!--end features-->
	<?php } ?>
	<!--===============PRICE========-->
    <?php if((get_post_meta(get_the_ID(),'adio_price_section',true)) == 'enable'){ ?>
		<section id="price">
        <div class="container price">
            <div class="row">
			    <?php
			    $args = array(
			        'post_type' => 'price',
			        'posts_per_page' => 3
			    );
                $i = 0;
			    $price = new WP_Query($args);

			    if ($price->have_posts()) : while ( $price->have_posts()) : $price->the_post();

				    if($i==0){
				    	$class = 'data-aos="fade-up" data-aos-duration="1000"';
				    }
					elseif ($i==2){
                        $class = 'data-aos="fade-up" data-aos-duration="1000"';
					}
					else{
                        $class = '';
					}
                    $i++;
				    ?>

                    <div <?php echo $class ?> class="col-xs-3 col-sm-12 col-md-9 col-lg-4">
                    <figure>
                        <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_price_title',true))?></h3>
                        <span><?php echo esc_html(get_post_meta(get_the_ID(),'adio_price_value',true))?></span>
                        <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_price_description',true))?></p>
                        <a href="#" class="btn price__btn-main"><?php echo esc_html(get_post_meta(get_the_ID(),'adio_price_button_title',true))?></a>
                    </figure>
                </div>

                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
      </section><!--end price-->
	<?php } ?>
	<!--===============CLASSES========-->
    <?php if((get_post_meta(get_the_ID(),'adio_classes_section',true)) == 'enable'){ ?>
	<section id="classes">
	    <div class="classes container">
	        <div class="classes__glav glav">
	            <h2><?php echo esc_html(get_post_meta(get_the_ID(),'adio_classes_title',true))?></h2>
	        </div>
	            <div class="row no-gutters classes__row">
				    <?php
				    $args = array(
				        'post_type' => 'classes',
				        'posts_per_page' => 3
				    );
				    $i = 0;
				    $classes = new WP_Query($args);

				    if ($classes->have_posts()) : while ( $classes->have_posts()) : $classes->the_post();

                        if($i==0){
                            $class = 'data-aos="fade-right" data-aos-duration="800" data-aos-offset="0"';
                        }
					    elseif ($i==2){
                            $class = 'data-aos="fade-left" data-aos-duration="800" data-aos-offset="0"';
                        }
                        else{
                            $class = '';
				        }
				        $i++;
				        ?>
					        <div class="classes__left col-xs-4 col-sm-12 col-md-12 col-lg-4">
						        <figure <?php echo $class ?> style="background: url(<?php echo esc_attr(get_post_meta(get_the_ID(),'adio_classes_image',true))?>) 50% 0 no-repeat; background-size: cover;" class="classes_main_figure">
							        <figure class="classes__figure">
								        <div class="classes__figure__content">
									        <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_classes_subtitle',true))?></h3>
									        <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_classes_description',true))?></p>
	                                    </div>
				                    </figure>
				                    <figure class="classes__img">
				                        <a href="#"><span><?php echo esc_html(get_post_meta(get_the_ID(),'adio_classes_subtitle',true))?></span></a>
				                    </figure>
				                </figure>
				            </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
	            </div>

	    </div>
    </section><!--end classes-->
	<?php } ?>
	<!--===============TRAINERS========-->
    <?php if((get_post_meta(get_the_ID(),'adio_trainers_section',true)) == 'enable'){ ?>
	<section id="trainers">
	    <div class="trainers container">
	        <div class="glav">
	            <h2><?php echo esc_html(get_post_meta(get_the_ID(),'adio_trainers_title',true))?></h2>
	        </div>
		    <div class="row">
				<?php
					$args = array(
					    'post_type' => 'trainers',
					    'posts_per_page' => -1
					);

					$trainers = new WP_Query($args);

					if ($trainers->have_posts()) : while ( $trainers->have_posts()) : $trainers->the_post();


			    ?>

			            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
			                <div class="row">
			                    <div data-aos="fade-up" data-aos-duration="1500" class="trainers__left-photo col-xs-12 col-sm-6 col-md-6 col-lg-6">
			                        <div class="trainers__left-photo__hidden">
			                            <img src="<?php echo esc_url(get_post_meta(get_the_ID(),'adio_trainers_image',true))?>" alt="">
			                            <div class="trainers__left-photo__hidden__content">
			                                <a href="#"><i class="fas fa-lock-open"></i></a>
			                            </div>
			                        </div>
			                    </div>
			                    <div class="trainers__left-cont col-xs-12 col-sm-6 col-md-6 col-lg-6">
			                        <a href="#">
			                            <h3><?php echo esc_html(get_post_meta(get_the_ID(),'adio_trainers_header',true))?></h3>
			                            <h4><?php echo esc_html(get_post_meta(get_the_ID(),'adio_trainers_subtitle',true))?></h4>
			                        </a>
			                        <p><?php echo esc_html(get_post_meta(get_the_ID(),'adio_trainers_description',true))?></p>
			                        <ul>
			                            <li>
			                                <button type="button" class="btn social__btn-icon">
			                                        <i class="fab fa-facebook-f"></i>
			                                </button>
			                            </li>
			                            <li>
			                                <button type="button" class="btn social__btn-icon">
			                                        <i class="fab fa-twitter"></i>
			                                </button>
			                            </li>
			                            <li>
			                                <button type="button" class="btn social__btn-icon">
			                                        <i class="fab fa-pinterest-p"></i>
			                                </button>
			                            </li>
			                        </ul>
			                    </div>
			                </div>
			            </div>

				<?php endwhile; endif; wp_reset_query(); ?>
	        </div>
    </section><!--end trainers-->
	<?php } ?>
	<!--===============CLIENT SAYS========-->
    <?php if((get_post_meta(get_the_ID(),'adio_clients_section',true)) == 'enable'){ ?>
		<section id="says" style="background: url(<?php echo esc_attr(get_post_meta(get_the_ID(),'adio_client_image',true))?>)  no-repeat; background-size: cover;">
		    <div class="container-fluid says">
		        <div class="glav">
		            <h2><?php echo esc_html(get_post_meta(get_the_ID(),'adio_client_title',true))?></h2>
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="says__main col-xs-12 col-sm-12 col-md-12 col-lg-12">
		                    <div class="says__main__slide">
								    <?php
									    $args = array(
									        'post_type' => 'testimonials',
									        'posts_per_page' => -1
									    );

									    $testimonials = new WP_Query($args);

									    if ($testimonials->have_posts()) : while ( $testimonials->have_posts()) : $testimonials->the_post();


								    ?>
				                        <div class="says__main__slide__prew">
					                        <div class="slide_image">
						                        <img src="<?php echo esc_url(get_post_meta(get_the_ID(),'adio_testimonials_image',true))?>" alt="">
					                        </div>
					                        <?php
						                        $title = esc_html(get_post_meta(get_the_ID(),'adio_testimonials_name',true));
						                        $title = explode(" ", $title, 2);
					                        ?>
					                        <h4><?php echo '<span>' . $title[0] . '</span> ' . $title[1]; ?></h4>
				                            <p><?php echo '"'.esc_html(get_post_meta(get_the_ID(),'adio_testimonials_description',true)).' "'?></p>
	                                    </div>
                                    <?php endwhile; endif; wp_reset_query(); ?>
		                    </div>
		                    <div class="says__main__nav">
		                        <div class="says__main__nav__prew"><i class="fa fa-angle-left"></i></div>
		                        <ul class="says__main__nav__dotts">
		                        </ul>
		                        <div class="says__main__nav__next"><i class="fa fa-angle-right"></i></div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
    </section><!--end says-->
	<?php } ?>
	<!--===============LATEST NEWS========-->
    <?php if((get_post_meta(get_the_ID(),'adio_news_section',true)) == 'enable'){ ?>
		<section id="news">
        <div class="container news">
            <div class="glav">
                <h2><?php echo esc_html(get_post_meta(get_the_ID(),'adio_news_title',true))?></h2>
            </div>
            <div class="row">
				<?php
				$args = array(
				    'post_type' => 'post',
				    'posts_per_page' => 3
				);
                $i = 0;
				$news = new WP_Query($args);

				if ($news->have_posts()) : while ( $news->have_posts()) : $news->the_post();
                    if($i==0){
                        $class = 'data-aos="zoom-in-right" data-aos-duration="1000" data-aos-offset="0"';
                    }
					elseif ($i==2){
                        $class = 'data-aos="zoom-in-left" data-aos-duration="1000" data-aos-offset="0"';
                    }
                    else{
                        $class = '';
                    }
                    $i++;
                    ?>
                <div <?php echo $class ?> class="news__one col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="news__main">
                        <div class="news__main__top">
                            <?php echo get_the_post_thumbnail( $post->ID ); ?>
                            <span><?php  echo get_the_date('j M. Y')?></span>
                        </div>
                        <div class="news__comments d-flex">
                            <div class="news__comments__left d-flex ">
                                <i class="fas fa-user"></i>
                                <p><?php echo ucfirst(get_the_author()); ?></p>
                            </div>
                            <div class="news__comments__right d-flex ">
                                <i class="fas fa-comment"></i>
                                <p><?php comments_number('0'); ?></p>
                            </div>
                        </div>
                        <?php the_excerpt(); ?>
                        <a href="#">
                            <i class="news__fab fas fa-share"></i>
                        </a>
                    </div>
                </div>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </section><!--end news-->
	<?php } ?>

	<!--===============MAP========-->
    <?php if((get_post_meta(get_the_ID(),'adio_map_section',true)) == 'enable'){ ?>
		<section id="map">
                            <div class="container-fluid map">
                                <div class="row no-gutters">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <?php echo get_post_meta(get_the_ID(),'adio_map_frame',true)?>
                                    </div>
                                </div>
                            </div>
                        </section><!--end map-->
	<?php } ?>


<?php get_footer(); ?>