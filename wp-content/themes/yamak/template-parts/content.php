<?php

/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
$page_ID = get_the_ID();
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content d-flex align-items-center">

		<?php if (have_rows("entry_content", $page_ID)) : ?>
			<?php while (have_rows('entry_content', $page_ID)) : the_row();  ?>
				<?php if (get_row_layout() == "values_section") : ?>
					<?php $postIDs = get_sub_field("our_values", $page_ID); ?>
					<div class="all-content values-sec">
						<section class="our-values mt-2 pt-md-2">
							<div class="container-fluid mt-5">
								<div class="all-values">
									<?php 
									$c=1000;
									foreach ($postIDs as $id) : ?>
										<?php
										$titlePost = get_field("title", $id);
										$imageIconPost = get_field("value_image", $id);
										$description = get_field("description", $id);
										?>
										<div class="value-card mt-3 mx-4">
											<?php if (!empty($imageIconPost)) : ?>
												<div class="content-img">
													<img src="<?php echo $imageIconPost ?>" class="img-fluid">
												</div>
											<?php endif; ?>
											<?php if (!empty($titlePost)) : ?>
												<div class="header-border">
													<h3 class="primary-color"><?php echo $titlePost; ?></h3>
												</div>
											<?php endif; ?>
											<?php if (!empty($description)) : ?>
												<span class="secondary-ligth-color"><?php echo $description; ?></span>
											<?php endif; ?>
										</div>
									<?php
									$c+=500; 
								endforeach; ?>
								</div>
							</div>
						</section>
					</div>
				<?php endif; ?>

				<?php if (get_row_layout() == "text_with_image") : ?>
					<?php
					$title = get_sub_field("title");
					$description = get_sub_field("description");
					$image = get_sub_field("image");
					?>
					<div class="all-content">
						<section class="text-with-image mt-2 pt-md-2">
							<div class="container-fluid mt-5">
								<div class="row ">
									<div class="col-md-6 text-center" data-aos="fade-up" data-aos-duration="1000">
										<?php if (!empty($image)) : ?>
											<img src="<?php echo $image ?>" class="img-fluid">
										<?php endif; ?>
									</div>
									<div class="col-md-6 mt-5" data-aos="fade-down" data-aos-duration="1000">
										<div class="paragraphs-details">
											<?php if (!empty($title)) : ?>
												<h2 class="primary-color"><?php echo $title; ?></h2>
											<?php endif; ?>
											<?php if (!empty($description)) : ?>
												<span class="secondary-ligth-color"><?php echo $description; ?></span>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</div>
						</section>
					</div>
				<?php endif; ?>

				<?php if (get_row_layout() == "contact_us_section") : ?>
					<section class="contact-us-section mt-2 pt-md-2 w-100">
						<div class="container-fluid mt-5">
							<?php
							$titleofsection = get_sub_field("title_of_section", $page_ID);
							$shortcode_form = get_sub_field("shortcode_form", $page_ID);
							$email_info = get_sub_field("email_info", $page_ID);
							$location = get_sub_field("location", $page_ID);
							$locationlink = get_sub_field("location_link", $page_ID);
							?>
							<?php if (!empty($titleofsection)) : ?>
								<h2 class="primary-color"><?php echo $titleofsection ?></h2>
							<?php endif; ?>
							<div class="row mt-5">
								<div class="col-md-2" data-aos="fade-in" data-aos-duration="1000">
									<?php
									if (have_rows('social_media_channels', $page_ID)) : ?>
										<div class="social-media">
											<p class="primary-color mt-0"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Social" : "وسائل التواصل الاجتماعي"; ?></p>
											<div class="channels d-flex flex-column justify-content-around">
												<?php while (have_rows('social_media_channels', $page_ID)) : the_row(); ?>
													<?php
													$text_of_channel = get_sub_field("text_of_channel");
													$link_of_channel = get_sub_field("link_of_channel");
													?>
													<?php if (!empty($text_of_channel) && !empty($link_of_channel)) : ?>
														<a href="<?php echo $link_of_channel ?>" class="secondary-ligth-color mt-2"><?php echo $text_of_channel ?></a>
													<?php endif; ?>
												<?php
												endwhile;
												?>
											</div>
										</div>
									<?php
									endif;
									?>
									<?php if (!empty($email_info)) : ?>
										<div class="email-info mt-5">
											<p class="primary-color"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Email" : "البريد الإلكتروني"; ?></p>
											<a href="mailto:<?php echo $email_info ?>" class="secondary-ligth-color mt-5"><?php echo $email_info ?></a>
										</div>
									<?php endif; ?>
									<?php if (!empty($location) && !empty($locationlink)) : ?>
										<div class="location mt-5">
											<p class="primary-color"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Location" : "العنوان"; ?></p>
											<a href="<?php echo $locationlink ?>" class="secondary-ligth-color mt-2"><?php echo $location ?></a>
										</div>
									<?php endif; ?>
								</div>
								<div class="col-md-10" data-aos="zoom-in" data-aos-duration="1000">
									<?php echo do_shortcode($shortcode_form); ?>
								</div>
							</div>
						</div>
					</section>
				<?php endif; ?>


				<?php if (get_row_layout() == "services_section") : ?>
					<section class="services-section">
						<div class="all-contents ">
							<div class="container-fluid">
								<div class="all-services">
									<?php
									$titleofsection = get_sub_field("title_section", $page_ID);
									$servicesIDs = get_sub_field("services", $page_ID); ?>
									<?php if (!empty($titleofsection)) : ?>
										<h2 class="primary-color" data-aos="fade-down" data-aos-duration="1000"><?php echo $titleofsection ?></h2>
									<?php endif; ?>
									<div class="row">
										<div class="col-md-2" data-aos="fade-down" data-aos-duration="1000">
											<ul class="nav nav-pills flex-column" id="experienceTab" role="tablist">
												<?php
												$conuter1 = 1;
												foreach ($servicesIDs as $id) :
												?>
													<?php
													$titlePost = get_field("title", $id);

													?>
													<li class="nav-item">
														<a class="secondary-ligth-color text-decoration-none nav-link <?php if ($conuter1 == 1) {
																				echo "active";
																			} ?>" id="tabs<?php echo $conuter1 ?>" data-toggle="tab" href="#tab<?php echo $conuter1 ?>" role="tab" aria-controls="" aria-selected="true"><?php echo $titlePost ?></a>
													</li>
												<?php
													$conuter1++;
												endforeach; ?>
											</ul>
										</div>
										<div class="col-md-10" data-aos="fade-up" data-aos-duration="1000">
											<div class="tab-content " id="experienceTabContent">
												<?php
												$conuter2 = 1;
												foreach ($servicesIDs as $id) :
													$titlePost = get_field("title", $id);
													$imageIconPost = get_field("image", $id);
													$description = get_field("description", $id);
												?>
													<div class="tab-pane mt-3 fade show <?php if ($conuter2 == 1) {
																						echo "active";
																					} ?> text-left text-light" id="tab<?php echo $conuter2 ?>" role="tabpanel" aria-labelledby="home-tab">
														<div class="content-tab d-flex align-items-center">
															<div class="services-img mx-3">
																<?php if (!empty($imageIconPost)) : ?>
																	<img src="<?php echo $imageIconPost ?>" class="img-fluid">
																<?php endif; ?>
															</div>
															<div class="services-description">
																<?php if (!empty($titlePost)) : ?>
																	<h3 class="primary-color"><?php echo $titlePost ?></h3>
																<?php endif; ?>
																<?php if (!empty($description)) : ?>
																	<span class="secondary-ligth-color"><?php echo $description ?></span>
																<?php endif; ?>
															</div>
														</div>
													</div>
												<?php
													$conuter2++;
												endforeach; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div><!-- .entry-content -->

</article><!-- .post -->
<?php get_footer() ?>