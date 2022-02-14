<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomad_sun
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- background image for hero  -->
    <!-- here is used an inline style attribute to attach the hero image as a css background directly onto the element -->
    <section class="hero" style="
	  <?php if (get_field('hero_image')): ?>
			background-image: url(<?php the_field('hero_image'); ?>)
				<?php endif; ?>
				">
        <div class="hero-content">
            <!-- the location title  -->
            <h1> <?php the_title(); ?> </h1>
            <!-- the location subheading -->
            <?php if (get_field('subhead')): ?>
            <p><?php the_field('subhead'); ?></p>
            <?php endif; ?>

            <!-- formatted date  -->
            <?php if (get_field('date')): ?>
            <p>
                <?php 
			// convert  date into format that php can work with
			// then format it to be nice + readable
			echo date("F Y", strtotime(get_field('date')))
			?>

            </p>
            <?php endif; ?>
        </div>
    </section>

    <header class="entry-header">

    </header><!-- .entry-header -->


    <div class="entry-content">

    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <!-- <?php nomad_sun_entry_footer(); ?> -->
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->