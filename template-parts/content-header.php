<!-- here is the header -->
<!--  make the header have flexbox on large screen -->
<div class="flex-l">
    <!-- make the header background have 100% width and then 60% with on large screen, as well as 50vh and 100vh height on small and large screens -->
    <div style="
	          <?php nice_background('hero_image');?>" class="w-100 w-60-l vh-50 vh-100-l cover bg-center"></div>
    <!-- here is the header content -->
    <div class="w-100 w-40-l flex items-center justify-center ph3 ph4-l relative ">
        <div class="tc">
            <!-- use absolute psition for larger screens to put the date in the top center -->
            <p class="f6 archivo mt0 mb5 mb0-l ttu tracked absolute-l top-0-l left-0-l w-100-l pt4">
                <?php nice_date(get_field('date'))?>
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