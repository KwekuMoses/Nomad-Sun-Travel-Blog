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



    <div class="entry-content">
        <!-- if we have some flexible content, let’s loop through it -->
        <?php if( have_rows('content') ): while ( have_rows('content') ) : the_row();
  // if it’s a header, go through the data
  if( get_row_layout() == 'header' ): ?>

        <!-- here is the header -->
        <!--  make the header have flexbox on large screen -->
        <div class="flex-l">
            <!-- make the header background have 100% width and then 60% with on large screen, as well as 50vh and 100vh height on small and large screens -->
            <div style="
	  <?php if (get_field('hero_image')): ?>
			background-image: url(<?php the_field('hero_image'); ?>)<?php endif; ?>"
                class="w-100 w-60-l vh-50 vh-100-l cover bg-center"></div>
            <!-- here is the header content -->
            <div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative ">
                <div class="tc">
                    <!-- use absolute psition for larger screens to put the date in the top center -->
                    <p class="f6 archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt4">
                        <?php echo date("F Y", strtotime(get_field('date')))?>
                        <span class="line mt4"></span>
                    </p>
                    <!-- standard wordpress data -->
                    <!-- change the type scale for larger screens, squish the line height a bit becuase of bigger font size -->
                    <h1 class="f2 f1-l archivo mt0 mb4 ttu lh-title">
                        <?php the_title(); ?>
                    </h1>

                    <p class="f2 f1-l tenor mt0 mb4 mb5-l ttu lh-title">
                        <?php the_field('subhead'); ?>
                    </p>
                    <!-- specific to this component -->
                    <p class="f4 cardo i measure center mv0">
                        <?php the_sub_field('header_intro'); ?>
                    </p>
                </div>
            </div>
        </div><!-- .entry-content -->


        <!-- if it’s a text component, show us the data -->
        <?php elseif( get_row_layout() == 'text_block' ): ?>
        <!-- the text block  -->
        <div class="pv6 measure-wide center text-block f4">
            <?php the_sub_field('text_content'); ?>

        </div>
        <?php endif; 
endwhile; endif; ?>

    </div>
    <!-- here is the header backrgroundimage -->


    <footer class="entry-footer">
        <!-- <?php nomad_sun_entry_footer(); ?> -->
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->