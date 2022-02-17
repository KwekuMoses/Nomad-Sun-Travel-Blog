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

        <?php get_template_part( 'template-parts/content-header'); ?>

        <!-- if it’s a text component, show us the data -->
        <?php elseif( get_row_layout() == 'text_block' ): ?>

        <?php get_template_part( 'template-parts/content-text'); ?>


        <?php elseif(get_row_layout() == 'gallery') : ?>
        <!-- this tag wraps around the gallery and contains everything -->
        <div class="container flex flex-wrap center ph4-l">
            <?php $images = get_sub_field('gallery') ; ?>
            <?php foreach($images as $image) : ?>
            <!-- here is the header backrgroundimage -->
            <!-- here we have added a custom field to our attachments which adds a class name to control the width of the images -->
            <div class="gallery-image ph3 mb4  <?php the_field('image_width', $image['id']) ?>">
                <!-- make the font 50% opacity -->
                <!-- get image by ID -->
                <?php echo wp_get_attachment_image($image['id'], 'full'); ?>

                <!-- here we assign our caption to a variable called $caption -->
                <?php $caption = wp_get_attachment_caption($image['id']); ?>

                <!-- if the caption is not empty, render it onto the page -->
                <?php if(!empty($caption)) :  ?>
                <p class="caption archivo-regular f5 o-50 pt3 mv0">
                    <?php echo $caption; ?>
                </p>
                <?php endif; ?>
            </div>

            <?php endforeach;?>
        </div>

        <?php endif; 
endwhile; endif; ?>

    </div>


    <footer class="entry-footer">
        <!-- <?php nomad_sun_entry_footer(); ?> -->
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->