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
                            <div class="col-md-6"  data-aos="fade-in" data-aos-duration="1000">
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
                                        <div class="col-md-12"  data-aos="fade-down" data-aos-duration="1000">
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

<div id="openModal" class="modalDialog">
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
</div>