<?php
/**
 * Template Name: Left and Right Sidebar Layout
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12" id="primary">

				<main class="site-main" id="main" role="main">

					<section>

						<div class="row no-gutters">

							<div class="col-sm-8">

								<div class="home-tall headline purple">

									<h1>Welcome to Beautiful Recordings</h1>

								</div>

							</div>

							<div class="col-sm-4">

								<div class="home-tall headline pink">
									<p>
										Established in 2015 and rejuvenated for 2017, Beautiful Recordings catalogue an eclectic collection of music.
									</p>

								</div>

							</div>

						</div>

					</section>

					<section>


						<div class="embed-responsive embed-responsive-16by9">

				  			<iframe src="https://www.youtube.com/embed/btVmrsiDYsc?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>

						</div>


					</section>

					<section>

						<div class="row no-gutters">

							<div class="col-sm-6">

								<div class="home-tall pink">

									<p>
										We started up as a platform for the release of Morrell’s Late Nights series of E.P’s in January 2015...
									</p>

								</div>

							</div>

							<div class="col-sm-6">

								<div class="home-tall purple">

									<p>
										...but we were pretty busy making music, so we didn't have any time to make the web site.
									</p>

								</div>

							</div>

						</div>

					</section>

					<section class="product-preview">
						<div class="row">
							<div class="col-md-12">
								<div class="product-preview-title purple">
									<h2>Recent Releases</h2>
								</div>
							</div>
						</div>
						<div class="row no-gutters">
							<?php
							$args = array( 'post_type' => 'product', 'posts_per_page' => 4, 'orderby' => 'rand' );
							$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post(); global $product;

									$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' ); ?>

									<div class="col-lg-6">
										<div class="product-preview-wrapper">
											<a href="<?php echo get_permalink($product_id) ?>">
												<div class="row">
													<div class="col-sm-4">
														<div class="product-preview-image">
															<img class="img-responsive" src=" <?php  echo $image[0]; ?> " data-id=" <?php echo $loop->post->ID; ?> ">
															<div class="product-preview-image-overlay">
															</div>
														</div>
													</div>
													<div class="col-sm-8">
														<div class="product-preview-text">
															<h2>Chris Moore</h2>
															<i>What Can I Do</i>
															<p>
																Listen now to Chris Moore's first electronic outing featuring cuts of hip-hop, dub and afro-ispired beats.
															</p>
														</div>

													</div>
												</div>
											</a>
										</div>
									</div>

							<?php endwhile; ?>
						</div>

					</section>

				</main><!-- #main -->

			</div><!-- #primary -->

			<!-- <?php get_sidebar( 'right' ); ?>

		</div><!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
