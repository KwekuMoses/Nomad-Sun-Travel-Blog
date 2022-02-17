    <!-- using the permalink gives a link to the post -->

    <!-- <h1>
        <a href="<?php the_permalink(); ?>">
            Check out <?php the_title(); ?>

        </a>
    </h1> -->

    <!-- background image for hero  -->
    <!-- here is used an inline style attribute to attach the hero image as a css background directly onto the element -->

    <!-- make the hero have a min height of 100vh, cover the background, center it, add flexbox and make the content center vertically and horizontally  -->
    <a class="db link hero min-vh-100 cover bg-center flex items-center justify-center" style="
	  <?php nice_background('hero_image');  ?>" href="<?php the_permalink();?>">
        <!-- make text white and center it -->
        <div class="hero-content white tc ph3 ph4-l">
            <!-- the location title  -->
            <h1 class="hero-heading f2 f1-l archivo b mt0 mb3 ttu lh-title"> <?php the_title(); ?> </h1>

            <!-- the location subheading -->
            <?php if (get_field('subhead')): ?>
            <p class="hero-subhead f2 f1-l tenor mb5 mb6-l mt0 ttu lh-title"><?php the_field('subhead'); ?></p>
            <?php endif; ?>

            <!-- formatted date  -->
            <?php if (get_field('date')): ?>
            <p class="f6 date ma0 ttu tracked archivo">
                <?php 
			// convert  date into format that php can work with
			// then format it to be nice + readable
            nice_date(get_field('date'))
			?>

            </p>
            <?php endif; ?>
        </div>
    </a>