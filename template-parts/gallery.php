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