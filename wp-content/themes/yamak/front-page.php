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

?>
<?php
$page_ID = get_the_ID();
get_header() ?>
<div class="content-container container-fluid">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

        <div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">
            <?php
            $image = get_field("image", $page_ID);
            $textbtn = get_field("text_button", $page_ID);
            $linkbtn = get_field("link_of_button", $page_ID);
            $iconbtn = get_field("icon_of_button", $page_ID);
            ?>
            <div class="entry-content">
                <div class="all-content d-flex">
                    <section class="home-page-section mt-2">
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-in" data-aos-duration="1000">
                                <?php if (!empty($image)) : ?>
                                    <img src="<?php echo $image ?>" class="img-fluid home-img">
                                <?php endif; ?>
                                <?php if (!empty($iconbtn) && !empty($textbtn) && !empty($linkbtn)) : ?>
                                    <div class="custom-btn d-flex justify-content-center align-items-center">
                                        <div class="icon-btn mx-3">
                                            <i class="icon-<?php echo $iconbtn ?> secondary-color"></i>
                                        </div>
                                        <div class="link-of-btn">
                                            <a href="<?php echo $linkbtn ?>" class="primary-color text-uppercase text-decoration-none"><?php echo $textbtn ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">

                                <?php while (have_rows('paragraphs', $page_ID)) : the_row(); ?>
                                    <?php
                                    $title = get_sub_field("title");
                                    $description = get_sub_field("description");
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12" data-aos="fade-down" data-aos-duration="1000">
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
                                <?php endwhile; ?>

                            </div>
                        </div>
                    </section>



                </div>
            </div><!-- .entry-content -->

        </div><!-- .post-inner -->



    </article><!-- .post -->
</div>
<?php get_footer() ?>

<!-- <div id="openModal" class="modalDialog">
    <div class="modalDialog-content">
        <a href="#close" title="Close" class="close"><i class="icon-clear"></i></a>
        <?php $videoUrl = get_field("popups_video", $page_ID); ?>
        <?php if (!empty($videoUrl)) : ?>
            <video class="video-intro" id="video-intro" autoplay loop muted>
                <source src="<?php echo $videoUrl ?>" type="video/mp4">
            </video>
            <div class="control-video">
                <i class="icon-pause1" id="video-icon" data-target="play"></i>
            </div>
        <?php endif; ?>
    </div>
</div> -->






<?php
// Check rows existexists.
if (have_rows('wizard')) :

?>
    <div class="modalWizard">

        <div id="openModal" class="modalDialog">

            <div class="modalDialog-content">

                <a href="#close" title="Close" class="close"><i class="icon-clear"></i></a>

                <div id="wizard">
                    <?php


                    $step = 1;
                    // Loop through rows.
                    while (have_rows('wizard')) : the_row();

                        // Load sub field value.
                        $step_title = get_sub_field('step_title');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                        // Do something...

                        $row_index = get_row_index();
                        $total_rows = count(get_field('wizard'));

                    ?>

                        <div class="wizard-step" id="<?php echo 'step' . $step; ?>">

                            <h3>
                                <?php
                                if ($step_title) {
                                    echo $step_title;
                                }
                                ?>
                            </h3>
                            <div class="step-body d-flex flex-wrap flex-md-nowrap align-items-start">

                                <?php
                                if ($image) {
                                    echo '<img src="' . $image . '" />';
                                    echo '<p class="mx-2">' . $description . '</p>';
                                } else {
                                    echo '<p>' . $description . '</p>';
                                }


                                ?>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 border-top pt-2">

                                <?php if ($step != 1) {
                                ?>
                                    <button class="btn btn-secondary prev"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Previous" : "السابق"; ?></button>
                                <?php
                                } else {
                                    echo '<div></div>';
                                } ?>

                                <div class="slider-dots d-flex align-items-center justify-content-between">

                                    <?php
                                    for ($x = 1; $x <= $total_rows; $x++) {
                                    ?>
                                        <div class="slide-pot-item <?php echo $step == $x ? 'active' : ''; ?>"></div>
                                    <?php
                                    }
                                    ?>

                                </div>

                                <?php if ($row_index === $total_rows) {
                                ?>
                                    <button class="btn btn-primary text-decoration-none finish"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Finish" : "النهاية"; ?></button>

                                <?php
                                } else {
                                ?>
                                    <button class="btn btn-primary next"><?php echo ICL_LANGUAGE_CODE == 'en' ? "Next" : "التالي"; ?></button>
                                <?php
                                } ?>


                            </div>

                        </div>

                    <?php

                        // End loop.
                        $step = $step + 1;
                    endwhile;

                    ?>
                </div>

            </div>

        </div>

    </div>
<?php



endif;

?>